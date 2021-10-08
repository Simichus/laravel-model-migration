<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title', 'TT 38')</title>
</head>
<body class="bg-warning">
    <header class="bg-dark text-white">
        <h1 class="text-center py-2">Turistic Travels 38</h1>
        @include('partials.nav')
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>