@extends('layout.layout')

@section('name', 'Trang chủ')

@section('content')
<section class="float-start w-100 banner-part1">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 top-part-banner1">
            <div class="col">
                <div class="partly_cloudy">
                    <div class="partly_cloudy__sun"></div>
                    <div class="partly_cloudy__cloud"></div>
                </div>
                <h1 class="mb-2">34 <sup>0 </sup></h1>
                <h2>
                    <span> 30 <sup>0</sup> </span> / <span> 20 <sup>0</sup> </span>
                </h2>
            </div>
            <div class="col">
                <div class="date-m ms-lg-auto d-table">
                    <h3>
                        <i class="fas fa-map-marker-alt"></i> San Francisco
                        <span class="d-block"> September 18, 2022</span>
                    </h3>
                </div>

                <figure class="m-0">
                    <img src="images/banne-img-right.png" alt="bnm" />
                </figure>
            </div>
        </div>

        <div class="hours-div">
            <h2>Hourly</h2>
            <div class="weather-sild1 owl-carousel owl-theme">
                <div class="live-weather text-center">
                    <h5>Now</h5>
                    <div class="partly_cloudy">
                        <div class="partly_cloudy__sun"></div>
                        <div class="partly_cloudy__cloud"></div>
                    </div>
                    <h4>30 <sup>0</sup></h4>
                </div>

                <div class="live-weather text-center">
                    <h5>11am</h5>
                    <div class="partly_cloudy">
                        <div class="partly_cloudy__sun"></div>
                        <div class="partly_cloudy__cloud"></div>
                    </div>
                    <h4>31 <sup>0</sup></h4>
                </div>

                <div class="live-weather text-center">
                    <h5>12pm</h5>
                    <div class="partly_cloudy">
                        <div class="partly_cloudy__sun"></div>
                        <div class="partly_cloudy__cloud"></div>
                    </div>
                    <h4>32 <sup>0</sup></h4>
                </div>

                <div class="live-weather text-center">
                    <h5>1pm</h5>
                    <div class="rainy mx-auto">
                        <div class="rainy__cloud"></div>
                        <div class="rainy__rain"></div>
                    </div>
                    <h4>33 <sup>0</sup></h4>
                </div>

                <div class="live-weather text-center">
                    <h5>2pm</h5>
                    <div class="partly_cloudy">
                        <div class="partly_cloudy__sun"></div>
                        <div class="partly_cloudy__cloud"></div>
                    </div>
                    <h4>33 <sup>0</sup></h4>
                </div>

                <div class="live-weather text-center">
                    <h5>3pm</h5>
                    <div class="cloudy mx-auto"></div>
                    <h4>33 <sup>0</sup></h4>
                </div>

                <div class="live-weather text-center">
                    <h5>4pm</h5>
                    <div class="partly_cloudy">
                        <div class="partly_cloudy__sun"></div>
                        <div class="partly_cloudy__cloud"></div>
                    </div>
                    <h4>33 <sup>0</sup></h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="body-part float-start w-100">
    <div class="recent-search-div">
        <div class="container">
            <div class="row align-items-center g-lg-4">
                <div class="col-lg-4">
                    <h2>
                        Provide Your
                        <span class="d-block"> Search Weather </span>
                    </h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem
                    </p>
                </div>
                <div class="col-lg-8">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Recent Place</h5>
                        <a href="#" class="btn readmon">
                            <i class="fas fa-arrow-right"></i>
                        </a>
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

                            <div class="rain"></div>
                            <div class="lightining"></div>
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

                            <div class="sunny"></div>
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

                            <div class="rain"></div>
                            <div class="lightining"></div>
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

    <div class="world-forcust-div">
        <div class="container">
            <h1 class="text-center">World Weather Forecast</h1>
            <div class="col-lg-10 mx-auto mt-5">
                <ul class="list-unstyled p-0 m-0">
                    <li>
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/aus.jpg" alt="aus" />
                            </figure>
                            Australia
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/indo.jpg" alt="aus" />
                            </figure>
                            Indonesia
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/swi.jpg" alt="aus" />
                            </figure>
                            Sweden
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/japan.jpg" alt="aus" />
                            </figure>
                            Japan
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/candna.jpg" alt="aus" />
                            </figure>
                            Canda
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/nth.jpg" alt="aus" />
                            </figure>
                            Netherland
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/ind.jpg" alt="aus" />
                            </figure>
                            India
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/china.jpg" alt="aus" />
                            </figure>
                            China
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/londoan.jpg" alt="aus" />
                            </figure>
                            London
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/spian.jpg" alt="aus" />
                            </figure>
                            Spain
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/fra.jpg" alt="aus" />
                            </figure>
                            France
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/brzil.jpg" alt="aus" />
                            </figure>
                            Brazil
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/uk.jpg" alt="aus" />
                            </figure>
                            New York
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/poland.jpg" alt="aus" />
                            </figure>
                            Poland
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/ger.jpg" alt="aus" />
                            </figure>
                            Germaney
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/urb.jpg" alt="aus" />
                            </figure>
                            Dubai
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/arb.jpg" alt="aus" />
                            </figure>
                            Afganistan
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/um.jpg" alt="aus" />
                            </figure>
                            Bali
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn explore-btn mt-4"> Explore All locations </a>
        </div>
    </div>

    <div class="world-map-div">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
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

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <h1>Top Clity Weather</h1>

                    <a href="#" class="comon-fom-st">
                        <figure>
                            <img src="images/ind.jpg" alt="aus" />
                        </figure>
                        Kolkata
                        <i class="fas fa-arrow-right"></i>
                    </a>

                    <a href="#" class="comon-fom-st">
                        <figure>
                            <img src="images/brzil.jpg" alt="aus" />
                        </figure>
                        Captown
                        <i class="fas fa-arrow-right"></i>
                    </a>

                    <a href="#" class="comon-fom-st">
                        <figure>
                            <img src="images/indo.jpg" alt="aus" />
                        </figure>
                        Bali
                        <i class="fas fa-arrow-right"></i>
                    </a>

                    <a href="#" class="comon-fom-st">
                        <figure>
                            <img src="images/aus.jpg" alt="aus" />
                        </figure>
                        Melbourne
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="forecast-videos">
        <div class="container">
            <div class="row g-lg-5">
                <div class="col-lg-8">
                    <h1>Forecast Videos</h1>
                    <div class="best-sl-m owl-carousel owl-theme">
                        <div class="comon-part-video">
                            <a href="#" class="btn p-0">
                                <figure>
                                    <img src="images/pexels-adhitya-andanu-1561806.jpg" alt="pn" />
                                    <i class="fas fa-play-circle"></i>
                                </figure>
                            </a>
                            <h5 class="mt-1">
                                Where is the lightning capital of Australia?
                            </h5>
                            <p class="mt-1">
                                It is a long established fact that a reader will be
                                distracted by the readable content of a page when looking at
                                its layout.
                            </p>
                        </div>

                        <div class="comon-part-video">
                            <a href="#" class="btn p-0">
                                <figure>
                                    <img src="images/pexels-genaro-serv%c3%83%c2%adn-763398.html" alt="pn" />
                                    <i class="fas fa-play-circle"></i>
                                </figure>
                            </a>
                            <h5 class="mt-1">
                                Bitter cold snap catches kangaroos on the hop
                            </h5>
                            <p class="mt-1">
                                It is a long established fact that a reader will be
                                distracted by the readable content of a page when looking at
                                its layout.
                            </p>
                        </div>

                        <div class="comon-part-video">
                            <a href="#" class="btn p-0">
                                <figure>
                                    <img src="images/pexels-elina-sazonova-1907049.jpg" alt="pn" />
                                    <i class="fas fa-play-circle"></i>
                                </figure>
                            </a>
                            <h5 class="mt-1">
                                Black ice and white snow in the Blue Mountains
                            </h5>
                            <p class="mt-1">
                                It is a long established fact that a reader will be
                                distracted by the readable content of a page when looking at
                                its layout.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h3>Weather In Pictures</h3>
                    <div class="row row-cols-2 row-cols-lg-2 g-2">
                        <div class="col">
                            <a href="#" class="comon-pic">
                                <figure class="m-0">
                                    <img src="images/sm-news.jfif" alt="hm" />
                                </figure>
                                <span class="hover-effect">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                                    </svg>
                                </span>
                            </a>
                        </div>

                        <div class="col">
                            <a href="#" class="comon-pic">
                                <figure class="m-0">
                                    <img src="images/small-photo1.jpg" alt="hm" />
                                </figure>
                                <span class="hover-effect">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                                    </svg>
                                </span>
                            </a>
                        </div>

                        <div class="col">
                            <a href="#" class="comon-pic">
                                <figure class="m-0">
                                    <img src="images/worl-sm-3.jpg" alt="hm" />
                                </figure>
                                <span class="hover-effect">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                                    </svg>
                                </span>
                            </a>
                        </div>

                        <div class="col">
                            <a href="#" class="comon-pic">
                                <figure class="m-0">
                                    <img src="images/sm-news.jfif" alt="hm" />
                                </figure>
                                <span class="hover-effect">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>

                    <a href="#" class="btn more-btn mt-3"> More Pictures </a>
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

    <div class="get-mobile">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col">
                    <h1 class="mt-5">
                        Weather Assistant
                        <span class="d-block"> In your Phone </span>
                    </h1>
                    <h6 class="col-lg-6">
                        Find Out Rain and floods beckon as La Nina looms and IOD
                        deepens.
                    </h6>
                    <a href="#" class="btn dbtn-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                        </svg>
                        Download App
                    </a>
                </div>
                <div class="col">
                    <figure class="m-0 mt-5 mt-lg-0">
                        <img src="images/apps.png" alt="ap" />
                    </figure>
                </div>
                <figure class="bg-apps">
                    <img src="images/apps-2.png" alt="png" />
                </figure>
            </div>
        </div>
    </div>
</section>
@endsection

