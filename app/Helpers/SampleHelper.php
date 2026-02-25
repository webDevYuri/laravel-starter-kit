<?php

// ---------------------------------------------------------------------------
// Sample Helper — Global utility functions
// ---------------------------------------------------------------------------
// Helpers provide standalone utility functions used across the application.
// Register this file in composer.json autoload.files to make functions global.
//
// You can add string formatting, date helpers, array utilities,
// or response helpers here later.
// ---------------------------------------------------------------------------
//
// Registration in composer.json:
//   "autoload": {
//       "files": ["app/Helpers/SampleHelper.php"]
//   }
//
// Rename this file to match your purpose: StringHelper.php, ResponseHelper.php, etc.
// Delete this file once you have your own helpers.
// ---------------------------------------------------------------------------

if (! function_exists('format_money')) {
    /**
     * Format a number as currency.
     */
    function format_money(float $amount, string $currency = 'USD'): string
    {
        return number_format($amount, 2) . ' ' . $currency;
    }
}
