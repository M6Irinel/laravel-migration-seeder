<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('metaTitle')</title>

    <link rel="stylesheet" href="./css/app.css">

    <!-- FUCSSIA -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/M6Irinel/Framkcss@7afed426c3eb96b21f164839fc10279163084c3c/Framkcss.css">

</head>
<body class="h-100vh flex f-column reset">

    <header>
        @yield('header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="mt-auto">
        @yield('footer')
    </footer>

</body>
</html>
