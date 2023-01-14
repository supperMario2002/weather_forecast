<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('name')</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300;400;500;600;700;800&amp;family=Corben&amp;family=Elsie&amp;family=Encode+Sans+Condensed:wght@400;500;600;700;800&amp;family=Gloria+Hallelujah&amp;family=Inter:wght@100;200;300;400;500;700;800;900&amp;family=Kaushan+Script&amp;family=Lobster&amp;family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&amp;family=Montserrat:wght@200;300;400;500;600;700&amp;family=Open+Sans:wght@300;400;500;600;700&amp;family=Quicksand:wght@400;500;600;700&amp;family=Rajdhani:wght@300;400;500;600;700&amp;family=Roboto+Condensed:wght@300;400;700&amp;family=Roboto:wght@300;400;500;700;900&amp;family=Saira+Condensed:wght@300;400;500;600;700&amp;family=Yeseva+One&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="c-app">

    <header class="float-start w-100">
        <div class="top-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    @include('layout.sidebar')
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    @include('layout.footer')
</body>
<script src="{{asset('js/main.js')}}"></script>
</html>

