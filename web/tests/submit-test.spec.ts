import { test, expect } from '@playwright/test';

test('test', async ({ page }) => {
  await page.goto('http://localhost:1000/');
  await page.getByRole('textbox', { name: '名前:' }).dblclick();
  await page.getByRole('textbox', { name: '名前:' }).fill('aaaa');
  await page.getByRole('textbox', { name: '名前:' }).press('Tab');
  await page.getByRole('textbox', { name: 'メール:' }).fill('aaaa@email.com');
  await page.getByRole('textbox', { name: 'メール:' }).press('Tab');
  await page.getByRole('textbox', { name: 'メッセージ:' }).fill('test');
  await page.getByRole('button', { name: '送信' }).click();
});