@extends('layout.layout')

@section('name', 'Tin Tức')

@section('content')

    <section class="float-start w-100 banner-part1 sub-page-banner">

        <div class="container">
            <div class="d-md-flex align-items-center justify-content-between">
                <h1 class="m-0"> News
                </h1>
                <nav aria-label="breadcrumb m-0">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">News</li>
                    </ol>
                </nav>
            </div>
        </div>

    </section>

    <section class="body-part float-start w-100">

        <div class="new-page-toal mb-5">
            <div class="container">
                <h1> Around the Weather News </h1>


                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">


                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{route('news-detail')}}" class="btn p-0">
                                <figure>
                                    <img src="images/ne1.jpg" alt="pn0" />

                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">

                                <li>
                                    <a href="{{route('news-detail')}}"> <i class="fas fa-calendar-week"></i> 1 hours ago </a>
                                </li>
                            </ul>
                            <a href="{{route('news-detail')}}" class="bg-titel mt-1"> Snow season tops the magic two-metre mark
                            </a>
                            <p class="mt-1"> It is a long established fact that a reader will be distracted by the
                                readable content.</p>
                        </div>
                    </div>


                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{route('news-detail')}}">
                                <figure>
                                    <img src="images/pexels-pierre-blach%c3%83%c2%a9-2901215.html" alt="pn1" />

                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">

                                <li>
                                    <a href="{{route('news-detail')}}"> <i class="fas fa-calendar-week"></i> 2 hours ago </a>
                                </li>
                            </ul>
                            <a href="{{route('news-detail')}}" class="bg-titel mt-1"> Where is the lightning capital of Australia?
                            </a>
                            <p class="mt-1"> It is a long established fact that a reader will be distracted by the
                                readable content.</p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{route('news-detail')}}" class="btn p-0">
                                <figure>
                                    <img src="images/ne2.jpg" alt="pn3" />

                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">

                                <li>
                                    <a href="{{route('news-detail')}}"> <i class="fas fa-calendar-week"></i> 2 hours ago </a>
                                </li>
                            </ul>
                            <a href="{{route('news-detail')}}" class="bg-titel mt-1"> Spring bushfire outlook </a>
                            <p class="mt-1"> It is a long established fact that a reader will be distracted by the
                                readable content.</p>
                        </div>
                    </div>
                    <div class="col">

                        <div class="comon-part-video">
                            <a href="{{route('news-detail')}}" class="btn p-0">
                                <figure>
                                    <img src="images/pexels-photo-1850609.jpg" alt="pn2" />

                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">

                                <li>
                                    <a href="{{route('news-detail')}}"> <i class="fas fa-calendar-week"></i> 2 hours ago </a>
                                </li>
                            </ul>
                            <a href="{{route('news-detail')}}" class="bg-titel mt-1"> Black ice and white snow in the Blue
                                Mountains </a>
                            <p class="mt-1"> It is a long established fact that a reader will be distracted by the
                                readable content.</p>
                        </div>
                    </div>



                </div>



                <h1 class="mt-5"> Viral Weather </h1>


                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">


                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{route('news-detail')}}" class="btn p-0">
                                <figure>
                                    <img src="images/news3.jpg" alt="pn9" />

                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">

                                <li>
                                    <a href="{{route('news-detail')}}"> <i class="fas fa-calendar-week"></i> 2 hours ago </a>
                                </li>
                            </ul>
                            <a href="{{route('news-detail')}}" class="bg-titel mt-1"> Sydney's coldest afternoon of the year </a>
                            <p class="mt-1"> It is a long established fact that a reader will be distracted by the
                                readable content.</p>
                        </div>
                    </div>


                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{route('news-detail')}}" class="btn p-0">
                                <figure>
                                    <img src="images/ne3.jpg" alt="pn10" />

                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">

                                <li>
                                    <a href="{{route('news-detail')}}"> <i class="fas fa-calendar-week"></i> 2 hours ago </a>
                                </li>
                            </ul>
                            <a href="{{route('news-detail')}}" class="bg-titel mt-1"> Temperatures plunging in southeastern
                                Australia </a>
                            <p class="mt-1"> It is a long established fact that a reader will be distracted by the
                                readable content.</p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{route('news-detail')}}" class="btn p-0">
                                <figure>
                                    <img src="images/ne4.jpg" alt="pn" />

                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">

                                <li>
                                    <a href="{{route('news-detail')}}"> <i class="fas fa-calendar-week"></i> 2 hours ago </a>
                                </li>
                            </ul>
                            <a href="{{route('news-detail')}}" class="bg-titel mt-1"> Bitter cold snap catches kangaroos on the hop
                            </a>
                            <p class="mt-1"> It is a long established fact that a reader will be distracted by the
                                readable content.</p>
                        </div>
                    </div>
                    <div class="col">

                        <div class="comon-part-video">
                            <a href="{{route('news-detail')}}" class="btn p-0">
                                <figure>
                                    <img src="images/ne5.jpg" alt="pn" />

                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">

                                <li>
                                    <a href="{{route('news-detail')}}"> <i class="fas fa-calendar-week"></i> 2 hours ago </a>
                                </li>
                            </ul>
                            <a href="{{route('news-detail')}}" class="bg-titel mt-1"> Climate Update - August 2022 </a>
                            <p class="mt-1"> It is a long established fact that a reader will be distracted by the
                                readable content.</p>
                        </div>
                    </div>



                </div>




                <h1 class="mt-5"> Space and Astronomy </h1>


                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">


                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{route('news-detail')}}" class="btn p-0">
                                <figure>
                                    <img src="images/sp1.jpg" alt="pn11" />

                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">

                                <li>
                                    <a href="{{route('news-detail')}}"> <i class="fas fa-calendar-week"></i> 2 hours ago </a>
                                </li>
                            </ul>
                            <a href="{{route('news-detail')}}" class="bg-titel mt-1"> Snow Season Outlook - 2022 </a>
                            <p class="mt-1"> It is a long established fact that a reader will be distracted by the
                                readable content.</p>
                        </div>
                    </div>


                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{route('news-detail')}}" class="btn p-0">
                                <figure>
                                    <img src="images/sp2.jpg" alt="pn13" />

                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">

                                <li>
                                    <a href="{{route('news-detail')}}"> <i class="fas fa-calendar-week"></i> 2 hours ago </a>
                                </li>
                            </ul>
                            <a href="{{route('news-detail')}}" class="bg-titel mt-1"> Climate Update - Autumn 2022 </a>
                            <p class="mt-1"> It is a long established fact that a reader will be distracted by the
                                readable content.</p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{route('news-detail')}}" class="btn p-0">
                                <figure>
                                    <img src="images/sp3.jpg" alt="pn14" />

                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">

                                <li>
                                    <a href="{{route('news-detail')}}"> <i class="fas fa-calendar-week"></i> 2 hours ago </a>
                                </li>
                            </ul>
                            <a href="{{route('news-detail')}}" class="bg-titel mt-1"> Climate Update - May 2022 </a>
                            <p class="mt-1"> It is a long established fact that a reader will be distracted by the
                                readable content.</p>
                        </div>
                    </div>
                    <div class="col">

                        <div class="comon-part-video">
                            <a href="{{route('news-detail')}}" class="btn p-0">
                                <figure>
                                    <img src="images/sp4.jpg" alt="pn" />

                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">

                                <li>
                                    <a href="{{route('news-detail')}}"> <i class="fas fa-calendar-week"></i> 2 hours ago </a>
                                </li>
                            </ul>
                            <a href="{{route('news-detail')}}" class="bg-titel mt-1"> Climate Update - April 2022 </a>
                            <p class="mt-1"> It is a long established fact that a reader will be distracted by the
                                readable content.</p>
                        </div>
                    </div>



                </div>




            </div>
        </div>








    </section>

@endsection
