<?php

// ---------------------------------------------------------------------------
// Sample Observer — Model event listener
// ---------------------------------------------------------------------------
// Observers listen to Eloquent model events (creating, updated, deleted, etc.).
// Use them for side effects like logging, cache clearing, or notifications.
//
// You can add restored, forceDeleted, or custom event methods here later.
// ---------------------------------------------------------------------------
//
// Registration in AppServiceProvider boot():
//   User::observe(UserObserver::class);
//
// Or via attribute on the model:
//   #[ObservedBy(UserObserver::class)]
//
// Generate a new observer:
//   php artisan make:observer UserObserver --model=User
//
// Rename this file to match your model: UserObserver.php, OrderObserver.php, etc.
// Delete this file once you have your own observers.
// ---------------------------------------------------------------------------

namespace App\Observers;

class SampleObserver
{
    /**
     * Handle the model "creating" event.
     */
    public function creating(mixed $model): void
    {
        //
    }

    /**
     * Handle the model "created" event.
     */
    public function created(mixed $model): void
    {
        //
    }

    /**
     * Handle the model "updated" event.
     */
    public function updated(mixed $model): void
    {
        //
    }

    /**
     * Handle the model "deleted" event.
     */
    public function deleted(mixed $model): void
    {
        //
    }
}
