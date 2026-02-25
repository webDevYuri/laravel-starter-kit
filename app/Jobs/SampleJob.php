<?php

// ---------------------------------------------------------------------------
// Sample Job — Queued background task
// ---------------------------------------------------------------------------
// Jobs handle time-consuming tasks asynchronously (emails, reports, imports).
// Dispatched via: SampleJob::dispatch($data);
//
// You can add retry logic, rate limiting, middleware,
// job chaining, or batch processing here later.
// ---------------------------------------------------------------------------
//
// Generate a new job:
//   php artisan make:job SendWelcomeEmail
//
// Rename this file to match your task: SendWelcomeEmail.php, ProcessReport.php, etc.
// Delete this file once you have your own jobs.
// ---------------------------------------------------------------------------

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SampleJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        // public readonly string $userId,
    ) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
    }
}
