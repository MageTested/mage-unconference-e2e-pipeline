import { test, expect } from '@playwright/test';

test('Can add product to cart', async ({ page }) => {
  await page.goto('/joust-duffle-bag.html');

  // Expect a title "to contain" a substring.
  await page.getByRole('button', {name: 'Add to Cart'}).click();

  await expect(page.locator('.counter.qty .counter-number').first()).toHaveText('1');
});
