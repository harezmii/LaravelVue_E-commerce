<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    @include('layout.frontend.head')
</head>

<body>
@include('layout.frontend.header')
@include('layout.frontend.navigation')
@include('layout.frontend.slider')

@yield('content')

@include('layout.frontend.footer')

</body>
</html>
