<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laracast 5.7 From Scratch')</title>
</head>
<body>
    <ul>
        <li>
                <a href="/">Dashboard</a>
        </li>
        <li>
                <a href="/contact">Contact us</a>
        </li>
        <li>
                <a href="/about">About us</a>
        </li>
    </ul>

    @yield('content')


</body>
</html>
