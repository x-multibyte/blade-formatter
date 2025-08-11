<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'blade-formatter')</title>

    @stack('css')
    @stack('headJs')
</head>
<body>
<header id="page-header">
    <nav id="page-navigation"></nav>
</header>
<main id="main-container">
    <div class="content">
        <h2>Blade Formatter</h2>
    </div>
</main>
<footer id="page-footer">

</footer>
@stack('js')
</body>
</html>
