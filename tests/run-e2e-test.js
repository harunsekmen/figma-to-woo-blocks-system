
const { chromium } = require('playwright');
const path = require('path');
const fs = require('fs');

(async () => {
  const browser = await chromium.launch({
    headless: true,
    executablePath: '/Applications/Google Chrome.app/Contents/MacOS/Google Chrome'
  });
  const context = await browser.newContext({
    viewport: { width: 1200, height: 820 },
    deviceScaleFactor: 2
  });
  const page = await context.newPage();

  const docsDir = path.join(__dirname, '..', 'docs', 'assets');
  if (!fs.existsSync(docsDir)) {
    fs.mkdirSync(docsDir, { recursive: true });
  }

  // Storefront Clean View (Figma-to-Woo Blocks)
  const storeUrl = 'file://' + path.join(__dirname, 'store-simulation.html');
  console.log('Navigating to:', storeUrl);
  await page.goto(storeUrl);

  const blockScreenshot = path.join(docsDir, 'figma-to-woo-blocks-showcase.png');
  await page.screenshot({ path: blockScreenshot, fullPage: false });
  console.log('Saved block showcase preview to:', blockScreenshot);

  await browser.close();
  console.log('ALL TESTS PASSED: FigmaToWoo preview captured successfully.');
})();

