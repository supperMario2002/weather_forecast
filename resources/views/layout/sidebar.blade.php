<a class="navbar-brand" href="index.html">
    <img src="{{asset('images/logo.png')}}" alt="logo" />
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobile-menu">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('news')}}">News</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('map')}}">Map</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="photo.html">Photo</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
        </li>
    </ul>
</div>

<div class="right-menu-sec col-lg-1">
    <ul class="list-unstyled d-flex m-0 align-items-center justify-content-end">
        <li class="d-none d-md-block">
            <a data-bs-toggle="modal" data-bs-target="#loginModal" class="btn login-btn">
                Login
            </a>
        </li>
    </ul>
</div>