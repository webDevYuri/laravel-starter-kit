<?php

// ---------------------------------------------------------------------------
// API Routes — All API endpoints
// ---------------------------------------------------------------------------
// Routes in this file are prefixed with /api and assigned the 'api'
// middleware group. Use route groups for versioning and auth scoping.
//
// You can add versioned route groups (v1, v2), resource routes,
// or third-party webhook routes here later.
// ---------------------------------------------------------------------------

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// ── Health Check ─────────────────────────────────────────────────────────
Route::get('/health', fn () => response()->json([
    'status'  => 'ok',
    'version' => app()->version(),
]))->name('health');

// ── Authenticated Routes ─────────────────────────────────────────────────
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', fn (Request $request) => $request->user())->name('user');
});

// ── Public Routes (with stricter throttle) ───────────────────────────────
// Route::middleware('throttle:auth')->group(function () {
//     Route::post('/login', [AuthController::class, 'login']);
//     Route::post('/register', [AuthController::class, 'register']);
// });

// ── Protected Routes (example) ───────────────────────────────────────────
// Route::middleware('auth:sanctum')->group(function () {
//     Route::apiResource('users', UserController::class);
//     Route::post('/logout', [AuthController::class, 'logout']);
// });
