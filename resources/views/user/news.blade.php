@extends('layout.layout')

@section('name', 'Tin Tức')

@section('content')

    <section class="float-start w-100 banner-part1 sub-page-banner">

        <div class="container">
            <div class="d-md-flex align-items-center justify-content-between">
                <h1 class="m-0"> Tin Tức
                </h1>
                <nav aria-label="breadcrumb m-0">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
                    </ol>
                </nav>
            </div>
        </div>

    </section>

    <section class="body-part float-start w-100">

        <div class="new-page-toal mb-5">
            <div class="container">
                <h1> Bản tin thời tiết các thành phố Bắc Bộ </h1>


                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">


                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{ route('news-detail') }}" class="btn p-0">
                                <figure>
                                    <img src="images/HN.jpg" alt="pn0" />

                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">

                                <li>
                                    <a href="{{ route('news-detail') }}"> <i class="fas fa-calendar-week"></i> 1 hours ago
                                    </a>
                                </li>
                            </ul>
                            <a href="{{ route('news-detail') }}" class="bg-titel mt-1"> Thành phố Hà Nội
                            </a>
                            <p class="mt-1"> Sương mù giày đặc, không khí ở mức độ cao, Nguy hiểm đến tính mạng.</p>
                        </div>
                    </div>


                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{ route('news-detail') }}">
                                <figure>
                                    <img src="images/HG.jpg" alt="pn1" />
                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">
                                <li>
                                    <a href="{{ route('news-detail') }}"> <i class="fas fa-calendar-week"></i> 2 hours ago
                                    </a>
                                </li>
                            </ul>
                            <a href="{{ route('news-detail') }}" class="bg-titel mt-1"> Hà Giang
                            </a>
                            <p class="mt-1"> Sáng sớm có sương mù nhiệt độ tăng dần đến trưa đạt đến 100 độ C.</p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{ route('news-detail') }}" class="btn p-0">
                                <figure>
                                    <img src="images/LS.jpg" alt="pn3" />
                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">

                                <li>
                                    <a href="{{ route('news-detail') }}"> <i class="fas fa-calendar-week"></i> 2 hours ago
                                    </a>
                                </li>
                            </ul>
                            <a href="{{ route('news-detail') }}" class="bg-titel mt-1"> Lạng Sơn </a>
                            <p class="mt-1"> Ban ngày thời tiết ở Lạng Sơn thường nhiều nắng và rất nóng, Các tâm lý thời tiết ở Lạng Sơn bao gồm những cơn mưa nhẹ nhàng, nhiều nắng và nhiều gió.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{ route('news-detail') }}" class="btn p-0">
                                <figure>
                                    <img src="images/BG.jpg" alt="pn3" />
                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">

                                <li>
                                    <a href="{{ route('news-detail') }}"> <i class="fas fa-calendar-week"></i> 2 hours ago
                                    </a>
                                </li>
                            </ul>
                            <a href="{{ route('news-detail') }}" class="bg-titel mt-1"> Bắc Giang </a>
                            <p class="mt-1"> Bắc Giang ngày càng ấm áp và đầy màu sắc, Một sương mù ánh sáng vàng bừng đẹp như những nụ hoa bông, Một sương mù ánh sáng vàng bừng đẹp như những nụ hoa bông.</p>
                        </div>
                    </div>



                </div>



                <h1 class="mt-5"> Bản tin thời tiết các tỉnh Trung Bộ </h1>


                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">

                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{ route('news-detail') }}" class="btn p-0">
                                <figure>
                                    <img src="images/LS.jpg" alt="pn3" />
                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">

                                <li>
                                    <a href="{{ route('news-detail') }}"> <i class="fas fa-calendar-week"></i> 2 hours ago
                                    </a>
                                </li>
                            </ul>
                            <a href="{{ route('news-detail') }}" class="bg-titel mt-1"> Thừa Thiên Huế </a>
                            <p class="mt-1"> Ban ngày thời tiết ở Lạng Sơn thường nhiều nắng và rất nóng, Các tâm lý thời tiết ở Lạng Sơn bao gồm những cơn mưa nhẹ nhàng, nhiều nắng và nhiều gió.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{ route('news-detail') }}" class="btn p-0">
                                <figure>
                                    <img src="images/BG.jpg" alt="pn3" />
                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">

                                <li>
                                    <a href="{{ route('news-detail') }}"> <i class="fas fa-calendar-week"></i> 2 hours ago
                                    </a>
                                </li>
                            </ul>
                            <a href="{{ route('news-detail') }}" class="bg-titel mt-1"> Quảng Trị </a>
                            <p class="mt-1"> Bắc Giang ngày càng ấm áp và đầy màu sắc, Một sương mù ánh sáng vàng bừng đẹp như những nụ hoa bông, Một sương mù ánh sáng vàng bừng đẹp như những nụ hoa bông.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{ route('news-detail') }}">
                                <figure>
                                    <img src="images/HG.jpg" alt="pn1" />
                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">
                                <li>
                                    <a href="{{ route('news-detail') }}"> <i class="fas fa-calendar-week"></i> 2 hours ago
                                    </a>
                                </li>
                            </ul>
                            <a href="{{ route('news-detail') }}" class="bg-titel mt-1"> Quảng Ngãi
                            </a>
                            <p class="mt-1"> Sáng sớm có sương mù nhiệt độ tăng dần đến trưa đạt đến 100 độ C.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{ route('news-detail') }}" class="btn p-0">
                                <figure>
                                    <img src="images/HN.jpg" alt="pn0" />

                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">

                                <li>
                                    <a href="{{ route('news-detail') }}"> <i class="fas fa-calendar-week"></i> 1 hours ago
                                    </a>
                                </li>
                            </ul>
                            <a href="{{ route('news-detail') }}" class="bg-titel mt-1"> Kon Tum
                            </a>
                            <p class="mt-1"> Sương mù giày đặc, không khí ở mức độ cao, Nguy hiểm đến tính mạng.</p>
                        </div>
                    </div>
                    
                </div>




                <h1 class="mt-5"> Không gian và thiên văn học </h1>


                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{ route('news-detail') }}" class="btn p-0">
                                <figure>
                                    <img src="images/sp1.jpg" alt="pn11" />
                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">
                                <li>
                                    <a href="{{ route('news-detail') }}"> <i class="fas fa-calendar-week"></i> 2 hours
                                        ago </a>
                                </li>
                            </ul>
                            <a href="{{ route('news-detail') }}" class="bg-titel mt-1"> Thiên Hà </a>
                            <p class="mt-1"> Một thực tế đã được chứng minh từ lâu là người đọc sẽ bị phân tâm bởi nội dung có thể đọc được..</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{ route('news-detail') }}" class="btn p-0">
                                <figure>
                                    <img src="images/sp2.jpg" alt="pn13" />

                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">

                                <li>
                                    <a href="{{ route('news-detail') }}"> <i class="fas fa-calendar-week"></i> 2 hours
                                        ago </a>
                                </li>
                            </ul>
                            <a href="{{ route('news-detail') }}" class="bg-titel mt-1"> Thám hiểm sao chổi </a>
                            <p class="mt-1"> Những người thích ngắm sao sẽ có cơ hội phát hiện ra nó tốt hơn khi sử dụng ống nhòm, trong đó nó sẽ xuất hiện dưới dạng một vệt màu trắng mờ..</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{ route('news-detail') }}" class="btn p-0">
                                <figure>
                                    <img src="images/sp3.jpg" alt="pn14" />
                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">
                                <li>
                                    <a href="{{ route('news-detail') }}"> <i class="fas fa-calendar-week"></i> 2 hours
                                        ago </a>
                                </li>
                            </ul>
                            <a href="{{ route('news-detail') }}" class="bg-titel mt-1"> Sao thổ </a>
                            <p class="mt-1"> Sao Thổ thay đổi góc nghiên 30 độ, lúc này Trái Đất của chúng ta sẽ bị văng ra khỏi hệ Mặt trời hoàn toàn, theo New Scientis...</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="comon-part-video">
                            <a href="{{ route('news-detail') }}" class="btn p-0">
                                <figure>
                                    <img src="images/sp4.jpg" alt="pn" />
                                </figure>
                            </a>
                            <ul class="list-unstyled mb-2">
                                <li>
                                    <a href="{{ route('news-detail') }}"> <i class="fas fa-calendar-week"></i> 2 hours
                                        ago </a>
                                </li>
                            </ul>
                            <a href="{{ route('news-detail') }}" class="bg-titel mt-1"> Lỗ đen vũ trụ </a>
                            <p class="mt-1"> Trong trường hợp vũ trụ quan sát được, các nhà nghiên cứu ước tính có khoảng 40 tỉ tỉ hố đen, chiếm 1% trong tổng số vật chất thường của vũ trụ...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
