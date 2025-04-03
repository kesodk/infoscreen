<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
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
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>