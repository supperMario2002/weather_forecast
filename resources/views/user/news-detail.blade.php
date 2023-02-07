@extends('layout.layout')

@section('name', 'Tin Tức')

@section('content')
    <section class="float-start w-100 banner-part1 sub-page-banner">

        <div class="container">
            <div class="d-md-flex align-items-center justify-content-between">
                <h1 class="m-0"> Tin tức
                </h1>
                <nav aria-label="breadcrumb m-0">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Bài báo</li>
                    </ol>
                </nav>
            </div>
        </div>

    </section>

    <section class="body-part float-start w-100">

        <div class="new-page-toal new-sdetails">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-8">
                        <h2> Bắc Biển Đông có gió Đông Bắc giật cấp 9-10</h2>
                        <h5> Bnews. Theo Trung tâm Dự báo khí tượng thủy văn quốc gia, ngày và đêm 1/2, Bắc Bộ và Bắc Trung
                            Bộ có mưa, sương mù, trời rét về đêm và sáng sớm, vùng núi cao có nơi dưới 13 độ C.</h5>
                        <h6> Cơ quan chủ quản: Thông tấn xã Việt Nam; Số 5 Lý Thường Kiệt - Hà Nội</h6>
                        <ul class="list-unstyled d-sm-flex">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>

                        <figure class="body-img2">
                            <img src="images/pexels-photo-753619.jpg" alt="pm" />
                        </figure>

                        <p> Theo Trung tâm Dự báo khí tượng thuỷ văn quốc gia, sáng 29/1, khu vực Bắc Biển Đông có gió Đông
                            Bắc mạnh cấp 6-7, giật cấp 9-10. Tại Trường Sa có gió Đông Bắc mạnh cấp 6-7, giật cấp 8-9.
                            Ngày và đêm 29/1, khu vực Bắc và giữa Biển Đông (bao gồm cả vùng biển Hoàng Sa); khu vực phía
                            Tây của Nam Biển Đông (bao gồm vùng biển phía Tây của Trường Sa) có gió Đông Bắc cấp 6-7, giật
                            cấp 9-10, biển động mạnh, sóng biển cao 4-6m. Vùng biển từ Đà Nẵng đến Cà Mau có gió Đông Bắc
                            cấp 6-7, giật cấp 8-9, biển động mạnh, sóng biển cao 3-5,5m.</p>




                        <p> Ngày và đêm 30/1, khu vực Bắc và giữa Biển Đông (bao gồm vùng biển Hoàng Sa) và vùng biển phía
                            Tây của khu vực Nam Biển Đông (bao gồm vùng biển phía Tây của Trường Sa), vùng biển từ Đà Nẵng
                            đến Cà Mau gió Đông Bắc mạnh cấp 6, có lúc cấp 7, giật cấp 8-9, biển động mạnh; sóng biển cao
                            4-6m, riêng khu vực Đà Nẵng đến Cà Mau sóng biển cao 3-6m.</p>

                        <figure class="body-img2">
                            <img src="images/pexels-photo-9541875.webp" alt="pm" />
                        </figure>

                        <p>Các tỉnh từ Thanh Hóa đến Thừa Thiên - Huế phía Bắc (Thanh Hóa và Nghệ An) ít mây, ngày nắng, đêm
                            không mưa; phía Nam nhiều mây, ngày có mưa rải rác, đêm có mưa vài nơi. Gió Bắc đến Tây Bắc cấp
                            3. Trời rét, phía Bắc có nơi rét đậm. Nhiệt độ thấp nhất 10-13 độ C, phía Nam 12-15 độ C. Nhiệt
                            độ cao nhất 17-20 độ C. </p>


                        <p> Các tỉnh, thành phố từ Đà Nẵng đến Bình Thuận phía Bắc nhiều mây, ngày có mưa, mưa rào rải rác,
                            đêm có mưa vài nơi; phía Nam có mây, ngày nắng, đêm có mưa rào vài nơi. Gió Đông Bắc cấp 3; vùng
                            ven biển cấp 4-5, có nơi có gió giật mạnh cấp 6-7. Phía Bắc trời rét. Nhiệt độ thấp nhất 16-19
                            độ C, phía Nam 20-23 độ C. Nhiệt độ cao nhất 19-22 độ C, phía Nam 25-28 độ C, có nơi trên 28 độ
                            C. </p>

                        <p>Nam Bộ ngày nắng, đêm có mưa vài nơi. Gió Đông Bắc đến Đông cấp 3. Sáng sớm và đêm trời lạnh. Nhiệt độ thấp nhất 20-23 độ C, miền Đông có nơi dưới 20 độ C. Nhiệt độ cao nhất 27-30 độ C, có nơi trên 30 độ C./. </p>


                    </div>

                    <div class="col-lg-4">
                        <div class="category-div pt-3">
                            <h2> Topics </h2>
                            <ul class="list-unstyled mt-4">
                                <li>
                                    <a href="#"> <i class="fas fa-caret-right"></i> Tin tức & Nổi bật </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fas fa-caret-right"></i> Thiên văn </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fas fa-caret-right"></i> Tin nổi tiếng</a>
                                </li>

                            </ul>
                        </div>

                        <div class="resent-ct-new mt-5">
                            <h2> Bảng tin nổi bật </h2>
                            <a href="#" class="top-news">

                                <h5 class="text-white"> 
                                    Thời tiết bắc bộ
                                    <span class="d-block">
                                        2 days ago
                                    </span>
                                </h5>
                                <figure class="m-0">
                                    <img src="images/pexels-adhitya-andanu-1561806.jpg" alt="ban" />
                                </figure>
                            </a>
                            <a href="#" class="top-news">

                                <h5 class="text-white">
                                    Thời tiết trung bộ
                                    <span class="d-block">
                                        1 days ago
                                    </span>
                                </h5>
                                <figure class="m-0">
                                    <img src="images/pexels-marcin-gierbisz-1125212.jpg" alt="ban" />
                                </figure>
                            </a>

                            <a href="#" class="top-news">

                                <h5 class="text-white">
                                    Thời tiết nam bộ
                                    <span class="d-block">
                                        3 days ago
                                    </span>
                                </h5>
                                <figure class="m-0">
                                    <img src="images/pexels-yuting-gao-1557547.jpg" alt="ban" />
                                </figure>
                            </a>
                            <a href="#" class="top-news">

                                <h5 class="text-white">
                                    Thiên văn học
                                    <span class="d-block">
                                        2 days ago
                                    </span>
                                </h5>
                                <figure class="m-0">
                                    <img src="images/pexels-photo-2426546.jpg" alt="ban" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>





            </div>
        </div>








    </section>
@endsection
