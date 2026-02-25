<?php

// ---------------------------------------------------------------------------
// Sample Controller — API endpoint handler
// ---------------------------------------------------------------------------
// Controllers receive HTTP requests and return responses.
// Keep them thin — delegate business logic to Services.
//
// You can add dependency injection, resource responses,
// authorization checks, or pagination here later.
// ---------------------------------------------------------------------------
//
// Usage:
//   Route::apiResource('users', UserController::class);
//
// Rename this file to match your domain: UserController.php, OrderController.php, etc.
// Delete this file once you have your own controllers.
// ---------------------------------------------------------------------------

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(['data' => [], 'message' => 'List retrieved.']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        return response()->json(['data' => null, 'message' => 'Created.'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        return response()->json(['data' => null, 'message' => 'Retrieved.']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        return response()->json(['data' => null, 'message' => 'Updated.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        return response()->json(['data' => null, 'message' => 'Deleted.']);
    }
}
