<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css' integrity='sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==' crossorigin='anonymous'/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('nomeTitolo')</title>
</head>
<body>
    <header>
        @include('partials.header')
    </header>
    <main>
        @yield('page_content')
    </main>
    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>