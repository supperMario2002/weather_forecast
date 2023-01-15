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
            <div class="weather-sild1  ">
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

                    <div class="ps-sild  ">
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
</section>
@endsection

