<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> @yield('title')</title>
        <link rel="stylesheet" href= "{{ asset('css/main.css') }}">
    </head>
    <body>
        @yield('content')
    </body>

</html>