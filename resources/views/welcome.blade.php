<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="Is Laravel Cloud GA Yet?">
        <meta property="og:description" content="Not yet, but soon!">
        <meta property="og:image" content="https://is-laravel-cloud-ga-yet-main-h2infv.laravel.cloud/images/cynthia-joke-page-og.png">
        <meta property="og:url" content="https://is-laravel-cloud-ga-yet-main-h2infv.laravel.cloud">
        <meta property="og:type" content="website">
    
        <title>Is Laravel Cloud GA Yet?</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                width: 100vw;
                height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                background-color: #1a202c;
                color: #ffffff;
            }
            
            .message {
                font-size: 3rem;
                font-weight: bold;
                text-align: center;
                padding: 2rem;
                animation: fadeIn 1s ease-in;
            }
            
            .footer {
                font-size: 1rem;
                opacity: 0.8;
                margin-top: 1rem;
                animation: fadeIn 1s ease-in 0.5s backwards;
            }
            
            .footer a {
                color: #ffffff;
                text-decoration: underline;
            }
            
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>
    </head>
    <body>
        <div class="message">
            Not yet, but soon!
        </div>
        <div class="footer">
            But <a href="https://x.com/laravelphp" target="_blank">follow us on X</a> for the latest updates.
        </div>
    </body>
</html>