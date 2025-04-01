import { test, expect } from '@playwright/test';
import { defineConfig } from '@playwright/test';

export default defineConfig({
    use: {
      headless: false,  // これでブラウザを開く
    },
  });

test('フォームを送信して応答を確認', async ({ page }) => {
    await page.goto('http://localhost:1000/index.php'); // PHPサーバーのURLを指定
    await page.fill('input#name', 'テストユーザー');
    await page.click('button');
    await expect(page.locator('#result')).toHaveText('こんにちは、テストユーザー さん！');
});
