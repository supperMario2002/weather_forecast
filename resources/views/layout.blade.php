<!doctype html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('name')</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body class="c-app">
    
    @yield('content')

</body>
<script src="{{asset('js/main.js')}}"></script>
</html>

