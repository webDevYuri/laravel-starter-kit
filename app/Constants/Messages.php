<?php

// ---------------------------------------------------------------------------
// Messages — Centralized API response messages
// ---------------------------------------------------------------------------
// Keep all user-facing and internal response messages here for consistency.
// Use dynamic methods for entity-specific messages (CRUD operations).
//
// You can add localization support, error code mappings, or
// notification messages here later.
// ---------------------------------------------------------------------------

namespace App\Constants;

final class Messages
{
    // ── Auth ──────────────────────────────────────────────────────────────
    public const LOGIN_SUCCESS = 'Login successful.';
    public const LOGIN_FAILED = 'Invalid credentials.';
    public const LOGOUT_SUCCESS = 'Logged out successfully.';
    public const REGISTER_SUCCESS = 'Registration successful.';
    public const UNAUTHORIZED = 'Unauthorized.';
    public const FORBIDDEN = 'You do not have permission to perform this action.';
    public const TOKEN_EXPIRED = 'Token has expired.';
    public const TOKEN_INVALID = 'Invalid token.';

    // ── CRUD (dynamic) ───────────────────────────────────────────────────
    public static function created(string $entity): string
    {
        return "{$entity} created successfully.";
    }

    public static function updated(string $entity): string
    {
        return "{$entity} updated successfully.";
    }

    public static function deleted(string $entity): string
    {
        return "{$entity} deleted successfully.";
    }

    public static function retrieved(string $entity): string
    {
        return "{$entity} retrieved successfully.";
    }

    public static function notFound(string $entity): string
    {
        return "{$entity} not found.";
    }

    // ── Validation ───────────────────────────────────────────────────────
    public const VALIDATION_FAILED = 'The given data was invalid.';

    public static function required(string $field): string
    {
        return "The {$field} field is required.";
    }

    public static function unique(string $field): string
    {
        return "The {$field} has already been taken.";
    }

    // ── Server ───────────────────────────────────────────────────────────
    public const SERVER_ERROR = 'Something went wrong. Please try again later.';
    public const RATE_LIMIT_EXCEEDED = 'Too many requests. Please try again later.';
}
