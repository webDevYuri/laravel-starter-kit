<?php

// ---------------------------------------------------------------------------
// Console Routes — Artisan commands
// ---------------------------------------------------------------------------
// Define closure-based Artisan commands here.
// For class-based commands, create them in app/Console/Commands.
//
// You can add scheduled task definitions, maintenance commands,
// or data seeding commands here later.
// ---------------------------------------------------------------------------

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
