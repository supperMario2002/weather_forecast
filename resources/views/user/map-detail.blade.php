@extends('layout.layout')

@section('name', 'Tin Tức')

@section('content')

    <section class="float-start w-100 banner-part1 sub-page-banner">

        <div class="container">
            <div class="d-md-flex align-items-center justify-content-between">
                <h1 class="m-0"> Map Details
                </h1>
                <nav aria-label="breadcrumb m-0">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Map Details</li>
                    </ol>
                </nav>
            </div>
        </div>

    </section>

    <section class="body-part float-start w-100">

        <div class="new-page-toal map-page-total">
            <div class="container">

                <h1> India Weather Map </h1>
                <p class="mt-2 mb-3"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy
                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. </p>


                <div class="row g-lg-5 mt-3">
                    <div class="col-lg-9">
                        <iframe class="map-cm1"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15258072.40570261!2d82.75252935!3d20.98801345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1660662906433!5m2!1sen!2sin"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                    <div class="col-lg-3 right-news-map mt-5 mt-lg-0">
                        <a href="#" class="comon-weth-map">
                            <figure>
                                <img src="images/istockphoto-468526566-612x612.jpg" alt="go">
                            </figure>
                            <h5> Temperature Map </h5>
                        </a>

                        <a href="#" class="comon-weth-map">
                            <figure>
                                <img src="images/istockphoto-468526566-612x612.jpg" alt="go">
                            </figure>
                            <h5> Cloud Map </h5>
                        </a>

                        <a href="#" class="comon-weth-map">
                            <figure>
                                <img src="images/windmap.jpg" alt="go">
                            </figure>
                            <h5> Wind Map </h5>
                        </a>


                    </div>
                </div>


            </div>

            <div class="dya-mn mb-5">
                <div class="container">
                    <div class="content-sec-wh">
                        <h1> India Weekly Forecast </h1>
                        <div class="row weekly-div mt-4">
                            <div class="col">
                                <div class="comon-days">
                                    <h4> Mon </h4>
                                    <div class="partly_cloudy">
                                        <div class="partly_cloudy__sun"></div>
                                        <div class="partly_cloudy__cloud"></div>
                                    </div>
                                    <h6> 12° / <span class="ms-1"> 2°</span> </h6>
                                </div>
                            </div>

                            <div class="col">
                                <div class="comon-days">
                                    <h4> Tue </h4>
                                    <div class="cloudy"></div>
                                    <h6> 12° / <span class="ms-1"> 2°</span> </h6>
                                </div>
                            </div>

                            <div class="col">
                                <div class="comon-days">
                                    <h4> Wen </h4>
                                    <div class="partly_cloudy">
                                        <div class="partly_cloudy__sun"></div>
                                        <div class="partly_cloudy__cloud"></div>
                                    </div>
                                    <h6> 30° / <span class="ms-1"> 25°</span> </h6>
                                </div>
                            </div>

                            <div class="col">
                                <div class="comon-days">
                                    <h4> Thu </h4>
                                    <div class="sunny"></div>
                                    <h6> 12° / <span class="ms-1"> 2°</span> </h6>
                                </div>
                            </div>

                            <div class="col">
                                <div class="comon-days">
                                    <h4> Fri </h4>
                                    <div class="partly_cloudy">
                                        <div class="partly_cloudy__sun"></div>
                                        <div class="partly_cloudy__cloud"></div>
                                    </div>
                                    <h6> 25° / <span class="ms-1"> 20°</span> </h6>
                                </div>
                            </div>

                            <div class="col">
                                <div class="comon-days">
                                    <h4> Sat </h4>
                                    <div class="thundery">
                                        <div class="thundery__cloud"></div>
                                        <div class="thundery__rain"></div>
                                    </div>
                                    <h6> 24° / <span class="ms-1"> 12°</span> </h6>
                                </div>
                            </div>

                            <div class="col">
                                <div class="comon-days">
                                    <h4> Sun </h4>
                                    <div class="rainy">
                                        <div class="rainy__cloud"></div>
                                        <div class="rainy__rain"></div>
                                    </div>
                                    <h6> 30° / <span class="ms-1"> 22°</span> </h6>
                                </div>
                            </div>
                        </div>

                        <div class="all-forcuset mt-5">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">Today</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                        type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Tomorrow</button>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">

                                    <div class="comon-report-divbn">
                                        <h2 class="today-hilights1 mt-4"> Today's Highlights </h2>
                                        <div class="row mt-4 gx-lg-5">
                                            <div class="col-lg-4">
                                                <div class="left-sec-d1">
                                                    <div class="sunny"></div>
                                                    <h2> 12 <sup> °C</sup>
                                                    </h2>
                                                    <div class="d-flex justify-content-between">
                                                        <span> <i class="fas fa-map-marker-alt"></i> Bangladesh </span>
                                                        <span> Sunday,
                                                            May 4 </span>
                                                    </div>
                                                    <hr>
                                                    <ul class="list-unstyled mt-3 mb-0">
                                                        <li> <i class="fas fa-cloud"></i> Patchy Culdy Day
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-moon"></i> 19:30
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>

                                            <div class="col-lg-8">


                                                <div class="row row-cols-1 row-cols-lg-3">
                                                    <div class="col">
                                                        <div class="comon-report uv">
                                                            <h5> UV Index </h5>
                                                            <figure>
                                                                <img src="images/5643142.png" alt="pn">
                                                            </figure>
                                                            <ul class="list-unstyled d-flex justify-content-center">
                                                                <li> 2 </li>
                                                                <li> 3 </li>
                                                                <li> 4 </li>
                                                                <li> 5 </li>
                                                                <li> 6 </li>

                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="comon-report uv">
                                                            <h5> Wind Staus </h5>
                                                            <h2> 7.70 <sub> km/h </sub> </h2>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="comon-report sun-set-div">
                                                            <h5> Sunrise &amp; Sunset </h5>
                                                            <div class="sum">
                                                                <h6> <i class="fas fa-moon"></i> 06:30 AM </h6>
                                                            </div>
                                                            <div class="sum">
                                                                <h6> <i class="fas fa-sun"></i> 06:30 AM </h6>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="comon-report uv">
                                                            <h5>Humidity </h5>
                                                            <h2> 20 <sup> % </sup> </h2>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="comon-report uv">
                                                            <h5> Visibility </h5>
                                                            <h2> 8.9 <sup> KM </sup> </h2>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="comon-report uv">
                                                            <h5> Air Quality </h5>
                                                            <h2> 105 </h2>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                    <div class="comon-report-divbn">
                                        <h2 class="today-hilights1 mt-5"> Tomorrow's Highlights </h2>
                                        <div class="row mt-4 gx-lg-5">
                                            <div class="col-lg-4">
                                                <div class="left-sec-d1">
                                                    <div class="sunny"></div>
                                                    <h2> 12 <sup> °C</sup>
                                                    </h2>
                                                    <div class="d-flex justify-content-between">
                                                        <span> <i class="fas fa-map-marker-alt"></i> Paris </span>
                                                        <span> Monday,
                                                            May 3 </span>
                                                    </div>
                                                    <hr>
                                                    <ul class="list-unstyled mt-3 mb-0">
                                                        <li> <i class="fas fa-cloud"></i> Patchy Culdy Day
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-moon"></i> 19:30
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>

                                            <div class="col-lg-8">


                                                <div class="row row-cols-1 row-cols-lg-3">
                                                    <div class="col">
                                                        <div class="comon-report uv">
                                                            <h5> UV Index </h5>
                                                            <figure>
                                                                <img src="images/5643142.png" alt="pn">
                                                            </figure>
                                                            <ul class="list-unstyled d-flex justify-content-center">
                                                                <li> 2 </li>
                                                                <li> 3 </li>
                                                                <li> 4 </li>
                                                                <li> 5 </li>
                                                                <li> 6 </li>

                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="comon-report uv">
                                                            <h5> Wind Staus </h5>
                                                            <h2> 7.70 <sub> km/h </sub> </h2>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="comon-report sun-set-div">
                                                            <h5> Sunrise &amp; Sunset </h5>
                                                            <div class="sum">
                                                                <h6> <i class="fas fa-moon"></i> 06:30 AM </h6>
                                                            </div>
                                                            <div class="sum">
                                                                <h6> <i class="fas fa-sun"></i> 06:30 AM </h6>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="comon-report uv">
                                                            <h5>Humidity </h5>
                                                            <h2> 20 <sup> % </sup> </h2>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="comon-report uv">
                                                            <h5> Visibility </h5>
                                                            <h2> 8.9 <sup> KM </sup> </h2>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="comon-report uv">
                                                            <h5> Air Quality </h5>
                                                            <h2> 105 </h2>
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



            </div>
        </div>








    </section>

@endsection
