<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 dark:bg-gray-900 dark:text-gray-100 min-h-screen flex flex-col justify-between ">
    <section class="container px-4 mx-auto">

        @yield('header')
        <div>
            @yield('content')
        </div>
        <section>
</body>

</html>
