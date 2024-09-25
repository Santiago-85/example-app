<!-- resources/views/layouts/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nike')</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <header>
        <h1>Nike</h1>
    </header>

    <nav>
        <a href="/">Inicio</a>
        <a href="/categorias">Categorías</a>
        <a href="/contacto">Contacto</a>
        <a href="/mision-vision">Misión - Visión</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2024 Mi Sitio Web</p>
    </footer>
</body>
</html>
