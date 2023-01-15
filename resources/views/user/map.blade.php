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

        <div class="new-page-toal map-page-total">
            <div class="container">

                <h1> Europe Map Finder </h1>
                <div class="row row-cols-1  row-cols-lg-3">
                    <div class="col">
                        <a href="{{route('map-detail')}}" class="comon-weth-map">
                            <figure>
                                <img src="images/istockphoto-468526566-612x612.jpg" alt="go" />
                            </figure>
                            <h5> Temperature Map </h5>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{route('map-detail')}}" class="comon-weth-map">
                            <figure>
                                <img src="images/istockphoto-468526566-612x612.jpg" alt="go" />
                            </figure>
                            <h5> Cloud Map </h5>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{route('map-detail')}}" class="comon-weth-map">
                            <figure>
                                <img src="images/windmap.jpg" alt="go" />
                            </figure>
                            <h5> Wind Map </h5>
                        </a>
                    </div>


                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 mt-5">
                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/nth.jpg" alt="aus">
                            </figure>
                            Netherland
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>
                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/fra.jpg" alt="aus">
                            </figure>
                            France
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/londoan.jpg" alt="aus">
                            </figure>
                            London
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/ger.jpg" alt="aus">
                            </figure>
                            Germaney
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/poland.jpg" alt="aus">
                            </figure>
                            Poland
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>


                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/uk.jpg" alt="aus">
                            </figure>
                            New York
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/denmark.jpg" alt="aus">
                            </figure>
                            Denmark
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>


                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/swiser.jpg" alt="aus">
                            </figure>
                            Switzerland
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                </div>



                <h1> Asia Map Finder </h1>
                <div class="row row-cols-1 row-cols-lg-3">
                    <div class="col">
                        <a href="#" class="comon-weth-map">
                            <figure>
                                <img src="images/istockphoto-468526566-612x612.jpg" alt="go" />
                            </figure>
                            <h5> Temperature Map </h5>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="comon-weth-map">
                            <figure>
                                <img src="images/istockphoto-468526566-612x612.jpg" alt="go" />
                            </figure>
                            <h5> Cloud Map </h5>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="comon-weth-map">
                            <figure>
                                <img src="images/windmap.jpg" alt="go" />
                            </figure>
                            <h5> Wind Map </h5>
                        </a>
                    </div>


                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 mt-5">
                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/ind.jpg" alt="aus">
                            </figure>
                            India
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>
                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/china.jpg" alt="aus">
                            </figure>
                            China
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/arb.jpg" alt="aus">
                            </figure>
                            Afganistan
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/bang.jpg" alt="aus">
                            </figure>
                            Bangladesh
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/bang.jpg" alt="aus">
                            </figure>
                            Sri Lanka
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>


                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/japan.jpg" alt="aus">
                            </figure>
                            Japan
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/signa.jpg" alt="aus">
                            </figure>
                            Singapore
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>


                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/maldivs.jpg" alt="aus">
                            </figure>
                            Maldives
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                </div>



                <h1> Africa Map Finder </h1>
                <div class="row row-cols-1 row-cols-lg-3">
                    <div class="col">
                        <a href="#" class="comon-weth-map">
                            <figure>
                                <img src="images/istockphoto-468526566-612x612.jpg" alt="go" />
                            </figure>
                            <h5> Temperature Map </h5>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="comon-weth-map">
                            <figure>
                                <img src="images/istockphoto-468526566-612x612.jpg" alt="go" />
                            </figure>
                            <h5> Cloud Map </h5>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="comon-weth-map">
                            <figure>
                                <img src="images/windmap.jpg" alt="go" />
                            </figure>
                            <h5> Wind Map </h5>
                        </a>
                    </div>


                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 mt-5">
                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/naige.jpg" alt="aus">
                            </figure>
                            Nigeria
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>
                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/tans.jpg" alt="aus">
                            </figure>
                            Tanzania
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/sout.jpg" alt="aus">
                            </figure>
                            South Africa
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/zimba.jpg" alt="aus">
                            </figure>
                            Zimbabwe
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/egpt.jpg" alt="aus">
                            </figure>
                            Egypt
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>


                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/brzil.jpg" alt="aus">
                            </figure>
                            Brazil
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="col">
                        <a href="#" class="comon-fom-st">
                            <figure>
                                <img src="images/Algeria.jpg" alt="aus">
                            </figure>
                            Algeria
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>


                    <div class="col">
                        <a href="{{route('map-detail')}}" class="comon-fom-st">
                            <figure>
                                <img src="images/ghana.jpg" alt="aus">
                            </figure>
                            Ghana
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                </div>



            </div>
        </div>








    </section>

@endsection
