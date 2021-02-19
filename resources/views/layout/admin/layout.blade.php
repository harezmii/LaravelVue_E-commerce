<!DOCTYPE html>
<html lang="tr">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> @yield('title') </title>

        @include('layout.admin.head')

        @yield('headScript')


    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('layout.admin.navbar')
        @include('layout.admin.sidebar')

        @section('content')
            @include('layout.admin.content')
        @show


        @include('layout.admin.footer')



        @yield('bodyScript')
    </div>
    </body>

</html>

