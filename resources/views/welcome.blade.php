<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        :root {
            --bg: #f9fafb;
            --card-bg: #ffffff;
            --text-main: #111827;
            --text-muted: #6b7280;
            --accent: #ef4444;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--bg);
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        .card {
            background: var(--card-bg);
            padding: 3rem 4rem;
            border-radius: 16px;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.05), 0 1px 2px 0 rgba(0, 0, 0, 0.03);
            border: 1px solid rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            text-align: center;
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
        }

        .status-dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            background-color: #10b981;
            border-radius: 50%;
            margin-bottom: 1rem;
        }

        h1 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-main);
            letter-spacing: -0.025em;
            margin-bottom: 0.5rem;
        }

        .version {
            font-family: ui-monospace, SFMono-Regular, Menlo, monospace;
            font-size: 0.875rem;
            color: var(--text-muted);
            background: #f3f4f6;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="status-dot"></div>
        <h1>Laravel 12 API</h1>
        <div class="version">v{{ app()->version() }}</div>
    </div>
</body>
</html>