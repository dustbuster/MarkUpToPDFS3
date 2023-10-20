import chromium from "chrome-aws-lambda";
import AWS from 'aws-sdk';
import * as ParseText from './ParseText.js';

const s3 = new AWS.S3();
const S3_BUCKET_NAME = 'ramp-pdf-bucket';

async function getBodyAttributes(body) {
  return await ParseText.convertBodyToAttributesArray(body);
}

export const main = async (event) => {
  console.log('-- POST RECEIVED! --');
  console.log('event[body].length');
  console.log(event['body'].length);
  try {
    let bodyAttributes = await getBodyAttributes(event['body']);

    if (! bodyAttributes) {
      return returnError('HTML Not recieved');
    }

    const filename = bodyAttributes['filename'];
    const html = bodyAttributes['rawHtml'];
    console.log(filename + ' being created');

    const additionalChromiumArgs = [
      '--font-render-hinting=none',
      '--enable-gpu'
    ];

    const options = {
      margin: { top: "0.3in", bottom: "0.5in" },
      printBackground: true,
      displayHeaderFooter: true,
      headerTemplate: "<div/>",
      footerTemplate: "<div style=\"text-align: right;width: 297mm;font-size: 8px;\"><span style=\"margin-right: 1cm\"><span class=\"pageNumber\"></span> of <span class=\"totalPages\"></span></span></div>"
    };

    const allChromiumArgs = [...chromium.args, ...additionalChromiumArgs];

    if (! chromium.args) {
      return returnError('chromium not defined');
    }

    console.log('allChromiumArgs');
    console.log(allChromiumArgs);

    browser = await chromium.puppeteer.launch({
      args: allChromiumArgs,
      executablePath: await chromium.executablePath
    });

    const page = await browser.newPage();

    console.log('page');

    if (page) {
      console.log('page exists');
    } else {
      console.log('page does NOT exist');
    }

    const loaded = page.waitForNavigation({
      waitUntil: "networkidle0",
    });

    await page.setContent(html);
    await loaded;

    const pdfBuffer = await page.pdf(options);

    console.log('pdfBuffer?');

    if (!pdfBuffer) {
      console.log('does not exist!');
    } else {
      console.log('exist!');
    }

    await browser.close();

    let fullpath = '';

    if (filename) {
      fullpath = `pdfs/${filename}.pdf`;
    } else {
      console.log('No filename?');
    }

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
      statusCode: 200,
      body: JSON.stringify({ message: 'PDF created and uploaded to S3', filename: fullpath }),
    };
  } catch (error) {
    console.log(error);
    return {
      statusCode: 500,
      body: JSON.stringify({ error: 'Something went wrong' , filename: 'fullpath would go here' }),
    };
  }
};

export const returnError = (errorString) => {
  return {
    statusCode: 500,
    body: JSON.stringify({ error: errorString }),
  };
};
