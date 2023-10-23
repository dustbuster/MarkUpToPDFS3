import AWS from 'aws-sdk';
import * as ParseText from './ParseText.js';
import puppeteer from 'puppeteer';
import chromium from 'chrome-aws-lambda';

const s3 = new AWS.S3();
const S3_BUCKET_NAME = 'ramp-pdf-bucket';

async function getBodyAttributes(body) {
  return await ParseText.convertBodyToAttributesArray(body);
}

export const main = async (event) => {

  console.log('-- POST RECEIVED! --');

  if (event && event['body'].length == 0) {
    return returnError('No body or request found!');
  }
  try {
    let bodyAttributes = await getBodyAttributes(event['body']);

    if (! bodyAttributes) {
      return returnError('HTML Not recieved');
    }

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

    let browser = null;
    console.log('process.env.IS_LOCAL');
    console.log(process.env.IS_LOCAL);
    if (process.env.IS_LOCAL === 'true') {
      console.log('LOCAL version chromoium');
      browser = await puppeteer.launch({
        headless: 'new',
        // Executable library accessible locally. 
      });
    } else {
      console.log('not local version chromoium');
      browser = await puppeteer.launch({
        headless: 'new',
        executablePath: '/opt/headless-chromium', // Path to the Chromium binary
        args: ['--no-sandbox', '--disable-dev-shm-usage'],
      });
    }

    const page = await browser.newPage();

    await page.setCacheEnabled(false);

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

    if (! pdfBuffer) {
      console.log('does not exist!');
    } else {
      console.log('exist!');
    }

    await browser.close();

    let fullpath = '';

    if (filename) {
      //  REMOVE AFTER TESTING - just for making mock files unique
      const hex = (new Date()).getTime().toString(36);
      fullpath = `pdfs/${hex}-${filename}`;
      console.log('Creating file: '+ fullpath);
    } else {
      return returnError('File name deos not exist!');
    }    

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
