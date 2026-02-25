<?php

// ---------------------------------------------------------------------------
// Regex — Common validation patterns
// ---------------------------------------------------------------------------
// Centralized regex patterns for form requests and validation rules.
// Use with Laravel's 'regex' validation rule.
//
// You can add phone formats, postal codes, credit card patterns,
// or locale-specific patterns here later.
// ---------------------------------------------------------------------------

namespace App\Constants;

final class Regex
{
    /** At least 8 chars, 1 uppercase, 1 lowercase, 1 digit, 1 special character. */
    public const STRONG_PASSWORD = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';

    /** Letters, spaces, hyphens, and apostrophes only. */
    public const NAME = '/^[a-zA-Z\s\'-]+$/';

    /** Alphanumeric with underscores and hyphens, 3-30 chars. */
    public const USERNAME = '/^[a-zA-Z0-9_-]{3,30}$/';

    /** URL-friendly slug: lowercase letters, numbers, hyphens. */
    public const SLUG = '/^[a-z0-9]+(?:-[a-z0-9]+)*$/';

    /** International phone format. */
    public const PHONE = '/^\+?[1-9]\d{1,14}$/';

    /** Numeric OTP code, 4-8 digits. */
    public const OTP = '/^\d{4,8}$/';

    /** Standard UUID v4 format. */
    public const UUID = '/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i';

    /** Simple URL validation. */
    public const URL = '/^https?:\/\/[^\s\/$.?#].[^\s]*$/i';
}
