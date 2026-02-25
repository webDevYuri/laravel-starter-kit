<?php

// ---------------------------------------------------------------------------
// API Response Trait — Standardized JSON responses
// ---------------------------------------------------------------------------
// Provides consistent success and error response methods for controllers.
// Attach this trait to your base Controller class.
//
// You can add pagination response helpers, download responses,
// or streaming response methods here later.
// ---------------------------------------------------------------------------

namespace App\Traits;

use App\Constants\HttpStatus;
use Illuminate\Http\JsonResponse;

trait ApiResponse
{
    /**
     * Return a success JSON response.
     */
    protected function success(
        mixed $data = null,
        string $message = 'Success.',
        int $status = HttpStatus::OK,
        array $meta = [],
    ): JsonResponse {
        $response = ['success' => true, 'message' => $message];

        if ($data !== null) {
            $response['data'] = $data;
        }

        if (! empty($meta)) {
            $response['meta'] = $meta;
        }

        return response()->json($response, $status);
    }

    /**
     * Return an error JSON response.
     */
    protected function error(
        string $message = 'Something went wrong.',
        int $status = HttpStatus::INTERNAL_SERVER_ERROR,
        array $errors = [],
    ): JsonResponse {
        $response = ['success' => false, 'message' => $message];

        if (! empty($errors)) {
            $response['errors'] = $errors;
        }

        return response()->json($response, $status);
    }
}
