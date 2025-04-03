<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

    <style>
        body { font-family: sans-serif; padding: 2rem; }
        header { background: #333; color: white; padding: 1rem; }
        nav a { color: white; margin-right: 1rem; text-decoration: none; }
        nav a.active { font-weight: bold; text-decoration: underline; color: yellow; }
    </style>
</head>
<body>
    <header>
        <h1>Min Laravel App</h1>
        <nav>
        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Forside</a>
        <a href="/om" class="{{ request()->is('om') ? 'active' : '' }}">Om os</a>
        <a href="/kontakt" class="{{ request()->is('kontakt') ? 'active' : '' }}">Kontakt</a>
        <a href="/infoskærm" class="{{ request()->is('infoscreen') ? 'active' : '' }}">Infoskærm</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>