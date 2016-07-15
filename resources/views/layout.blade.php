<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')

        @yield('head')
    </head>
    <body>
        <!-- Navigation bar -->
        @include('includes.navbar')

        @yield('content')

        @include('includes.footer')

        @yield('footer')
    </body>
</html>
