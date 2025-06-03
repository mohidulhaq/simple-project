<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body class="sb-nav-fixed">
        @include('includes.nav')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('includes.sidebar')
            </div>
            <div id="layoutSidenav_content">
                @yield('content')
                @include('includes.footer')
            </div>
        </div>
        @include('includes.script')
    </body>
</html>