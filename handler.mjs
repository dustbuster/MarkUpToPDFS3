import AWS from 'aws-sdk';
import * as ParseText from './ParseText.js';
import puppeteer from 'puppeteer';
import chromium from '@sparticuz/chromium';

const s3 = new AWS.S3();
const S3_BUCKET_NAME = 'ramp-pdf-bucket';
// NEW
async function getBodyAttributes(body) {
  return await ParseText.convertBodyToAttributesArray(body);
}

export const main = async (event) => {
  console.log('-- POST RECEIVED! --');
  if (event && event['body'].length == 0) {
    return returnError('No body or request found!');
  }

  let bodyAttributes = await getBodyAttributes(event['body']);

  if (! bodyAttributes) {
    return returnError('HTML Not recieved');
  }
  // try { - moved TRY to attempt to find error.
  let filename = bodyAttributes['filename'];
  const html = bodyAttributes['rawHtml'];

  console.log(filename + ' being created');

  const additionalChromiumArgs = [
    '--font-render-hinting=none',
    '--enable-gpu',
    '--no-sandbox'
  ];
  const isLocal = process.env.IS_LOCAL;
  console.log('process.env.IS_LOCAL');
  console.log(process.env.IS_LOCAL);


  if (! isLocal) {
    console.log('NOT is Local');
  } else {
    console.log('IS is Local');
  }

  const executablePath = await chromium.executablePath();
  const options = {
    margin: { top: "0.3in", bottom: "0.5in" },
    printBackground: true,
    displayHeaderFooter: true,
    headerTemplate: "<div/>",
    footerTemplate: "<div style=\"text-align: right;width: 297mm;font-size: 8px;\"><span style=\"margin-right: 1cm\"><span class=\"pageNumber\"></span> of <span class=\"totalPages\"></span></span></div>"
  };

  const browser = await puppeteer.launch({
    headless: 'new',
    executablePath: executablePath,
    defaultViewport: chromium.defaultViewport,
    args: chromium.args.concat(additionalChromiumArgs)
  });

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

  if (pdfBuffer) {
    console.log('pdfBuffer');
    console.log(pdfBuffer);
  }
  console.log('filename before ' + filename);
  
  // Just the filename
  filename = await ParseText.getFileName(filename);

  console.log('new ver filename after ' + filename);

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

    console.log('fullpath');
    console.log(fullpath);

    const params = {
      Bucket: S3_BUCKET_NAME,
      Key: fullpath,
      Body: pdfBuffer,
      ContentType: 'application/pdf',
    };
    await s3.upload(params).promise();

  try {
    // Using the try as a cursor to figure out breaking points.
    console.log('file uploaded?');
    return {
      statusCode: 200,
      body: JSON.stringify({ message: 'PDF created and uploaded to S3', filename: fullpath }),
    };
  } catch (error) {
    console.log(error);
    return returnError('Something errored in try catch!');
  }
};

export const returnError = (errorString) => {
  return {
    statusCode: 500,
    body: JSON.stringify({ error: errorString }),
  };
};
