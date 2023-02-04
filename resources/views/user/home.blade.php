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
                <h1 class="mb-2">{{$dataCurrent['temp_c']}}°C </h1>
                <h4 style="color: #fff;">{{$dataCurrent['condition']['text']}}  <img src="https:{{$dataCurrent['condition']['icon']}}" alt=""></h4>
                <ul class="now-forecast">
                    <li class="bg-f1 title-cart"><h4>Thời tiết chi tiết</h4></li>
                    <li>
                        <div class="right-li">Tốc độ gió <span>{{$dataCurrent['wind_kph']}}Km/h</span></div>
                        <div class="left-li">Cám giác như <span>{{$dataCurrent['feelslike_c']}}°C</span></div>
                    </li>
                     <li>
                        <div class="right-li">Mây <span>{{round($dataCurrent['cloud'])}}%</span></div>
                        <div class="left-li">Lượng mưa <span>{{$dataCurrent['precip_mm']}}mm</span></div>
                    </li>
                   <li>
                        <div class="right-li">Độ ẩm <span>{{round($dataCurrent['humidity'])}}%</span></div>
                        <div class="left-li">Hướng gió <span>{{$dataCurrent['wind_degree']}}°</span></div>
                    </li>
                    <li>
                        <div class="right-li">Tầm nhìn <span>{{$dataCurrent['vis_km']}}Km</span></div>
                        <div class="left-li">Gió giật <span>{{round($dataCurrent['gust_kph'])}}Km/h</span></div>
                    </li>
                    <li>
                        <div class="left-li">Mặt trăng <span>Waxing Gibbous</span></div>
                        <div class="left-li">Chỉ số UV <span>{{$dataCurrent['uv']}}</span></div>
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
                <h2 class="title-active" id="hourly">Hàng giờ</h2>
                <h2 id="day">Hàng ngày</h2>
            </div>
            <div class="weather-sild1 owl-carousel hourlyForecast" id="hourlyForecast">
                @foreach($dataForecast as $key => $value)
                        @foreach($value['hour'] as $hourly)
                            @if(date('d-m-Y H', strtotime($hourly['time'])) == date('d-m-Y H', strtotime($currentDate)))
                                <div class="hourly-cart">
                                    <div class="cart-date">
                                        <p style="margin: 0; font-weight: 600; text-align: center;font-size: 20px">Bây giờ</p>
                                    </div>
                                    <div class="cart-condition">
                                        <div class="cart-condition-nav">
                                            <h4>{{round($hourly['temp_c'])}}°C</h4>
                                            <img src="https:{{$hourly['condition']['icon']}}" alt="">
                                        </div>
                                        <p>Cảm giác: {{round($hourly['feelslike_c'])}}°C</p>
                                        <p>{{$hourly['condition']['text']}}</p>
                
                                    </div>
                                    <ul class="cart-detals">
                                        <li class="bg-f1">
                                            <span class="name-att">Độ ẩm :</span> 
                                            <span class="val">{{$hourly['humidity']}}%</span>
                                        </li>
                                        <li>
                                            <span>Gió :</span class="name-att"> 
                                            <span class="val">{{$hourly['wind_kph']}}Km/h</span>
                                            </li>
                                        <li class="bg-f1">
                                            <span class="name-att">Mây :</span> 
                                            <span class="val">{{$hourly['cloud']}}%</span>
                                        </li>
                                    </ul>
                                </div>
                            @elseif(date('d-m-Y H', strtotime($hourly['time'])) > date('d-m-Y H', strtotime($currentDate)))
                                <div class="hourly-cart">
                                    <div class="cart-date">
                                        <p style="margin: 0; font-weight: 600; text-align: center;font-size: 20px">{{date('H:i', strtotime($hourly['time']))}}</p>
                                    </div>
                                    <div class="cart-condition">
                                        <div class="cart-condition-nav">
                                            <h4>{{round($hourly['temp_c'])}}°C</h4>
                                            <img src="https:{{$hourly['condition']['icon']}}" alt="">
                                        </div>
                                        <p>Cảm giác: {{round($hourly['feelslike_c'])}}°C</p>
                                        <p>{{$hourly['condition']['text']}}</p>
                
                                    </div>
                                    <ul class="cart-detals">
                                        <li class="bg-f1">
                                            <span class="name-att">Độ ẩm :</span> 
                                            <span class="val">{{$hourly['humidity']}}%</span>
                                        </li>
                                        <li>
                                            <span>Gió :</span class="name-att"> 
                                            <span class="val">{{$hourly['wind_kph']}}Km/h</span>
                                            </li>
                                        <li class="bg-f1">
                                            <span class="name-att">Mây :</span> 
                                            <span class="val">{{$hourly['cloud']}}%</span>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                        @endforeach
                @endforeach
            </div>
            <div class="weather-sild1 owl-carousel hourlyForecast" id="dayForecast">
                @foreach($dataForecast as $key => $day)
                    <div class="hourly-cart">
                        @if(date('d-m-Y', strtotime($day['date'])) == date('d-m-Y', strtotime($currentDate)))
                            <div class="cart-date">
                                <p style="margin: 0; font-weight: 600; text-align: center;font-size: 20px">Hôm nay</p>
                            </div>
                            <div class="cday">
                                <div class="cday-content">
                                    <div class="chils">
                                        <span>Sáng</span>
                                        <p class="m-0">{{$day['hour'][8]['temp_c']}}°C</p>
                                    </div>
                                    <div><img src="https:{{$day['hour'][8]['condition']['icon']}}" width="64" alt=""></div>
                                </div>
                                <p class="m-0">{{$day['hour'][8]['condition']['text']}}</p>
                            </div>
                            <div class="cnight">
                                <div class="cnight-content">
                                    <div class="chils">
                                        <span>Tối</span>
                                        <p class="m-0">{{$day['hour'][8]['temp_c']}}°C</p>
                                    </div>
                                    <div><img src="https:{{$day['hour'][8]['condition']['icon']}}" width="64" alt=""></div>
                                </div>
                                <p class="m-0">{{$day['hour'][8]['condition']['text']}}</p>
                            </div>
                        @elseif(date('d-m-Y', strtotime($day['date'])) > date('d-m-Y', strtotime($currentDate)))
                        <div class="cart-date">
                            <p style="margin: 0; font-weight: 600; text-align: center;font-size: 20px">{{date('d-m-Y', strtotime($day['date']))}}</p>
                        </div>
                        <div class="cday">
                            <div class="cday-content">
                                <div class="chils">
                                    <span>Sáng</span>
                                    <p class="m-0">{{$day['hour'][8]['temp_c']}}°C</p>
                                </div>
                                <div><img src="https:{{$day['hour'][8]['condition']['icon']}}" width="64" alt=""></div>
                            </div>
                            <p class="m-0">{{$day['hour'][8]['condition']['text']}}</p>
                        </div>
                        <div class="cnight">
                            <div class="cnight-content">
                                <div class="chils">
                                    <span>Tối</span>
                                    <p class="m-0">{{$day['hour'][8]['temp_c']}}°C</p>
                                </div>
                                <div><img src="https:{{$day['hour'][8]['condition']['icon']}}" width="64" alt=""></div>
                            </div>
                            <p class="m-0">{{$day['hour'][8]['condition']['text']}}</p>
                        </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="body-part float-start w-100">
    <div class="recent-search-div">
        <div class="container">
            <div class="row align-items-center g-lg-4">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Thành phố</h5>
                        {{-- <a href="#" class="btn readmon">
                <i class="fas fa-arrow-right"></i>
              </a> --}}
                    </div>

                    <div class="ps-sild owl-carousel owl-theme">
                        <div class="items text-center">
                            <div class="content-part">
                                <h4>New York</h4>
                                <h3>12 <sup> 0c</sup></h3>
                                <h6>Thundery</h6>
                            </div>
                            <figure>
                                <img src="images/pexels-yuting-gao-1557547.jpg" alt="pnm" />
                            </figure>
                        </div>
                        <div class="items sunny-div text-center">
                            <div class="content-part">
                                <h4>Singapore</h4>
                                <h3>32 <sup> 0c</sup></h3>
                                <h6>Sunny</h6>
                            </div>
                            <figure>
                                <img src="images/pexels-photo-2426546.jpg" alt="pnm" />
                            </figure>
                        </div>
                        <div class="items text-center raing-div">
                            <div class="content-part">
                                <h4>Paris</h4>
                                <h3>12 <sup> 0c</sup></h3>
                                <h6>Raining</h6>
                            </div>
                            <figure>
                                <img src="images/pexels-marcin-gierbisz-1125212.jpg" alt="pnm" />
                            </figure>
                        </div>

                        <div class="items text-center sunny-div">
                            <div class="content-part">
                                <h4>Dubai</h4>
                                <h3>24 <sup> 0c</sup></h3>
                                <h6>Cludy</h6>
                            </div>
                            <figure>
                                <img src="images/pexels-aleksandar-pasaric-2041556.jpg" alt="pnm" />
                            </figure>

                            <div class="clouds">
                                <div class="clouds-1"></div>
                                <div class="clouds-2"></div>
                                <div class="clouds-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="daily-wather night-moon">
        <div class="container">
            <div class="content-sec-wh">
                <h1>Weekly Weather Forecast</h1>
                <div class="row weekly-div mt-4 gy-3 gy-lg-0">
                    <div class="col">
                        <div class="comon-days">
                            <h4>Mon</h4>
                            <div class="partly_cloudy">
                                <div class="partly_cloudy__sun"></div>
                                <div class="partly_cloudy__cloud"></div>
                            </div>
                            <h6>12° / <span class="ms-1"> 2°</span></h6>
                        </div>
                    </div>

                    <div class="col">
                        <div class="comon-days">
                            <h4>Tue</h4>
                            <div class="cloudy"></div>
                            <h6>12° / <span class="ms-1"> 2°</span></h6>
                        </div>
                    </div>

                    <div class="col">
                        <div class="comon-days">
                            <h4>Wen</h4>
                            <div class="partly_cloudy">
                                <div class="partly_cloudy__sun"></div>
                                <div class="partly_cloudy__cloud"></div>
                            </div>
                            <h6>30° / <span class="ms-1"> 25°</span></h6>
                        </div>
                    </div>

                    <div class="col">
                        <div class="comon-days">
                            <h4>Thu</h4>
                            <div class="sunny"></div>
                            <h6>12° / <span class="ms-1"> 2°</span></h6>
                        </div>
                    </div>

                    <div class="col">
                        <div class="comon-days">
                            <h4>Fri</h4>
                            <div class="partly_cloudy">
                                <div class="partly_cloudy__sun"></div>
                                <div class="partly_cloudy__cloud"></div>
                            </div>
                            <h6>25° / <span class="ms-1"> 20°</span></h6>
                        </div>
                    </div>

                    <div class="col">
                        <div class="comon-days">
                            <h4>Sat</h4>
                            <div class="thundery">
                                <div class="thundery__cloud"></div>
                                <div class="thundery__rain"></div>
                            </div>
                            <h6>24° / <span class="ms-1"> 12°</span></h6>
                        </div>
                    </div>

                    <div class="col">
                        <div class="comon-days">
                            <h4>Sun</h4>
                            <div class="rainy">
                                <div class="rainy__cloud"></div>
                                <div class="rainy__rain"></div>
                            </div>
                            <h6>30° / <span class="ms-1"> 22°</span></h6>
                        </div>
                    </div>
                </div>

                <div class="all-forcuset mt-5">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                Today
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                Tomorrow
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="comon-report-divbn">
                                <h2 class="today-hilights1 mt-4">Today's Highlights</h2>
                                <div class="row mt-4 gy-5 gx-lg-5">
                                    <div class="col-lg-4">
                                        <div class="left-sec-d1">
                                            <div class="sunny"></div>
                                            <h2>12 <sup> °C</sup></h2>
                                            <div class="d-flex justify-content-between">
                                                <span>
                                                    <i class="fas fa-map-marker-alt"></i> Paris
                                                </span>
                                                <span> Monday, May 3 </span>
                                            </div>
                                            <hr />
                                            <ul class="list-unstyled mt-3 mb-0">
                                                <li>
                                                    <i class="fas fa-cloud"></i> Patchy Culdy Day
                                                </li>
                                                <li><i class="fas fa-moon"></i> 19:30</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                                            <div class="col">
                                                <div class="comon-report uv">
                                                    <h5>UV Index</h5>
                                                    <figure>
                                                        <img src="images/5643142.png" alt="pn" />
                                                    </figure>
                                                    <ul class="list-unstyled d-flex justify-content-center">
                                                        <li>2</li>
                                                        <li>3</li>
                                                        <li>4</li>
                                                        <li>5</li>
                                                        <li>6</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="comon-report uv">
                                                    <h5>Wind Staus</h5>
                                                    <h2>7.70 <sub> km/h </sub></h2>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="comon-report sun-set-div">
                                                    <h5>Sunrise & Sunset</h5>
                                                    <div class="sum">
                                                        <h6><i class="fas fa-moon"></i> 06:30 AM</h6>
                                                    </div>
                                                    <div class="sum">
                                                        <h6><i class="fas fa-sun"></i> 06:30 AM</h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="comon-report uv">
                                                    <h5>Humidity</h5>
                                                    <h2>20 <sup> % </sup></h2>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="comon-report uv">
                                                    <h5>Visibility</h5>
                                                    <h2>8.9 <sup> KM </sup></h2>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="comon-report uv">
                                                    <h5>Air Quality</h5>
                                                    <h2>105</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="comon-report-divbn">
                                <h2 class="today-hilights1 mt-5">Tomorrow's Highlights</h2>
                                <div class="row mt-4 gx-lg-5">
                                    <div class="col-lg-4">
                                        <div class="left-sec-d1">
                                            <div class="sunny"></div>
                                            <h2>12 <sup> °C</sup></h2>
                                            <div class="d-flex justify-content-between">
                                                <span>
                                                    <i class="fas fa-map-marker-alt"></i> Paris
                                                </span>
                                                <span> Monday, May 3 </span>
                                            </div>
                                            <hr />
                                            <ul class="list-unstyled mt-3 mb-0">
                                                <li>
                                                    <i class="fas fa-cloud"></i> Patchy Culdy Day
                                                </li>
                                                <li><i class="fas fa-moon"></i> 19:30</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="row row-cols-1 row-cols-lg-3">
                                            <div class="col">
                                                <div class="comon-report uv">
                                                    <h5>UV Index</h5>
                                                    <figure>
                                                        <img src="images/5643142.png" alt="pn" />
                                                    </figure>
                                                    <ul class="list-unstyled d-flex justify-content-center">
                                                        <li>2</li>
                                                        <li>3</li>
                                                        <li>4</li>
                                                        <li>5</li>
                                                        <li>6</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="comon-report uv">
                                                    <h5>Wind Staus</h5>
                                                    <h2>7.70 <sub> km/h </sub></h2>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="comon-report sun-set-div">
                                                    <h5>Sunrise & Sunset</h5>
                                                    <div class="sum">
                                                        <h6><i class="fas fa-moon"></i> 06:30 AM</h6>
                                                    </div>
                                                    <div class="sum">
                                                        <h6><i class="fas fa-sun"></i> 06:30 AM</h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="comon-report uv">
                                                    <h5>Humidity</h5>
                                                    <h2>20 <sup> % </sup></h2>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="comon-report uv">
                                                    <h5>Visibility</h5>
                                                    <h2>8.9 <sup> KM </sup></h2>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="comon-report uv">
                                                    <h5>Air Quality</h5>
                                                    <h2>105</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <figure class="bg-wath">
            <img src="images/pexels-tom-fisk-2739666.jpg" alt="gb" />
        </figure>
    </div>


    <div class="world-map-div">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>World Weather Map</h1>

                    <div class="map-divn">
                        <figure class="mx-auto">
                            <img src="images/1280px-World_map_with_points.svg.png" alt="mapn" />
                        </figure>
                        <a href="#" class="btn comon-wh india" data-bs-toggle="tooltip" data-bs-placement="right" title="India">
                            <i class="fas fa-cloud-sun"></i>
                        </a>

                        <a href="#" class="btn comon-wh dubai" data-bs-toggle="tooltip" data-bs-placement="right" title="Dubai">
                            <i class="fas fa-sun"></i>
                        </a>
                        <a href="#" class="btn comon-wh china" data-bs-toggle="tooltip" data-bs-placement="right" title="China">
                            <i class="fas fa-sun"></i>
                        </a>
                        <a href="#" class="btn comon-wh barzil" data-bs-toggle="tooltip" data-bs-placement="right" title="Barzil">
                            <i class="fas fa-sun"></i>
                        </a>
                        <a href="#" class="btn comon-wh australia" data-bs-toggle="tooltip" data-bs-placement="right" title="Australia">
                            <i class="fas fa-cloud-sun-rain"></i>
                        </a>
                        <a href="#" class="btn comon-wh rusia" data-bs-toggle="tooltip" data-bs-placement="right" title="Rusia">
                            <i class="fas fa-cloud-moon-rain"></i>
                        </a>
                        <a href="#" class="btn comon-wh canda" data-bs-toggle="tooltip" data-bs-placement="right" title="Canda">
                            <i class="fas fa-cloud-rain"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="news-part1">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h1>Weather News</h1>
                <a href="#" class="btn readmon">
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="best-sl-m2 owl-carousel owl-theme mt-4">
                <div class="comon-part-video">
                    <a href="#" class="btn p-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <figure>
                            <img src="images/pexels-genaro-serv%c3%83%c2%adn-763398.html" alt="pn" />
                        </figure>
                    </a>
                    <ul class="list-unstyled d-flex">
                        <li>
                            <a href="#"> <i class="fa fa-user-alt"></i> Author </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-week"></i> 20 June 2021
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="bg-titel mt-1">
                        Sydney's coldest afternoon of the year
                    </a>
                    <p class="mt-1">
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                    </p>
                </div>

                <div class="comon-part-video">
                    <a href="#" class="btn p-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <figure>
                            <img src="images/pexels-photo-1529360.jpg" alt="pn" />
                        </figure>
                    </a>
                    <ul class="list-unstyled d-flex">
                        <li>
                            <a href="#"> <i class="fa fa-user-alt"></i> Author </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-week"></i> 20 June 2021
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="bg-titel mt-1">
                        Weatherpulse Special - East Coast Lows
                    </a>
                    <p class="mt-1">
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                    </p>
                </div>

                <div class="comon-part-video">
                    <a href="#" class="btn p-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <figure>
                            <img src="images/pexels-photo-753619.jpg" alt="pn" />
                        </figure>
                    </a>
                    <ul class="list-unstyled d-flex">
                        <li>
                            <a href="#"> <i class="fa fa-user-alt"></i> Author </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-week"></i> 20 June 2021
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="bg-titel mt-1">
                        Weatherpulse Special - Climate Outlooks
                    </a>
                    <p class="mt-1">
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                    </p>
                </div>

                <div class="comon-part-video">
                    <a href="#" class="btn p-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <figure>
                            <img src="images/pexels-photo-9541875.webp" alt="pn" />
                        </figure>
                    </a>
                    <ul class="list-unstyled d-flex">
                        <li>
                            <a href="#"> <i class="fa fa-user-alt"></i> Author </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-week"></i> 20 June 2021
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="bg-titel mt-1">
                        Weatherpulse - Weekend severe weather
                    </a>
                    <p class="mt-1">
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                    </p>
                </div>
            </div>
        </div>
    </div>


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

    .cday{
        width: 100%;
        height: 97px;
        border-bottom: 2px #CCCCCC solid;
        padding: 5px 15px;
    }
    .cnight .cnight-content,
    .cday .cday-content{
        display: flex;
        justify-content: space-between;
    }
    .cnight .cnight-content p,
    .cday .cday-content p{
        color: #666666;
        font-size: 28px;
        font-weight: 600;
    }
    .chils span{
        color: #AAAAAA;
        font-size: 14px;
    }
    .cnight p,
    .cday p{
        color: #666666;
        font-size: 16px;
    }
    .cnight{
        width: 100%;
        height: 97px;
        padding: 5px 15px;
    }
</style>

@endsection
@push('after-js')
<script>
    $('.owl-carousel').owlCarousel({
        margin: 0
        , nav: true
        , loop: false
        , dots: false
        , autoWidth: true
        , responsive: {
            0: {
                items: 1
            }
            , 600: {
                items: 3
            }
            , 1000: {
                items: 5
            }
        }
    })

    $("#dayForecast").hide()
    $("#day").click(function(){
        $("#title-forecast h2").removeClass('title-active');
        $(this).addClass('title-active');
        $("#hourlyForecast").hide();
        $("#dayForecast").show();
    })

    $("#hourly").click(function(){
        $("#title-forecast h2").removeClass('title-active');
        $(this).addClass('title-active');
        $("#hourlyForecast").show();
        $("#dayForecast").hide();
    })

</script>

@endpush

