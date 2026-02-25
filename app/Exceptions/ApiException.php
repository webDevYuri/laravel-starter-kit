<?php

// ---------------------------------------------------------------------------
// API Exception — Custom exception for API error responses
// ---------------------------------------------------------------------------
// Throwable exception that renders as a consistent JSON error response.
// Use this instead of generic exceptions in your services and controllers.
//
// You can add error codes, previous exception chaining,
// or logging levels here later.
// ---------------------------------------------------------------------------

namespace App\Exceptions;

use App\Constants\HttpStatus;
use Exception;
use Illuminate\Http\JsonResponse;

class ApiException extends Exception
{
    /**
     * @param  array<string, mixed>  $errors
     */
    public function __construct(
        string $message = 'Something went wrong.',
        protected int $statusCode = HttpStatus::INTERNAL_SERVER_ERROR,
        protected array $errors = [],
    ) {
        parent::__construct($message);
    }

    /**
     * Render the exception as an HTTP response.
     */
    public function render(): JsonResponse
    {
        $response = [
            'success' => false,
            'message' => $this->getMessage(),
        ];

        if (! empty($this->errors)) {
            $response['errors'] = $this->errors;
        }

        return response()->json($response, $this->statusCode);
    }

    /**
     * Get the HTTP status code.
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
