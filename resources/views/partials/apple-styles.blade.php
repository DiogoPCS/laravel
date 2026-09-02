<style>
    :root {
        --black: #000;
        --ink: #1d1d1f;
        --ink-soft: #424245;
        --gray: #86868b;
        --line: #d2d2d7;
        --surface: #f5f5f7;
        --white: #fff;
        --blue: #0433bf;
        --blue-dark: #0433bf;
        --red: #ff3b30;
        --radius-lg: 28px;
        --radius-md: 18px;
        --radius-sm: 12px;
        --maxw: 1120px;
    }

    * { box-sizing: border-box; }
    html { scroll-behavior: smooth; }

    body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "SF Pro Display", "SF Pro Text", "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        background: var(--surface);
        color: var(--ink);
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    a { color: inherit; text-decoration: none; }
    ul { list-style: none; margin: 0; padding: 0; }
    img, svg { display: block; max-width: 100%; }

    .wrap {
        max-width: var(--maxw);
        margin: 0 auto;
        padding: 0 22px;
    }

    /* ---------- Nav ---------- */
    .nav {
        position: sticky;
        top: 0;
        z-index: 1000;
        height: 52px;
        display: flex;
        align-items: center;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: saturate(180%) blur(20px);
        -webkit-backdrop-filter: saturate(180%) blur(20px);
        border-bottom: 1px solid rgba(0,0,0,0.06);
    }
    .nav .wrap { display: flex; align-items: center; justify-content: space-between; width: 100%; }
    .nav-logo { font-size: 15px; font-weight: 600; letter-spacing: -0.01em; display: flex; align-items: center; gap: 8px; }
    .nav-logo .brackets { color: var(--blue); }
    .nav-logo .brand { color: var(--ink); font-weight: bold; }
    .nav-links { display: flex; align-items: center; gap: 24px; }
    .nav-links a { font-size: 13px; color: var(--ink); opacity: 0.85; transition: opacity .2s; }
    .nav-links a:hover { opacity: 1; }
    .nav-user { font-size: 13px; color: var(--gray); }
    .nav-cta {
        font-size: 12px;
        background: var(--ink);
        color: var(--white);
        padding: 7px 16px;
        border-radius: 980px;
        border: none;
        cursor: pointer;
        font-family: inherit;
        transition: background .2s;
    }
    .nav-cta:hover { background: var(--blue); }

    /* ---------- Buttons ---------- */
    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        font-size: 16px;
        font-weight: 400;
        padding: 12px 24px;
        border-radius: 980px;
        border: 1px solid transparent;
        cursor: pointer;
        font-family: inherit;
        transition: all .2s ease;
    }
    .btn-primary { background: var(--blue); color: #fff; width: 100%; }
    .btn-primary:hover { background: var(--blue-dark); }
    .btn-secondary { color: var(--blue); }
    .btn-secondary:hover { text-decoration: underline; }

    /* ---------- Forms ---------- */
    .field { margin-bottom: 18px; text-align: left; }
    .field label { display: block; font-size: 13px; font-weight: 600; color: var(--ink-soft); margin-bottom: 6px; }
    .field input {
        width: 100%;
        font-size: 16px;
        padding: 12px 14px;
        border-radius: var(--radius-sm);
        border: 1px solid var(--line);
        background: var(--white);
        font-family: inherit;
        color: var(--ink);
        outline: none;
        transition: border-color .2s, box-shadow .2s;
    }
    .field input,
    .field textarea,
    .field select {
        width: 100%;
        font-size: 16px;
        padding: 12px 14px;
        border-radius: var(--radius-sm);
        border: 1px solid var(--line);
        background: var(--white);
        font-family: inherit;
        color: var(--ink);
        outline: none;
        transition: border-color .2s, box-shadow .2s;
    }
    .field textarea { resize: vertical; }
    .field input[type="file"] { padding: 10px 14px; }
    .field input:focus, .field textarea:focus, .field select:focus { border-color: var(--blue); box-shadow: 0 0 0 4px rgba(4,51,191,0.12); }
    .field-error { color: var(--red); font-size: 12.5px; margin-top: 6px; }
    .field-check { display: flex; align-items: center; gap: 8px; font-size: 13.5px; color: var(--ink-soft); margin-bottom: 22px; }
    .field-row { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; }
    .current-preview { margin-top: 12px; max-width: 220px; border-radius: var(--radius-sm); display: block; }
    .current-video { margin-top: 12px; font-size: 13px; color: var(--gray); }
    .current-video a { color: var(--blue); }
    .current-video a:hover { text-decoration: underline; }

    .alert-error {
        background: rgba(255,59,48,0.08);
        border: 1px solid rgba(255,59,48,0.25);
        color: #b3261e;
        border-radius: var(--radius-sm);
        padding: 12px 16px;
        font-size: 13.5px;
        margin-bottom: 20px;
        text-align: left;
    }
    .alert-error ul { padding-left: 18px; list-style: disc; }

    /* ---------- Card grid ---------- */
    .grid-cards {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 24px;
    }
    .empty-state {
        text-align: center;
        padding: 80px 20px;
        color: var(--gray);
    }
    .empty-state h3 { color: var(--ink); font-size: 21px; margin: 0 0 8px; }
    .empty-state p { margin: 0; font-size: 15px; }

    /* ---------- Page header ---------- */
    .page-head { padding: 56px 0 40px; }
    .page-head .eyebrow {
        display: inline-block;
        font-size: 13px;
        font-weight: 600;
        color: var(--blue);
        letter-spacing: 0.02em;
        margin-bottom: 10px;
    }
    .page-head h1 {
        font-size: clamp(28px, 4vw, 40px);
        font-weight: 700;
        letter-spacing: -0.02em;
        margin: 0 0 8px;
        color: var(--ink);
    }
    .page-head p { font-size: 16px; color: var(--gray); margin: 0; }
    .back-link { display: inline-flex; align-items: center; gap: 6px; font-size: 14px; color: var(--blue); margin-bottom: 18px; }
    .back-link:hover { text-decoration: underline; }

    main { min-height: calc(100vh - 52px); padding-bottom: 80px; }

    .form-card {
        background: var(--white);
        border-radius: var(--radius-lg);
        padding: 36px;
        max-width: 640px;
    }

    /* ---------- Pagination ---------- */
    .pagination {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 40px;
        padding-top: 24px;
        border-top: 1px solid var(--line);
    }
    .pagination-link { font-size: 14px; color: var(--blue); }
    .pagination-link:hover { text-decoration: underline; }
    .pagination-link.disabled { color: var(--line); pointer-events: none; }
    .pagination-info { font-size: 13px; color: var(--gray); }

    @media (max-width: 734px) {
        .nav-links { display: none; }
        .grid-cards { grid-template-columns: 1fr; }
    }
</style>
