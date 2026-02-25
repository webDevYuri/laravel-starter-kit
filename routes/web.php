<?php

// ---------------------------------------------------------------------------
// Web Routes — Browser-accessible routes
// ---------------------------------------------------------------------------
// Since this is an API-only application, this file only serves the
// root landing page. All API logic lives in routes/api.php.
// ---------------------------------------------------------------------------

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));
