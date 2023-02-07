<a class="navbar-brand" href="index.html">
    <img src="{{ asset('images/logo.png') }}" alt="logo" />
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobile-menu">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Trang chủ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('news') }}">Tin tức</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('map') }}">Bản đồ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Liên hệ</a>
        </li>
        <li class="nav-item">
            <form action="{{route('home')}}" method="get">
                <div class="input-group input-search-location">
                    <input type="search" class="form-control rounded" name="search_name" id="search-location" placeholder="Nhập tên các tỉnh thành ..." />
                    <input type="hidden" name="search_request" id="search-request">
                    <button type="submit" class="btn btn-search">Tìm kiếm</button>
                </div>
                <div class="data-search">
                    <ul id="data-search">
                    </ul>
                </div>
            </form>
        </li>
    </ul>
</div>

@push('after-js')
<script>
    $("#data-search").hide();
    $("#search-location").focus(function() {
        $('#data-search').show();
    })
    $.ajax({
        type: "GET"
        , url: "https://vn-public-apis.fpo.vn/provinces/getAll?limit=-1"
        , dataType: "json"
        , success: function(response, keywords) {
            $('#search-location').on('keyup', function() {
                var keywords = $(this).val();
                $("#search-location").val(keywords);
                keywords = changKeyWordTokeywords(keywords);
                $("#search-request").val(keywords);
                var results = response.data.data.filter(item => item.slug.includes(keywords));
                const boxSearch = $('#data-search');
                boxSearch.html('');
                if (keywords.length > 0) {
                    results.forEach(element => {
                        boxSearch.append(`<li class="provinces" id="${element.slug}">${element.name}</li>`)
                    });
                }

                var provinces = $(".provinces");
                provinces.click(function() {
                    console.log(this.innerHTML);
                    $("#search-location").val(this.innerHTML);
                    $("#search-request").val(this.id);
                    $("#data-search").hide();
                })
            });
        }
    });

</script>
@endpush

