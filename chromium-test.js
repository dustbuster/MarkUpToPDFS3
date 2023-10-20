const test = require("node:test");
const puppeteer = require("puppeteer-core");
import * as chromium from "chrome-aws-lambda";

// Optional: If you'd like to use the legacy headless mode. "new" is the default.
chromium.setHeadlessMode = true;

// Optional: If you'd like to disable webgl, true is the default.
chromium.setGraphicsMode = false;
// Optional: Load any fonts you need. Open Sans is included by default in AWS Lambda instances
chromium.font(
    "https://raw.githack.com/googlei18n/noto-emoji/master/fonts/NotoColorEmoji.ttf"
);

test("Check the page title of example.com", async (t) => {
  const browser = await puppeteer.launch({
    args: chromium.args,
    defaultViewport: chromium.defaultViewport,
    executablePath: await chromium.executablePath(),
    headless: chromium.headless,
  });

  const page = await browser.newPage();
  await page.goto("https://example.com");
  const pageTitle = await page.title();
  console.log('pageTitle');
  console.log(pageTitle);
  await browser.close();

  assert.strictEqual(pageTitle, "Example Domain");
});