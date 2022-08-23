<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel primi passi</title>

    <style>
        header {
            padding: 2rem 0;
        }
        nav {
            text-align: center;
        }
        li {
            list-style-type: none;
            display: inline-block;
            margin: auto 1rem;
        }
        a {
            font-size: 1.2rem;
            color: inherit;
        }
        h1 {
            text-align: center;
        }
    </style>

</head>
<body>
    {{-- HEADER --}}
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">Chi siamo</a></li>
                <li><a href="{{ route('resources') }}">Risorse</a></li>
                <li><a href="{{ route('contact_us') }}">Contattaci</a></li>
            </ul>
        </nav>
    </header>

    {{-- MAIN --}}
    <main>
        <h1>RISORSE</h1>
    </main>
</body>
</html>