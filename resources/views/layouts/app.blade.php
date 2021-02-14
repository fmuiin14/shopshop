<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Online Shop by Fathul Muiin">
    <meta name="keywords" content="Ashion Online Shop by Fathul Muiin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Fathul Muiin" />
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
    
</head>

<body>

    {{-- Navbar --}}
    @include('includes.navbar')

    {{-- Home (Page Content) --}}
    @yield('content')

    {{-- footer --}}
    @include('includes.footer')

    {{-- script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>

</html>
