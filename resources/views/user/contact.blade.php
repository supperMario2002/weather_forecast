@extends('layout.layout')

@section('name', 'Tin Tức')

@section('content')

    <section class="float-start w-100 banner-part1 sub-page-banner">

        <div class="container">
            <div class="d-md-flex align-items-center justify-content-between">
                <h1 class="m-0"> Contact
                </h1>
                <nav aria-label="breadcrumb m-0">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>

    </section>

    <section class="body-part float-start w-100">

        <div class="new-page-toal contact-page-total mb-5">

            <div class="container">

                <p align="center" id="txt"></p>

                <div class="row g-lg-5">
                    <div class="col-md-5 cm-text-n">
                        <h2> Contact info</h2>
                        <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h5>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy </p>
                        <ul class="list-unstyled mt-4">
                            <li class="d-flex">
                                <span class="icon-c"><i class="fas fa-phone-square-alt"></i></span>
                                <span class="text-c"> Call Us
                                    <small class="d-block"> +1800-250-2500 </small>
                                </span>
                            </li>
                            <li class="d-flex">
                                <span class="icon-c"><i class="fas fa-envelope"></i></span>
                                <span class="text-c">
                                    Email:
                                    <small class="d-block"> example@gmail.com </small>
                                </span>
                            </li>
                            <li class="d-flex">
                                <span class="icon-c"><i class="fas fa-map-marker-alt"></i></span>
                                <span class="text-c"> Fax:
                                    <small class="d-block"> +1800-250-2500 </small>
                                </span>
                            </li>
                        </ul>

                    </div>
                    <div class="col-md-7">
                        <form name="frm" method="post" action="#">
                            <div class="conatct-form-div mb-5">
                                <h2 class="mt-0"> Feedback </h2>
                                <div class="row mt-4">
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="name" placeholder="Name"
                                            required />
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                            required />
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="phone" placeholder="Phone"
                                            required />
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject"
                                            required />
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea class="form-control" placeholder="Message" name="message" required></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="button" id="btnmail" class="btn subimt-message" value="Submit" />
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
