import AWS from 'aws-sdk';
import * as ParseText from './ParseText.js';
import puppeteer from 'puppeteer';
import chromium from '@sparticuz/chromium';

const s3 = new AWS.S3();
const S3_BUCKET_NAME = 'ramp-pdf-bucket';

export const main = async (event) => {
  const isRunningLocally = process.env.IS_LOCAL === undefined ? false : true;
  if (event && event['body'].length == 0) {
    return returnError('No body or request found!')
  } 

  try {
    let bodyAttributes = await ParseText.convertBodyToAttributesArray(event['body']);
    if (! bodyAttributes) {
      return returnError('HTML Not recieved');
    }
    let filename = bodyAttributes['filename'];
    const html = bodyAttributes['rawHtml'];

    console.log(filename + ' being created');

    const additionalChromiumArgs = [
      '--font-render-hinting=none',
      '--enable-gpu'
    ];

    const executablePath = await chromium.executablePath();

    const options = {
      margin: { top: "0.3in", bottom: "0.5in" },
      printBackground: true,
      displayHeaderFooter: true,
      headerTemplate: "<div/>",
      footerTemplate: "<div style=\"text-align: right;width: 297mm;font-size: 8px;\"><span style=\"margin-right: 1cm\"><span class=\"pageNumber\"></span> of <span class=\"totalPages\"></span></span></div>"
    };

    let launchConfig = {
      headless: 'new',
      defaultViewport: chromium.defaultViewport,
      args: chromium.args.concat(additionalChromiumArgs)
    };

    if (! isRunningLocally) {
      launchConfig.executablePath = executablePath;
    }

    let browser = await puppeteer.launch(launchConfig);
    const page = await browser.newPage();
    await page.setCacheEnabled(false);

    const loaded = page.waitForNavigation({
      waitUntil: "networkidle0",
    });

    await page.setContent(html);
    await loaded;

    const pdfBuffer = await page.pdf(options);

    if (! pdfBuffer) {
      return returnError('No PDF buffer created!');
    }
    console.log('pdfBuffer');
    console.log(pdfBuffer);
    filename = await ParseText.getFileName(filename);

    const randomTimeHex = isRunningLocally ? (new Date()).getTime().toString(36) : '';
    const fullFileName = 'pdfs/' + randomTimeHex + '-' + await ParseText.getFileName(filename);

    console.log('File sanity check: ' + fullFileName);

    const data = await new AWS.S3().putObject({
      Bucket: S3_BUCKET_NAME,
      Key: fullFileName,
      Body: pdfBuffer
    }).promise();

    if (isRunningLocally) {
      // this will cause time out in lambda.
      await browser.close();
    }

    console.log("Successfully uploaded data to " + S3_BUCKET_NAME + "/" + fullFileName);

    return {
      statusCode: 200,
      body: JSON.stringify({ message: 'PDF created and uploaded to S3', filename: fullFileName }),
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

export const testConnectibvity = () => {
  s3.listBuckets(function(err, data) {
    if (err) {
      console.log(err, err.stack);
      return false;
    } else {
      console.log(data);
      return true;
    }
  });
}