# is-laravel-cloud-ga-yet

## What This Is

Minimal Laravel 11 app hosting the AI-first positioning strategy page for Laravel, deployed on Laravel Cloud. The original "is it GA yet?" site was repurposed to serve this content.

- **GitHub**: `cynthiabellmcgillis/is-laravel-cloud-ga-yet`
- **Laravel version**: v11.48.0 (upgraded from v11.37.0 for Cloud compatibility)

## How It Works

Single route in `routes/web.php` serves `public/ai-positioning.html` at `/`:

```php
Route::get('/', fn () => file_get_contents(public_path('ai-positioning.html')));
```

The HTML is also directly accessible at `/ai-positioning.html` as a static asset.

## Key Files

- `routes/web.php` — Single route serving the HTML page
- `public/ai-positioning.html` — The AI-first positioning strategy page

## Deployment

Deployed via **Laravel Cloud dashboard** at [cloud.laravel.com](https://cloud.laravel.com). No Cloud CLI installed locally. Workflow: push to `main`, then deploy from the dashboard.

## Origin of the HTML

The positioning page was originally created at `/Users/cynthiamcgillis/code/granola/laravel-ai-first-positioning.html`, synthesized from 8 Granola meeting notes (Feb 11-18, 2026) covering Laravel's AI-first positioning strategy discussions.
