<!doctype html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dự báo thời tiết</title>
</head>
<body class="c-app">
    @section( 'content')
    @yield('content')

</body>
</html>
@stack('after-scripts')
