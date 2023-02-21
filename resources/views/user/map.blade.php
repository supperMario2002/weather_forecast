@extends('layout.layout')

@section('name', 'Tin Tức')

@section('content')
    <section class="body-part float-start w-100">
            <iframe width="100%" height="1000" src="https://embed.windy.com/embed2.html?lat=6.926&lon=106.655&detailLat=10.833&detailLon=106.658&width=1280&height=720&zoom=5&level=surface&overlay=wind&product=ecmwf&menu=&message=true&marker=true&calendar=now&pressure=&type=map&location=coordinates&metricWind=km%2Fh&metricTemp=%C2%B0C&radarRange=-1" frameborder="0"></iframe>
    </section>

@endsection
