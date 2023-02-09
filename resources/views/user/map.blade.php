@extends('layout.layout')

@section('name', 'Tin Tức')

@section('content')

    <section class="float-start w-100 banner-part1 sub-page-banner">

        <div class="container">
            <div class="d-md-flex align-items-center justify-content-between">
                <h1 class="m-0"> Map
                </h1>
                <nav aria-label="breadcrumb m-0">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Map</li>
                    </ol>
                </nav>
            </div>
        </div>

    </section>

    <section class="body-part float-start w-100">
        <div class="container">
            <iframe width="1280" height="720" src="https://embed.windy.com/embed2.html?lat=6.926&lon=106.655&detailLat=10.833&detailLon=106.658&width=1280&height=720&zoom=5&level=surface&overlay=wind&product=ecmwf&menu=&message=true&marker=true&calendar=now&pressure=&type=map&location=coordinates&detail=true&metricWind=km%2Fh&metricTemp=%C2%B0C&radarRange=-1" frameborder="0"></iframe>
        </div>
    </section>

@endsection
