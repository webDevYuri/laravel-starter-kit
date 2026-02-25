<?php

// ---------------------------------------------------------------------------
// Pagination — Default pagination settings
// ---------------------------------------------------------------------------
// Centralized pagination defaults for API list endpoints.
// Use these in controllers and form requests for consistent pagination.
//
// You can add cursor pagination settings, max limits per resource,
// or custom page size options here later.
// ---------------------------------------------------------------------------

namespace App\Constants;

final class Pagination
{
    public const DEFAULT_PAGE = 1;
    public const DEFAULT_PER_PAGE = 15;
    public const MAX_PER_PAGE = 100;

    public const SORT_ASC = 'asc';
    public const SORT_DESC = 'desc';
    public const DEFAULT_SORT_DIRECTION = self::SORT_DESC;
    public const DEFAULT_SORT_BY = 'created_at';
}
