<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des activités</title>
</head>
<body>
    <header>
        <h1>Gestion des activités</h1>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        &copy; COPYRIGHT ISTA BEN SLIMANE <br>
        2020 {{date('Y')}}
    </footer>
</body>
</html>