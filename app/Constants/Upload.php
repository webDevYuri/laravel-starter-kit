<?php

// ---------------------------------------------------------------------------
// Upload — File upload constraints
// ---------------------------------------------------------------------------
// Centralized upload limits and allowed MIME types for file validation.
// Use these in form requests and middleware.
//
// You can add cloud storage disk names, thumbnail dimensions,
// or per-entity upload limits here later.
// ---------------------------------------------------------------------------

namespace App\Constants;

final class Upload
{
    /** Maximum file size in kilobytes. */
    public const MAX_SIZE_KB = 5120; // 5 MB

    /** Allowed image MIME types. */
    public const ALLOWED_IMAGE_TYPES = [
        'image/jpeg',
        'image/png',
        'image/gif',
        'image/webp',
        'image/svg+xml',
    ];

    /** Allowed image extensions for validation rules. */
    public const IMAGE_EXTENSIONS = 'jpeg,jpg,png,gif,webp,svg';

    /** Allowed document MIME types. */
    public const ALLOWED_DOCUMENT_TYPES = [
        'application/pdf',
        'application/msword',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'application/vnd.ms-excel',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    ];

    /** Allowed document extensions for validation rules. */
    public const DOCUMENT_EXTENSIONS = 'pdf,doc,docx,xls,xlsx';

    /** Default storage disk. */
    public const DISK = 'public';
}
