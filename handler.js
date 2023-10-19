const puppeteer = require('puppeteer-core');
const chromium = require('chrome-aws-lambda');
const AWS = require('aws-sdk');
const ParseText = require('./ParseText');

const s3 = new AWS.S3();
const S3_BUCKET_NAME = 'health-profile-pdf-dev';

module.exports.generatePDF = async (event) => {
  console.log('-- POST MADE --');
  let bodyAttributes = await ParseText.convertBodyToAttributesArray(event['body'])
    .catch(error => {
      console.error('Error:', error);
      return {
        statusCode: 500,
        body: JSON.stringify({ error: 'Could not convert body to proper format'}),
      };
  });

  const filename = bodyAttributes['filename'];
  const html = bodyAttributes['rawHtml'];
  console.log(filename + ' being created');

  const options = {
    margin: { top: "0.3in", bottom: "0.5in" },
    printBackground: true,
    displayHeaderFooter: true,
    headerTemplate: "<div/>",
    footerTemplate: "<div style=\"text-align: right;width: 297mm;font-size: 8px;\"><span style=\"margin-right: 1cm\"><span class=\"pageNumber\"></span> of <span class=\"totalPages\"></span></span></div>"
  };

  try {
    const binaryPath = await chromium.executablePath;
    console.log(binaryPath);

    console.log('chromium.args');
    console.log(chromium.args);

    const browser = await puppeteer.launch({
      args: chromium.args,
      executablePath: binaryPath,
      headless: true,
    });

    const page = await browser.newPage();
    console.log('page');
    console.log(page);
    // Just added this
    const loaded = page.waitForNavigation({
      waitUntil: "networkidle0",
    });

    await page.setContent(html);
    await loaded;
    // Just added this
    const pdfBuffer = await page.pdf(options);

    console.log('pdfBuffer');
    console.log(pdfBuffer);

    await browser.close();
    const fullpath = `pdfs/${filename}.pdf`;
    
    console.log('fullpath');
    console.log(fullpath);

    const params = {
      Bucket: S3_BUCKET_NAME,
      Key: fullpath,
      Body: pdfBuffer,
      ContentType: 'application/pdf',
    };

    await s3.upload(params).promise();

    return {
      headers: {
        "Content-type": "application/JSON",
      },
      statusCode: 200,
      body: JSON.stringify({ message: 'PDF created and uploaded to S3', filename: fullpath }),
    };
  } catch (error) {
    console.log(error);
    return {
      statusCode: 500,
      body: JSON.stringify({ error: 'Something went wrong' , filename: 'failed'}),
    };
  }
};
