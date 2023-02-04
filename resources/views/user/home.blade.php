@extends('layout.layout')

@section('name', 'Trang chủ')

@section('content')
    <section class="float-start w-100 banner-part1">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 top-part-banner1">

            <div class="col-lg-6" style="padding: 0 15px;">
                <h3>
                    <i class="fas fa-map-marker-alt"></i> {{$dataLocation['name']}}
                    <span class="d-block">{{($currentDate->dayOfWeek == 7) ? "Chủ nhật" : "Thứ ".($currentDate->dayOfWeek+1)}}, {{$currentDate->format('d-m-Y')}}</span>
                </h3>
                <h1 class="mb-2">{{round($dataWeatherForcast[1]['main']['temp'])}}°C </h1>
                <ul class="now-forecast">
                    <li class="bg-f1 title-cart"><h4>Thời tiết chi tiết</h4></li>
                    <li>
                        <div class="right-li">Gió lạnh <span>{{round($dataWeatherForcast[1]['main']['temp'])}}°C</span></div>
                        <div class="left-li">Mưa hàng ngày <span>2.25mm</span></div>
                    </li>
                    <li>
                        <div class="right-li">Sương <span>{{round($dataWeatherForcast[1]['main']['temp'])}}°C</span></div>
                        <div class="left-li">Mưa hàng tháng <span>2.55mm</span></div>
                    </li>
                    <li>
                        <div class="right-li">Độ ẩm <span>{{round($dataWeatherForcast[1]['main']['humidity'])}}%</span></div>
                        <div class="left-li">Hướng gió <span>{{round($dataWeatherForcast[1]['wind']['deg'])}}°</span></div>
                    </li>
                    <li>
                        <div class="right-li">Áp suất <span>{{round($dataWeatherForcast[1]['main']['pressure'])}}°C</span></div>
                        <div class="left-li">Gió giật <span>{{round($dataWeatherForcast[1]['wind']['gust'])}}m/s</span></div>
                    </li>
                    <li>
                        <div class="right-li">Mặt trời mọc <span>{{date('H:i', $dataLocation["sunrise"])}}</span></div>
                        <div class="left-li">Mặt trăng <span>Waxing Gibbous</span></div>
                    </li>
                    <li>
                        <div class="right-li">Hoàng hôn <span>{{date('H:i', $dataLocation["sunset"])}}</span></div>
                        <div class="left-li">Chỉ số UV <span></span></div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="now-forecast">
                    <li class="bg-f1 title-cart"><h4>Chất lượng không khí</h4></li>
                    <li>
                        <p style="color: {{$dataAir['main'][0]}}; margin:0;">{{$dataAir['main']['aqi']}}</p>
                        
                    </li>
                    <li>
                        <div class="right-li">Nồng độ CO <span>{{$dataAir['components']['co']}}μg/m<sub>3</sub></span></div>
                        <div class="left-li">Nồng độ NO <span>{{$dataAir['components']['no']}}μg/m<sub>3</sub></span></div>
                    </li>
                    <li>
                        <div class="right-li">Nồng độ O<sup>3</sup> <span>{{$dataAir['components']['o3']}}μg/m<sub>3</sub></span></div>
                        <div class="left-li">Nồng độ SO<sup>2</sup> <span>{{$dataAir['components']['so2']}}μg/m<sub>3</sub></span></div>
                    </li>
                    <li>
                        <div class="right-li">Nồng độ PM<sup>10</sup> <span>{{$dataAir['components']['pm10']}}μg/m<sub>3</sub></span></div>
                        <div class="left-li">Nồng độ NH<sup>3</sup> <span>{{$dataAir['components']['nh3']}}μg/m<sub>3</sub></span></div>
                    </li>
                </ul>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60451.363900605065!2d105.80160163203561!3d21.030977745015672!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454c3ce577141%3A0xb1a1ac92701777bc!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBUw6BpIG5ndXnDqm4gdsOgIE3DtGkgdHLGsOG7nW5nIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1675353506520!5m2!1svi!2s" width="100%" height="230" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>

        <div class="hours-div">
            <div id="title-forecast" class="title-forecast">
                <h2 class="title-active">Hàng giờ</h2>
                <h2>Hàng ngày</h2>
            </div>
            <div class="weather-sild1 owl-carousel hourlyForecast">
                @foreach($dataWeatherForcast as $key => $value)

                <div class="hourly-cart">
                    <div class="cart-date">
                        {{($currentDate->dayOfWeek == 7) ? "Chủ nhật" : "Thứ ".($currentDate->dayOfWeek+1)}}, {{date('H:i', strtotime($value["dt_txt"]))}}
                    </div>
                    <div class="cart-condition">
                        <div class="cart-condition-nav">
                            <h4>{{round($value['main']['temp'])}}°C</h4>
                            <img src="http://openweathermap.org/img/w/{{$value['weather'][0]['icon']}}.png" alt="">
                        </div>
                        <p>Cảm giác: {{$value['main']['feels_like']}}°C</p>
                        <p>Trời có {{$value['weather'][0]['description']}}</p>

                    </div>
                    <ul class="cart-detals">
                        <li class="bg-f1">
                            <span class="name-att">Độ ẩm :</span> 
                            <span class="val">{{$value['main']['humidity']}}%</span>
                        </li>
                        <li>
                            <span>Gió :</span class="name-att"> 
                            <span class="val">{{$value['wind']['speed']}}m/s</span>
                            </li>
                        <li class="bg-f1">
                            <span class="name-att">Mây :</span> 
                            <span class="val">{{$value['clouds']['all']}}%</span>
                        </li>
                    </ul>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</section>

    <section class="body-part float-start w-100">
        <section class="section-container section-wheather bg-container py-3">
            <div class="container">
                <div class="row">
                    <!--Danh sách thành phố, điểm đến, núi-->
                    <div class="col-12 col-md-8 order-1 order-sm-0">
                        <h1 class="wheather-group-title">Dự báo thời tiết các Tỉnh/Thành phố</h1>
                        <div class="row">
                            <div class="col-6 col-md-3">
                                <article class="forecast">

                                    <div class="location-wheather text-center">
                                        <div class="card mb-3">
                                            <a class="text-decoration-none text-light" href="/ha-giang">
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
                                            <a class="text-decoration-none text-light" href="/cao-bang">
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
                                            <a class="text-decoration-none text-light" href="/lao-cai">
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
                                            <a class="text-decoration-none text-light" href="/dien-bien">
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
                                            <a class="text-decoration-none text-light" href="/ha-noi">
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
                                            <a class="text-decoration-none text-light" href="/hai-phong">
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
                                            <a class="text-decoration-none text-light" href="/thanh-hoa">
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
                                            <a class="text-decoration-none text-light" href="/quang-tri">
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
                                            <a class="text-decoration-none text-light" href="/da-nang">
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
                                            <a class="text-decoration-none text-light" href="/quang-ngai">
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
                                            <a class="text-decoration-none text-light" href="/binh-thuan">
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
                                            <a class="text-decoration-none text-light" href="/ca-mau">
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
                    <!--Quảng cáo-->
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
                                    <a class="text-decoration-none text-light" href="/ha-noi">
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
                                        <span class="current-temperature">21°</span>
                                        <div class="unit-group">
                                            <p>C</p>
                                            <p title="Thay đổi đơn vị" class="btn-unit-switcher">
                                                <span>F</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="overview-caption">
                                        <p class="overview-caption-item">Sương mờ</p>
                                        <p class="overview-caption-item">Cảm giác như 22°.</p>
                                    </div>
                                    <div class="weather-feature">
                                        <h3>Dự báo những ngày tới</h3>
                                        <div class="weather-feature-day justify-content-center">
                                            <a href="/ha-noi" class="weather-feature-day-btn">Hôm nay</a>
                                            <a href="/ha-noi/ngay-mai" class="weather-feature-day-btn">Ngày mai</a>
                                            <a href="/ha-noi/3-ngay-toi" class="weather-feature-day-btn">3 ngày</a>
                                            <a href="/ha-noi/5-ngay-toi" class="weather-feature-day-btn">5 ngày</a>
                                        </div>
                                        <div class="weather-feature-day justify-content-center mt-2">
                                            <a href="/ha-noi/7-ngay-toi" class="weather-feature-day-btn">7 ngày</a>
                                            <a href="/ha-noi/10-ngay-toi" class="weather-feature-day-btn">10 ngày</a>
                                            <a href="/ha-noi/15-ngay-toi" class="weather-feature-day-btn">15 ngày</a>
                                            <a href="/ha-noi/30-ngay-toi" class="weather-feature-day-btn">30 ngày</a>
                                        </div>
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
                                                <h3 class="text-white op-8 fw-bold">94%</h3>
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
                                                <h3 class="text-white op-8 fw-bold">4.4 km</h3>
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
                                                <h3 class="text-white op-8 fw-bold">4.63 km/giờ</h3>
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
                                                <h3 class="text-white op-8 fw-bold">0</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

</style>

@endsection
@push('after-js')
    <script>
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

    $("#title-forecast h2").click(function(){
        $("#title-forecast h2").removeClass('title-active');
        $(this).addClass('title-active');
    })

        $("#hourly").click(function() {
            $("#title-forecast h2").removeClass('title-active');
            $(this).addClass('title-active');
            $("#hourlyForecast").show();
            $("#dayForecast").hide();
        })
    </script>
@endpush
