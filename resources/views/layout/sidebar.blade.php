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
            <div class="input-group">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-outline-primary">search</button>
            </div>
        </li>
    </ul>
</div>


