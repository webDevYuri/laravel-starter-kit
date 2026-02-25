<?php

// ---------------------------------------------------------------------------
// Sample Form Request — Validation and authorization
// ---------------------------------------------------------------------------
// Form Requests handle validation and authorization before the controller.
// Laravel auto-returns 422 with field errors on validation failure.
//
// You can add custom validation rules, error messages,
// conditional logic, or prepared data here later.
// ---------------------------------------------------------------------------
//
// Usage:
//   public function store(StoreUserRequest $request): JsonResponse
//
// Rename this file to match your domain: StoreUserRequest.php, UpdateOrderRequest.php, etc.
// Delete this file once you have your own requests.
// ---------------------------------------------------------------------------

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SampleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // 'name'  => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'email', 'unique:users,email'],
        ];
    }
}
