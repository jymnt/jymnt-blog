<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/portfolio">Portfolio</a>
            <a href="/blog">Blog</a>
            <a href="/books">Books</a>
            <a href="/movies">Movies</a>
            <a href="/about">About</a>

        </nav>
    </header>

    <main>
        @yield('content')
    </main>
  
    <footer>
        <p>© 2026 Joy Blog</p>
    </footer>
    
    
</body>
</html>