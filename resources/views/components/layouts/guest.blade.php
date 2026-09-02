<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Mustache' }}</title>

        @include('partials.apple-styles')
        <style>
            .guest-wrap {
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 32px 20px;
                background:
                    radial-gradient(ellipse 60% 50% at 50% 0%, rgba(4,51,191,0.08), transparent 70%),
                    var(--surface);
            }
            .guest-card {
                width: 100%;
                max-width: 400px;
                background: var(--white);
                border-radius: var(--radius-lg);
                padding: 40px 36px;
                text-align: center;
                box-shadow: 0 20px 50px rgba(0,0,0,0.06);
            }
            .guest-logo { font-size: 17px; font-weight: 600; letter-spacing: -0.01em; display: inline-flex; align-items: center; gap: 8px; margin-bottom: 28px; }
            .guest-logo .brackets { color: var(--blue); }
            .guest-card h1 { font-size: 26px; font-weight: 700; letter-spacing: -0.02em; margin: 0 0 8px; }
            .guest-card p.sub { font-size: 14.5px; color: var(--gray); margin: 0 0 28px; }
            .guest-foot { margin-top: 24px; font-size: 13.5px; color: var(--gray); }
        </style>
    </head>
    <body>
        <div class="guest-wrap">
            <div class="guest-card">
                <a href="/" class="guest-logo"><span class="brackets">{</span> <span class="brand">Mustache</span> <span class="brackets">}</span></a>

                {{ $slot }}
            </div>
        </div>
    </body>
</html>
