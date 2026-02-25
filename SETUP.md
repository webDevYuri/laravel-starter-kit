# Setup Guide

## 1. Clone & Install

```bash
cd laravel-api-starter-kit
composer install
```

## 2. Environment

```bash
cp .env.example .env
php artisan key:generate
```

Update `.env` with your database credentials.

## 3. Database

```bash
php artisan migrate
```

## 4. Start Development Server

```bash
php artisan serve
```

Visit `http://localhost:8000` for the landing page.
API health check: `http://localhost:8000/api/health`

## 5. Cleanup

Delete all sample files once you have your own:

- `app/Http/Controllers/SampleController.php`
- `app/Http/Requests/SampleRequest.php`
- `app/Http/Resources/SampleResource.php`
- `app/Services/SampleService.php`
- `app/DTOs/SampleDTO.php`
- `app/Traits/SampleTrait.php`
- `app/Helpers/SampleHelper.php`

## Useful Commands

| Command | Description |
|---|---|
| `php artisan serve` | Start dev server |
| `php artisan migrate` | Run migrations |
| `php artisan migrate:fresh --seed` | Fresh DB with seeders |
| `php artisan make:model Name -mfc` | Model + migration + factory + controller |
| `php artisan make:request NameRequest` | Form request |
| `php artisan make:resource NameResource` | API resource |
| `php artisan tinker` | REPL |
| `php artisan test` | Run tests |
| `php artisan route:list` | List all routes |
