const url = require('url');

async function convertBodyToAttributesArray(body) {
  const text = await base64Decode(body);
  if (text == null) {
    return;
  }
  const entireBody = await splitBodyIntoArray(text);
  const filename = await urlDecodeFileName(entireBody[0]);
  const rawHTML = await urlDecodeTextAttribute(entireBody[1]);
  console.log('First 100 chars of HTML');
  console.log(rawHTML.substring(0, 100));

  return {
    rawHtml: rawHTML,
    filename: filename,
  };
}

module.exports = {
  convertBodyToAttributesArray,
  getFileName
};

async function splitBodyIntoArray(text) {
  const urlObjectPathname = url.parse(text, true).pathname;
  return urlObjectPathname.split('&text=');
}

async function getFileName(filename) {
  let fileArray = [];
  if (filename.includes('/')) {
    fileArray = filename.split('/');
    return fileArray[fileArray.length - 1];
  } else {
    return filename;
  }
}

async function base64Decode(body) {
  if (body) {
    const buff = Buffer.from(body, 'base64');
    return buff.toString('utf-8');
  } else {
    return;
  }
}

async function urlDecodeTextAttribute(text) {
  const decodedHTML = decodeURIComponent(text);
  return decodedHTML.replace(/\+/g, ' ');
}

async function urlDecodeFileName(text) {
  const roughFileName = decodeURIComponent(text);
  return roughFileName.split('filename=').pop();
}
