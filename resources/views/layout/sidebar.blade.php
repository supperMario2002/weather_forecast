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
            <div class="input-group input-search-location">
                <input type="search" class="form-control rounded" id="search-location" placeholder="Nhập tên các tình thành ..." />
                <button type="button" class="btn btn-search">Tìm kiếm</button>
            </div>
            <div class="data-search">
                <ul>
                    <li>Xã Kiên thành, Lục ngạn, Bắc giang</li>
                    <li>Xã Kiên thành (Bắc giang)</li>
                    <li>Xã Kiên thành (Bắc giang)</li>
                    <li>Xã Kiên thành (Bắc giang)</li>
                </ul>
            </div>
        </li>
    </ul>
</div>

{{-- @push('after-js')
<script>
    $.ajax({
        type: "GET"
        , url: "https://vn-public-apis.fpo.vn/provinces/getAll?limit=-1"
        , dataType: "json"
        , success: function(response) {
            console.log(response);
        }
    });

</script>
@endpush --}}

