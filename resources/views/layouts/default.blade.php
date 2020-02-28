<!DOCTYPE html>
<html lang="pl">
<head>
    @include('include.head')
</head>
<body>
    <div class="app">
        @include('include.header')
        @yield('content')
        @include('include.footer')
    </div>
</body>
</html>