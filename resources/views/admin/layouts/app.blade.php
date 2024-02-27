<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name') }}</title>
</head>

<body>
    <header>
        @yield('header')
    </header>
    <div class="content">
        @yield('content')
    </div>
    <footer>
            $default footer
    </footer>
</body>
</html>
