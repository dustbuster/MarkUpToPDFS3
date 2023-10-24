const test = require("node:test");
const AWS = require('aws-sdk');
const S3_BUCKET_NAME = 'ramp-pdf-bucket';
const RANDOMHEX = new Date().getTime().toString(36);

test("Test that file stream can make it to S3", async (t) => {
  const filename = `pdfs/${RANDOMHEX}-hello-world.txt`;
  const uploadParams = {
    Bucket: S3_BUCKET_NAME,
    Key: filename,
    Body: 'Hello World',
  };
  
  try {
    const data = await new AWS.S3().putObject(uploadParams).promise();
    console.log("Successfully uploaded data to " + S3_BUCKET_NAME);
    return {
      statusCode: 200,
      body: JSON.stringify({ message: 'File uploaded', filename }),
    };
  } catch (error) {
    console.error(error);
    return {
      statusCode: 500,
      body: JSON.stringify({ error: 'Something went wrong while uploading' }),
  };
  }
});
