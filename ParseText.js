const url = require('url');

class ParseText {

  static async convertBodyToAttributesArray(body) {
    const text = await Conversion.base64Decode(body);
    const entireBody = await Conversion.splitBodyIntoArray(text);
    const filename = await Conversion.urlDecodeFileName(entireBody[0]);
    const rawHTML = await Conversion.urlDecodeTextAttribute(entireBody[1]);
    return {
      rawHtml: rawHTML,
      filename: filename,
    };
  }

  static async splitBodyIntoArray(text) {
    const urlObjectPathname = url.parse(text, true).pathname;
    return urlObjectPathname.split('&text=');
  }

  static async base64Decode(body) {
    const buff = Buffer.from(body, 'base64');
    return buff.toString('utf-8');
  }

  static async urlDecodeTextAttribute(text) {
    const decodedHTML = decodeURIComponent(text);
    return decodedHTML.replace(/\+/g, ' ');
  }

  static async urlDecodeFileName(text) {
    const roughFileName = decodeURIComponent(text);
    return roughFileName.split('filename=').pop();
  }

  // Started Appkey decoding
  static async urlDecodeAppKey(text) {
    const decodedAppKey = decodeURIComponent(text);
    return decodedAppKey.split('appkey=').pop();
  }
}

module.exports = Conversion;
