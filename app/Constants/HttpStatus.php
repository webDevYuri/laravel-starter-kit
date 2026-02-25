<?php

// ---------------------------------------------------------------------------
// HTTP Status — Standard HTTP response status codes
// ---------------------------------------------------------------------------
// Centralized HTTP status codes for consistent API responses.
// Use these instead of hardcoding numeric values in controllers.
//
// You can add custom status codes or status groups here later.
// ---------------------------------------------------------------------------

namespace App\Constants;

final class HttpStatus
{
    // ── Success ──────────────────────────────────────────────────────────
    public const OK = 200;
    public const CREATED = 201;
    public const ACCEPTED = 202;
    public const NO_CONTENT = 204;

    // ── Client Errors ────────────────────────────────────────────────────
    public const BAD_REQUEST = 400;
    public const UNAUTHORIZED = 401;
    public const FORBIDDEN = 403;
    public const NOT_FOUND = 404;
    public const METHOD_NOT_ALLOWED = 405;
    public const CONFLICT = 409;
    public const UNPROCESSABLE_ENTITY = 422;
    public const TOO_MANY_REQUESTS = 429;

    // ── Server Errors ────────────────────────────────────────────────────
    public const INTERNAL_SERVER_ERROR = 500;
    public const BAD_GATEWAY = 502;
    public const SERVICE_UNAVAILABLE = 503;
    public const GATEWAY_TIMEOUT = 504;
}
