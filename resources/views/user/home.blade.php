@extends('layout.layout')

@section('name', 'Trang chủ')

@section('content')

    <section class="float-start w-100 banner-part1">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 top-part-banner1">

                <div class="col-lg-6" style="padding: 0 15px;">
                    <h3>
                        <i class="fas fa-map-marker-alt"></i> {{ $nameLocation }}
                        <span
                            class="d-block">{{ $currentDate->dayOfWeek == 7 ? 'Chủ nhật' : 'Thứ ' . ($currentDate->dayOfWeek + 1) }},
                            {{ $currentDate->format('d-m-Y') }}</span>
                    </h3>
                    <h1 class="mb-2">{{ $dataCurrent['temp_c'] }}°C </h1>
                    <h4 style="color: #fff;">{{ $dataCurrent['condition']['text'] }} <img
                            src="https:{{ $dataCurrent['condition']['icon'] }}" alt=""></h4>
                    <ul class="now-forecast">
                        <li class="bg-f1 title-cart">
                            <h4>Thời tiết chi tiết</h4>
                        </li>
                        <li>
                            <div class="right-li">Tốc độ gió <span>{{ $dataCurrent['wind_kph'] }}Km/h</span></div>
                            <div class="left-li">Cám giác như <span>{{ $dataCurrent['feelslike_c'] }}°C</span></div>
                        </li>
                        <li>
                            <div class="right-li">Mây <span>{{ round($dataCurrent['cloud']) }}%</span></div>
                            <div class="left-li">Lượng mưa <span>{{ $dataCurrent['precip_mm'] }}mm</span></div>
                        </li>
                        <li>
                            <div class="right-li">Độ ẩm <span>{{ round($dataCurrent['humidity']) }}%</span></div>
                            <div class="left-li">Hướng gió <span>{{ $dataCurrent['wind_degree'] }}°</span></div>
                        </li>
                        <li>
                            <div class="right-li">Tầm nhìn <span>{{ $dataCurrent['vis_km'] }}Km</span></div>
                            <div class="left-li">Gió giật <span>{{ round($dataCurrent['gust_kph']) }}Km/h</span></div>
                        </li>
                        <li>
                            <div class="left-li">Mặt trăng <span>Waxing Gibbous</span></div>
                            <div class="left-li">Chỉ số UV <span>{{ $dataCurrent['uv'] }}</span></div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="now-forecast">
                        <li class="bg-f1 title-cart">
                            <h4>Chất lượng không khí</h4>
                        </li>
                        <li>
                            <p style="color: {{ $dataAir['main'][0] }}; margin:0;">{{ $dataAir['main']['aqi'] }}</p>
                        </li>
                        <li>
                            <div class="right-li">Nồng độ CO
                                <span>{{ $dataAir['components']['co'] }}μg/m<sub>3</sub></span>
                            </div>
                            <div class="left-li">Nồng độ NO <span>{{ $dataAir['components']['no'] }}μg/m<sub>3</sub></span>
                            </div>
                        </li>
                        <li>
                            <div class="right-li">Nồng độ O<sup>3</sup>
                                <span>{{ $dataAir['components']['o3'] }}μg/m<sub>3</sub></span>
                            </div>
                            <div class="left-li">Nồng độ SO<sup>2</sup>
                                <span>{{ $dataAir['components']['so2'] }}μg/m<sub>3</sub></span>
                            </div>
                        </li>
                        <li>
                            <div class="right-li">Nồng độ PM<sup>10</sup>
                                <span>{{ $dataAir['components']['pm10'] }}μg/m<sub>3</sub></span>
                            </div>
                            <div class="left-li">Nồng độ NH<sup>3</sup>
                                <span>{{ $dataAir['components']['nh3'] }}μg/m<sub>3</sub></span>
                            </div>
                        </li>
                    </ul>
                    <iframe width="100%" height="270"
                        src="https://embed.windy.com/embed2.html?lat={{ $dataLocation['lat'] }}&lon={{ $dataLocation['lon'] }}&detailLat=16.299&detailLon=105.864&width=650&height=450&zoom=5&level=surface&overlay=wind&product=ecmwf&menu=&message=true&marker=true&calendar=now&pressure=&type=map&location=coordinates&detail=&metricWind=default&metricTemp=%C2%B0C&radarRange=-1"
                        frameborder="0"></iframe>
                </div>
            </div>

            <div class="hours-div">
                <div id="title-forecast" class="title-forecast">
                    <h2 class="title-active" id="hourly">Hàng giờ</h2>
                    <h2 id="day">Hàng ngày</h2>
                </div>
                <div class="weather-sild1 owl-carousel hourlyForecast" id="hourlyForecast">
                    @foreach ($dataForecast as $key => $value)
                        @foreach ($value['hour'] as $hourly)
                            @if (date('d-m-Y H', strtotime($hourly['time'])) == date('d-m-Y H', strtotime($currentDate)))
                                <div class="hourly-cart">
                                    <div class="cart-date">
                                        <p style="margin: 0; font-weight: 600; text-align: center;font-size: 20px">Bây giờ
                                        </p>
                                    </div>
                                    <div class="cart-condition">
                                        <div class="cart-condition-nav">
                                            <h4>{{ round($hourly['temp_c']) }}°C</h4>
                                            <img src="https:{{ $hourly['condition']['icon'] }}" alt="">
                                        </div>
                                        <p>Cảm giác: {{ round($hourly['feelslike_c']) }}°C</p>
                                        <p>{{ $hourly['condition']['text'] }}</p>

                                    </div>
                                    <ul class="cart-detals">
                                        <li class="bg-f1">
                                            <span class="name-att">Độ ẩm :</span>
                                            <span class="val">{{ $hourly['humidity'] }}%</span>
                                        </li>
                                        <li>
                                            <span>Gió :</span class="name-att">
                                            <span class="val">{{ $hourly['wind_kph'] }}Km/h</span>
                                        </li>
                                        <li class="bg-f1">
                                            <span class="name-att">Mây :</span>
                                            <span class="val">{{ $hourly['cloud'] }}%</span>
                                        </li>
                                    </ul>
                                </div>
                            @elseif(date('d-m-Y H', strtotime($hourly['time'])) > date('d-m-Y H', strtotime($currentDate)))
                                <div class="hourly-cart">
                                    <div class="cart-date">
                                        <p style="margin: 0; font-weight: 600; text-align: center;font-size: 20px">
                                            {{ date('H:i', strtotime($hourly['time'])) }}</p>
                                    </div>
                                    <div class="cart-condition">
                                        <div class="cart-condition-nav">
                                            <h4>{{ round($hourly['temp_c']) }}°C</h4>
                                            <img src="https:{{ $hourly['condition']['icon'] }}" alt="">
                                        </div>
                                        <p>Cảm giác: {{ round($hourly['feelslike_c']) }}°C</p>
                                        <p>{{ $hourly['condition']['text'] }}</p>

                                    </div>
                                    <ul class="cart-detals">
                                        <li class="bg-f1">
                                            <span class="name-att">Độ ẩm :</span>
                                            <span class="val">{{ $hourly['humidity'] }}%</span>
                                        </li>
                                        <li>
                                            <span>Gió :</span class="name-att">
                                            <span class="val">{{ $hourly['wind_kph'] }}Km/h</span>
                                        </li>
                                        <li class="bg-f1">
                                            <span class="name-att">Mây :</span>
                                            <span class="val">{{ $hourly['cloud'] }}%</span>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
                <div class="weather-sild1 owl-carousel hourlyForecast" id="dayForecast">
                    @foreach ($dataForecast as $key => $day)
                        <div class="hourly-cart">
                            @if (date('d-m-Y', strtotime($day['date'])) == date('d-m-Y', strtotime($currentDate)))
                                <div class="cart-date">
                                    <p style="margin: 0; font-weight: 600; text-align: center;font-size: 20px">Hôm nay</p>
                                </div>
                                <div class="cday">
                                    <div class="cday-content">
                                        <div class="chils">
                                            <span>Sáng</span>
                                            <p class="m-0">{{ $day['hour'][8]['temp_c'] }}°C</p>
                                        </div>
                                        <div><img src="https:{{ $day['hour'][8]['condition']['icon'] }}" width="64"
                                                alt=""></div>
                                    </div>
                                    <p class="m-0">{{ $day['hour'][8]['condition']['text'] }}</p>
                                </div>
                                <div class="cnight">
                                    <div class="cnight-content">
                                        <div class="chils">
                                            <span>Tối</span>
                                            <p class="m-0">{{ $day['hour'][20]['temp_c'] }}°C</p>
                                        </div>
                                        <div><img src="https:{{ $day['hour'][20]['condition']['icon'] }}" width="64"
                                                alt=""></div>
                                    </div>
                                    <p class="m-0">{{ $day['hour'][20]['condition']['text'] }}</p>
                                </div>
                            @elseif(date('d-m-Y', strtotime($day['date'])) > date('d-m-Y', strtotime($currentDate)))
                                <div class="cart-date">
                                    <p style="margin: 0; font-weight: 600; text-align: center;font-size: 20px">
                                        {{ date('d-m-Y', strtotime($day['date'])) }}</p>
                                </div>
                                <div class="cday">
                                    <div class="cday-content">
                                        <div class="chils">
                                            <span>Sáng</span>
                                            <p class="m-0">{{ $day['hour'][8]['temp_c'] }}°C</p>
                                        </div>
                                        <div><img src="https:{{ $day['hour'][8]['condition']['icon'] }}" width="64"
                                                alt=""></div>
                                    </div>
                                    <p class="m-0">{{ $day['hour'][8]['condition']['text'] }}</p>
                                </div>
                                <div class="cnight">
                                    <div class="cnight-content">
                                        <div class="chils">
                                            <span>Tối</span>
                                            <p class="m-0">{{ $day['hour'][20]['temp_c'] }}°C</p>
                                        </div>
                                        <div><img src="https:{{ $day['hour'][20]['condition']['icon'] }}" width="64"
                                                alt=""></div>
                                    </div>
                                    <p class="m-0">{{ $day['hour'][20]['condition']['text'] }}</p>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="body-part float-start w-100">
        <section class="section-container section-wheather py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 order-1 order-sm-0">
                        <h1 class="wheather-group-title">Dự báo thời tiết các Tỉnh/Thành phố</h1>
                        <div class="row">
                            <div class="col-6 col-md-3">
                                <article class="forecast">

                                    <div class="location-wheather text-center">
                                        <div class="card mb-3">
                                            <a class="text-decoration-none text-light">
                                                <h3 class="card-city-title">Hà Giang</h3>
                                                <div class="card-city-body">
                                                    <img src="https://data.thoitiet.vn/weather/icons/04n@2x.png"
                                                        alt="Hà Giang" title="Clouds">
                                                    <div class="precipitation" title="Lượng mưa">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-droplet-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6ZM6.646 4.646l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448c.82-1.641 1.717-2.753 2.093-3.13Z" />
                                                        </svg>
                                                        98 %
                                                    </div>
                                                </div>
                                                <p class="mb-0">
                                                    Nhiều mây
                                                </p>
                                                <div class="card-city-footer">
                                                    <p title="Hiện tại">20°</p>
                                                    <p>/</p>
                                                    <p title="Cảm giác như">20°</p>
                                                </div>

                                            </a>
                                        </div>
                                    </div>

                                </article>
                            </div>
                            <div class="col-6 col-md-3">
                                <article class="forecast">

                                    <div class="location-wheather text-center">
                                        <div class="card mb-3">
                                            <a class="text-decoration-none text-light">
                                                <h3 class="card-city-title">Cao Bằng</h3>
                                                <div class="card-city-body">
                                                    <img src="https://data.thoitiet.vn/weather/icons/04n@2x.png"
                                                        alt="Cao Bằng" title="Clouds">
                                                    <div class="precipitation" title="Lượng mưa">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-droplet-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6ZM6.646 4.646l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448c.82-1.641 1.717-2.753 2.093-3.13Z" />
                                                        </svg>
                                                        99 %
                                                    </div>
                                                </div>
                                                <p class="mb-0">
                                                    Nhiều mây
                                                </p>
                                                <div class="card-city-footer">
                                                    <p title="Hiện tại">18°</p>
                                                    <p>/</p>
                                                    <p title="Cảm giác như">19°</p>
                                                </div>

                                            </a>
                                        </div>
                                    </div>

                                </article>
                            </div>
                            <div class="col-6 col-md-3">
                                <article class="forecast">

                                    <div class="location-wheather text-center">
                                        <div class="card mb-3">
                                            <a class="text-decoration-none text-light">
                                                <h3 class="card-city-title">Lào Cai</h3>
                                                <div class="card-city-body">
                                                    <img src="https://data.thoitiet.vn/weather/icons/04n@2x.png"
                                                        alt="Lào Cai" title="Clouds">
                                                    <div class="precipitation" title="Lượng mưa">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-droplet-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6ZM6.646 4.646l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448c.82-1.641 1.717-2.753 2.093-3.13Z" />
                                                        </svg>
                                                        94 %
                                                    </div>
                                                </div>
                                                <p class="mb-0">
                                                    Nhiều mây
                                                </p>
                                                <div class="card-city-footer">
                                                    <p title="Hiện tại">21°</p>
                                                    <p>/</p>
                                                    <p title="Cảm giác như">21°</p>
                                                </div>

                                            </a>
                                        </div>
                                    </div>

                                </article>
                            </div>
                            <div class="col-6 col-md-3">
                                <article class="forecast">

                                    <div class="location-wheather text-center">
                                        <div class="card mb-3">
                                            <a class="text-decoration-none text-light">
                                                <h3 class="card-city-title">Điện Biên</h3>
                                                <div class="card-city-body">
                                                    <img src="https://data.thoitiet.vn/weather/icons/04n@2x.png"
                                                        alt="Điện Biên" title="Clouds">
                                                    <div class="precipitation" title="Lượng mưa">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-droplet-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6ZM6.646 4.646l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448c.82-1.641 1.717-2.753 2.093-3.13Z" />
                                                        </svg>
                                                        92 %
                                                    </div>
                                                </div>
                                                <p class="mb-0">
                                                    Nhiều mây
                                                </p>
                                                <div class="card-city-footer">
                                                    <p title="Hiện tại">19°</p>
                                                    <p>/</p>
                                                    <p title="Cảm giác như">19°</p>
                                                </div>

                                            </a>
                                        </div>
                                    </div>

                                </article>
                            </div>
                            <div class="col-6 col-md-3">
                                <article class="forecast">
                                    <div class="location-wheather text-center">
                                        <div class="card mb-3">
                                            <a class="text-decoration-none text-light">
                                                <h3 class="card-city-title">Hà Nội</h3>
                                                <div class="card-city-body">
                                                    <img src="https://data.thoitiet.vn/weather/icons/50n@2x.png"
                                                        alt="Hà Nội" title="Mist">
                                                    <div class="precipitation" title="Lượng mưa">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-droplet-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6ZM6.646 4.646l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448c.82-1.641 1.717-2.753 2.093-3.13Z" />
                                                        </svg>
                                                        94 %
                                                    </div>
                                                </div>
                                                <p class="mb-0">
                                                    Sương mờ
                                                </p>
                                                <div class="card-city-footer">
                                                    <p title="Hiện tại">21°</p>
                                                    <p>/</p>
                                                    <p title="Cảm giác như">22°</p>
                                                </div>

                                            </a>
                                        </div>
                                    </div>

                                </article>
                            </div>
                            <div class="col-6 col-md-3">
                                <article class="forecast">

                                    <div class="location-wheather text-center">
                                        <div class="card mb-3">
                                            <a class="text-decoration-none text-light">
                                                <h3 class="card-city-title">Hải Phòng</h3>
                                                <div class="card-city-body">
                                                    <img src="https://data.thoitiet.vn/weather/icons/50n@2x.png"
                                                        alt="Hải Phòng" title="Mist">
                                                    <div class="precipitation" title="Lượng mưa">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-droplet-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6ZM6.646 4.646l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448c.82-1.641 1.717-2.753 2.093-3.13Z" />
                                                        </svg>
                                                        100 %
                                                    </div>
                                                </div>
                                                <p class="mb-0">
                                                    Sương mờ
                                                </p>
                                                <div class="card-city-footer">
                                                    <p title="Hiện tại">20°</p>
                                                    <p>/</p>
                                                    <p title="Cảm giác như">21°</p>
                                                </div>

                                            </a>
                                        </div>
                                    </div>

                                </article>
                            </div>
                            <div class="col-6 col-md-3">
                                <article class="forecast">

                                    <div class="location-wheather text-center">
                                        <div class="card mb-3">
                                            <a class="text-decoration-none text-light">
                                                <h3 class="card-city-title">Thanh Hóa</h3>
                                                <div class="card-city-body">
                                                    <img src="https://data.thoitiet.vn/weather/icons/04n@2x.png"
                                                        alt="Thanh Hóa" title="Clouds">
                                                    <div class="precipitation" title="Lượng mưa">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-droplet-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6ZM6.646 4.646l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448c.82-1.641 1.717-2.753 2.093-3.13Z" />
                                                        </svg>
                                                        95 %
                                                    </div>
                                                </div>
                                                <p class="mb-0">
                                                    Nhiều mây
                                                </p>
                                                <div class="card-city-footer">
                                                    <p title="Hiện tại">21°</p>
                                                    <p>/</p>
                                                    <p title="Cảm giác như">22°</p>
                                                </div>

                                            </a>
                                        </div>
                                    </div>

                                </article>
                            </div>
                            <div class="col-6 col-md-3">
                                <article class="forecast">

                                    <div class="location-wheather text-center">
                                        <div class="card mb-3">
                                            <a class="text-decoration-none text-light">
                                                <h3 class="card-city-title">Quảng Trị</h3>
                                                <div class="card-city-body">
                                                    <img src="https://data.thoitiet.vn/weather/icons/04n@2x.png"
                                                        alt="Quảng Trị" title="Clouds">
                                                    <div class="precipitation" title="Lượng mưa">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-droplet-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6ZM6.646 4.646l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448c.82-1.641 1.717-2.753 2.093-3.13Z" />
                                                        </svg>
                                                        96 %
                                                    </div>
                                                </div>
                                                <p class="mb-0">
                                                    Mây cụm
                                                </p>
                                                <div class="card-city-footer">
                                                    <p title="Hiện tại">22°</p>
                                                    <p>/</p>
                                                    <p title="Cảm giác như">23°</p>
                                                </div>

                                            </a>
                                        </div>
                                    </div>

                                </article>
                            </div>
                            <div class="col-6 col-md-3">
                                <article class="forecast">

                                    <div class="location-wheather text-center">
                                        <div class="card mb-3">
                                            <a class="text-decoration-none text-light">
                                                <h3 class="card-city-title">Đà Nẵng</h3>
                                                <div class="card-city-body">
                                                    <img src="https://data.thoitiet.vn/weather/icons/04n@2x.png"
                                                        alt="Đà Nẵng" title="Clouds">
                                                    <div class="precipitation" title="Lượng mưa">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-droplet-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6ZM6.646 4.646l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448c.82-1.641 1.717-2.753 2.093-3.13Z" />
                                                        </svg>
                                                        88 %
                                                    </div>
                                                </div>
                                                <p class="mb-0">
                                                    Mây cụm
                                                </p>
                                                <div class="card-city-footer">
                                                    <p title="Hiện tại">24°</p>
                                                    <p>/</p>
                                                    <p title="Cảm giác như">25°</p>
                                                </div>

                                            </a>
                                        </div>
                                    </div>

                                </article>
                            </div>
                            <div class="col-6 col-md-3">
                                <article class="forecast">

                                    <div class="location-wheather text-center">
                                        <div class="card mb-3">
                                            <a class="text-decoration-none text-light">
                                                <h3 class="card-city-title">Quảng Ngãi</h3>
                                                <div class="card-city-body">
                                                    <img src="https://data.thoitiet.vn/weather/icons/04n@2x.png"
                                                        alt="Quảng Ngãi" title="Clouds">
                                                    <div class="precipitation" title="Lượng mưa">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-droplet-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6ZM6.646 4.646l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448c.82-1.641 1.717-2.753 2.093-3.13Z" />
                                                        </svg>
                                                        90 %
                                                    </div>
                                                </div>
                                                <p class="mb-0">
                                                    Nhiều mây
                                                </p>
                                                <div class="card-city-footer">
                                                    <p title="Hiện tại">22°</p>
                                                    <p>/</p>
                                                    <p title="Cảm giác như">23°</p>
                                                </div>

                                            </a>
                                        </div>
                                    </div>

                                </article>
                            </div>
                            <div class="col-6 col-md-3">
                                <article class="forecast">

                                    <div class="location-wheather text-center">
                                        <div class="card mb-3">
                                            <a class="text-decoration-none text-light">
                                                <h3 class="card-city-title">Bình Thuận</h3>
                                                <div class="card-city-body">
                                                    <img src="https://data.thoitiet.vn/weather/icons/04n@2x.png"
                                                        alt="Bình Thuận" title="Clouds">
                                                    <div class="precipitation" title="Lượng mưa">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-droplet-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6ZM6.646 4.646l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448c.82-1.641 1.717-2.753 2.093-3.13Z" />
                                                        </svg>
                                                        83 %
                                                    </div>
                                                </div>
                                                <p class="mb-0">
                                                    Mây cụm
                                                </p>
                                                <div class="card-city-footer">
                                                    <p title="Hiện tại">22°</p>
                                                    <p>/</p>
                                                    <p title="Cảm giác như">22°</p>
                                                </div>

                                            </a>
                                        </div>
                                    </div>

                                </article>
                            </div>
                            <div class="col-6 col-md-3">
                                <article class="forecast">

                                    <div class="location-wheather text-center">
                                        <div class="card mb-3">
                                            <a class="text-decoration-none text-light">
                                                <h3 class="card-city-title">Cà Mau</h3>
                                                <div class="card-city-body">
                                                    <img src="https://data.thoitiet.vn/weather/icons/03n@2x.png"
                                                        alt="Cà Mau" title="Clouds">
                                                    <div class="precipitation" title="Lượng mưa">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-droplet-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6ZM6.646 4.646l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448c.82-1.641 1.717-2.753 2.093-3.13Z" />
                                                        </svg>
                                                        78 %
                                                    </div>
                                                </div>
                                                <p class="mb-0">
                                                    Mây rải rác
                                                </p>
                                                <div class="card-city-footer">
                                                    <p title="Hiện tại">25°</p>
                                                    <p>/</p>
                                                    <p title="Cảm giác như">26°</p>
                                                </div>

                                            </a>
                                        </div>
                                    </div>

                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 order-0 order-sm-1">
                        <div class="current-location">
                            <div class="location-name">
                                <span class="location-name-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                        <path
                                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>
                                </span>
                                <span class="location-name-main">
                                    <a id="cb-location" class="text-decoration-none text-light">
                                        Hà Nội
                                    </a>
                                </span>
                            </div>
                            <div class="location-data">
                                <div class="location-auto-refresh">
                                    <span>Đã cập nhật 21 phút trước</span>
                                </div>
                                <div class="location-data-summary">
                                    <div class="overview-current">
                                        <img src="https://data.thoitiet.vn/weather/icons/50n@2x.png" alt="Sương mờ">
                                        <span id="cb-temp" class="current-temperature">21°</span>
                                        <div class="unit-group">
                                            <p>C</p>
                                            <p title="Thay đổi đơn vị" class="btn-unit-switcher">
                                                <span>F</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="overview-caption">
                                        <p id="cb-condition" class="overview-caption-item">Sương mờ</p>
                                        <p id="cb-feeslike" class="overview-caption-item">Cảm giác như 22°.</p>
                                    </div>
                                    <div class="weather-detail mt-2">
                                        <div class="d-flex">
                                            <div class="avatar">
                                                <div class="avatar-img rounded-circle">
                                                    <span class="weather-icon">
                                                        <i class="bi bi-sun"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-1 pt-1 ml-2">
                                                <h6 class="fw-bold mb-1">Mặt trời mọc/lặn</h6>
                                            </div>
                                            <div class="d-flex ml-auto align-items-center">
                                                <div class="weather-sun">
                                                    <span><i class="bi bi-sunrise"></i>06:32</span>
                                                    <span>
                                                        <i class="bi bi-sunset"></i>
                                                        17:47
                                                    </span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="separator-dashed"></div>
                                        <div class="d-flex">
                                            <div class="avatar">

                                            </div>
                                            <div class="flex-1 pt-1 ml-2">
                                                <h6 class="fw-bold mb-1">Thấp/Cao</h6>
                                            </div>
                                            <div class="d-flex ml-auto align-items-center">
                                                <h3 class="text-white op-8 fw-bold">20°/24°</h3>
                                            </div>
                                        </div>
                                        <div class="separator-dashed"></div>
                                        <div class="d-flex">
                                            <div class="avatar">
                                                <div class="avatar-img rounded-circle">
                                                    <span class="weather-icon">
                                                        <i class="bi bi-droplet"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-1 pt-1 ml-2">
                                                <h6 class="fw-bold mb-1">Độ ẩm</h6>
                                            </div>
                                            <div class="d-flex ml-auto align-items-center">
                                                <h3 id="cb-humidity" class="text-white op-8 fw-bold">94%</h3>
                                            </div>
                                        </div>
                                        <div class="separator-dashed"></div>
                                        <div class="d-flex">
                                            <div class="avatar">
                                                <div class="avatar-img rounded-circle">
                                                    <svg class="WeatherDetailsListItem--icon--NgMGn Icon--icon--2AbGu Icon--darkTheme--2U1o8"
                                                        set="current-conditions" name="pressure" theme="dark"
                                                        data-testid="Icon" aria-hidden="true" role="img"
                                                        viewBox="0 0 24 24">
                                                        <title>Pressure</title>
                                                        <path
                                                            d="M8.462 18.293l-.29-.002c-.6-.004-1.043-.007-1.259-.007-1.119 0-1.182-1.015-.34-1.734l.196-.164.508-.425 1.543-1.292c1.014-.846 1.74-1.45 2.073-1.723.735-.601 1.305-.596 2.033.022.387.329.959.805 2.207 1.841a377.936 377.936 0 0 1 2.18 1.816c.796.67.742 1.66-.295 1.66h-2.382v1.77c0 .83-.393 1.223-1.258 1.223h-2.994c-.809 0-1.258-.42-1.258-1.207v-1.773l-.664-.005zm0-12.807l-.29.002c-.6.004-1.043.006-1.259.006-1.119 0-1.182 1.016-.34 1.734l.196.164.508.426 1.543 1.29a348.68 348.68 0 0 0 2.073 1.724c.735.601 1.305.596 2.033-.022.387-.328.959-.805 2.207-1.84a377.937 377.937 0 0 0 2.18-1.817c.796-.67.742-1.659-.295-1.659h-2.382v-1.77c0-.832-.393-1.224-1.258-1.224h-2.994c-.809 0-1.258.42-1.258 1.207V5.48l-.664.005z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="flex-1 pt-1 ml-2">
                                                <h6 class="fw-bold mb-1">Áp suất</h6>
                                            </div>
                                            <div class="d-flex ml-auto align-items-center">
                                                <h3 class="text-white op-8 fw-bold">1012 mb</h3>
                                            </div>
                                        </div>
                                        <div class="separator-dashed"></div>
                                        <div class="d-flex">
                                            <div class="avatar">

                                            </div>
                                            <div class="flex-1 pt-1 ml-2">
                                                <h6 class="fw-bold mb-1">Tầm nhìn</h6>
                                            </div>
                                            <div class="d-flex ml-auto align-items-center">
                                                <h3 id="cb-vis" class="text-white op-8 fw-bold">4.4 km</h3>
                                            </div>
                                        </div>
                                        <div class="separator-dashed"></div>
                                        <div class="d-flex">
                                            <div class="avatar">
                                                <div class="avatar-img rounded-circle">
                                                    <svg class="WeatherDetailsListItem--icon--NgMGn Icon--icon--2AbGu Icon--darkTheme--2U1o8"
                                                        set="current-conditions" name="wind" theme="dark"
                                                        data-testid="Icon" aria-hidden="true" role="img"
                                                        viewBox="0 0 24 24">
                                                        <title>Wind</title>
                                                        <path
                                                            d="M6 8.67h5.354c1.457 0 2.234-1.158 2.234-2.222S12.687 4.4 11.354 4.4c-.564 0-1.023.208-1.366.488M3 11.67h15.54c1.457 0 2.235-1.158 2.235-2.222S19.873 7.4 18.54 7.4c-.747 0-1.311.365-1.663.78M6 15.4h9.389c1.457 0 2.234 1.159 2.234 2.223 0 1.064-.901 2.048-2.234 2.048a2.153 2.153 0 0 1-1.63-.742"
                                                            stroke-width="2" stroke="currentColor" stroke-linecap="round"
                                                            fill="none"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="flex-1 pt-1 ml-2">
                                                <h6 class="fw-bold mb-1">Gió</h6>
                                            </div>
                                            <div class="d-flex ml-auto align-items-center">
                                                <h3 id="cb-wind" class="text-white op-8 fw-bold">4.63 km/giờ</h3>
                                            </div>
                                        </div>
                                        <div class="separator-dashed"></div>
                                        <div class="d-flex">
                                            <div class="avatar">

                                            </div>
                                            <div class="flex-1 pt-1 ml-2">
                                                <h6 class="fw-bold mb-1">Điểm ngưng</h6>
                                            </div>
                                            <div class="d-flex ml-auto align-items-center">
                                                <h3 class="text-white op-8 fw-bold">20 °C</h3>
                                            </div>
                                        </div>
                                        <div class="separator-dashed"></div>
                                        <div class="d-flex">
                                            <div class="avatar">

                                            </div>
                                            <div class="flex-1 pt-1 ml-2">
                                                <h6 class="fw-bold mb-1">Chỉ số UV</h6>
                                            </div>
                                            <div class="d-flex ml-auto align-items-center">
                                                <h3 id="cb-uv" class="text-white op-8 fw-bold">0</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="spin" class=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>

    <style>
        .owl-nav {
            font-size: 30px;
            font-weight: 700;
            color: #fff;
            padding: 10px;
        }

        .owl-carousel .owl-nav button.owl-next,
        .owl-carousel .owl-nav button.owl-prev,
        .owl-carousel button.owl-dot {
            border: 1px #FFFFFF solid;
            width: 30px;
        }

        .cday {
            width: 100%;
            height: 97px;
            border-bottom: 2px #CCCCCC solid;
            padding: 5px 15px;
        }

        .cnight .cnight-content,
        .cday .cday-content {
            display: flex;
            justify-content: space-between;
        }

        .cnight .cnight-content p,
        .cday .cday-content p {
            color: #666666;
            font-size: 28px;
            font-weight: 600;
        }

        .chils span {
            color: #AAAAAA;
            font-size: 14px;
        }

        .cnight p,
        .cday p {
            color: #666666;
            font-size: 16px;
        }

        .cnight {
            width: 100%;
            height: 97px;
            padding: 5px 15px;
        }


        .wheather-group-title {
            color: #FFFFFF;
            font-size: 24px;
            line-height: 20px;
            text-transform: uppercase;
            padding: 12px 0 8px 0;
            margin: 0;
            font-weight: 600;
        }

        .location-wheather>.card {
            background: rgba(255, 255, 255, 0.02) !important;
            transition: transform 0.8s ease 0s !important;
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 0.25rem;
        }

        .card-city-title {
            font-size: 16px;
            line-height: 20px;
            margin-top: 12px;
            margin-bottom: 12px;
        }

        .card-city-body {
            display: flex;
            justify-content: center;
        }

        .card-city-footer {
            display: flex;
            justify-content: center;
        }

        .card-city-footer p {
            margin-top: 0;
            margin-bottom: 1rem;
            font-weight: 700;
            font-size: 25px;
        }

        .location-wheather:hover a {
            text-decoration: none;
        }

        .precipitation {
            font-size: 13px;
            font-weight: 400;
        }

        .location-wheather:hover {
            background-color: rgb(40, 53, 82);
        }

        .current-location {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.02);
            transition: transform 0.8s ease 0s;
            padding: 5px;
            margin-top: 10px;
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .location-name {
            font-size: 18px;
            line-height: 32px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: flex;
            width: 100%;
        }

        .location-name span {
            display: block;
            min-width: 25px;
        }

        .location-name-main {
            font-size: 16px;
            line-height: 32px;
            font-weight: bold;
        }

        .overview-current {
            display: flex;
        }

        .current-temperature {
            display: inline-flex;
            line-height: 96px;
            font-size: 96px;
        }

        .unit-group>p {
            font-size: 36px;
            line-height: 36px;
            font-weight: bold;
            margin: 0;
            text-align: center;
        }

        .unit-group {
            padding: 14px 10px 0 10px;
        }

        .overview-caption-item {
            font-size: 16px;
            line-height: 20px;
            margin: 10px 0 14px 0;
            font-weight: 600;
            white-space: nowrap;
        }

        .weather-feature-day {
            display: flex;
            text-align: center;
            justify-content: space-between;
        }

        .weather-feature-day>a {
            display: block;
            border-radius: 3px;
            padding: 0;
            padding: 5px 0px;
            width: 100px;
        }

        .weather-feature-day-btn {
            color: #ffffff;
            margin-right: 10px;
            background: rgba(255, 255, 255, .1);
            font-size: 14px;
            font-weight: normal;
            display: block;
            padding: 5px 10px;
        }

        .weather-detail .separator-dashed,
        .current-location .separator-dashed {
            border-top: 1px dashed rgba(255, 255, 255, 0.08);
            margin: 5px 0;
        }

        .weather-detail h3 {
            font-size: 20px;
        }

        .forecast {
            background: #5da8ce78;
        }

        .current-location {
            background: #5da8ce78;
            margin-top: 40px;
        }

        .spinner-7 {
            width: 50px;
            aspect-ratio: 1;
            --_c: radial-gradient(farthest-side, #25b09b 92%, #0000);
            background: var(--_c) top, var(--_c) left, var(--_c) right, var(--_c) bottom;
            background-size: 12px 12px;
            background-repeat: no-repeat;
            position: absolute;
            animation: s7 1s infinite;
            z-index: 1;
            top: 42%;
            right: 42%;
        }

        @keyframes s7 {
            to {
                transform: rotate(.5turn)
            }
        }
    </style>

@endsection
@push('after-js')
    <script>
        $('body').addClass("cApp");
        $('.owl-carousel').owlCarousel({
            margin: 0,
            nav: true,
            loop: false,
            dots: false,
            autoWidth: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
        var formCity = $('.current-location')
        $("#dayForecast").hide()
        $("#day").click(function() {
            $("#title-forecast h2").removeClass('title-active');
            $(this).addClass('title-active');
            $("#hourlyForecast").hide();
            $("#dayForecast").show();
        })
        $("#hourly").click(function() {
            $("#title-forecast h2").removeClass('title-active');
            $(this).addClass('title-active');
            $("#hourlyForecast").show();
            $("#dayForecast").hide();
        })
        
        $(".forecast").click(function() {
            formCity.css("backgroundColor", "#041d2a78");
            $('#spin').addClass('spinner-7')
            setTimeout(() => {
                formCity.css("backgroundColor", "rgb(64,148,202)");
                $('#spin').removeClass('spinner-7')
            }, 1000);
            var nameForecast = $(this).find('.card-city-title').text()
            var keySearch = changKeyWordTokeywords(nameForecast)
            $('#cb-location').text(nameForecast)
            $.ajax({
                url: '{{ url('/') }}',
                method: 'get',
                data: {
                    'keySearch': keySearch
                },
                success: function(data) {
                    console.log(data);
                    $('#cb-temp').text(data.current.temp_c + "°")
                    $('#cb-feeslike').text(data.current.feelslike_c + "°C")
                    $('#cb-condition').text(data.current.condition.text)
                    $('#cb-humidity').text(data.current.humidity + "%")
                    $('#cb-vis').text(data.current.vis_km + "Km")
                    $('#cb-wind').text(data.current.wind_kph + "Km/h")
                    $('#cb-uv').text(data.current.uv)
                }
            })

        })
    </script>
@endpush
