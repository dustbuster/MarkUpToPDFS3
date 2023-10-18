const puppeteer = require('puppeteer-core');
const chromium = require('chrome-aws-lambda');
const AWS = require('aws-sdk');

const s3 = new AWS.S3();
const S3_BUCKET_NAME = 'ramp-pdf-bucket';

module.exports.generatePDF = async (event) => {
  try {
    console.log('--REQUEST--');
    console.log(event);

    let bodyAttributes = await ParseText.convertBodyToAttributesArray(event['body']);

    const filename = bodyAttributes['filename'];
    const html = bodyAttributes['rawHtml'];

    const options = {
      margin: { top: "0.3in", bottom: "0.5in" },
      printBackground: true,
      displayHeaderFooter: true,
      headerTemplate: "<div/>",
      footerTemplate: "<div style=\"text-align: right;width: 297mm;font-size: 8px;\"><span style=\"margin-right: 1cm\"><span class=\"pageNumber\"></span> of <span class=\"totalPages\"></span></span></div>"
    };

    const browser = await puppeteer.launch({
      args: chromium.args,
      executablePath: await chromium.executablePath,
      headless: true,
    });

    const page = await browser.newPage();
    
    await page.setContent(html);
    const pdfBuffer = await page.pdf(options);
    await browser.close();
    const fullpath = `pdfs/${filename}.pdf`;
    const params = {
      Bucket: S3_BUCKET_NAME,
      Key: fullpath,
      Body: pdfBuffer,
      ContentType: 'application/pdf',
    };

    await s3.upload(params).promise();

    return {
      statusCode: 200,
      body: JSON.stringify({ message: 'PDF created and uploaded to S3', filename: fullpath }),
    };
  } catch (error) {
    return {
      statusCode: 500,
      body: JSON.stringify({ error: 'Something went wrong' , filename: 'failed'}),
    };
  }
};
