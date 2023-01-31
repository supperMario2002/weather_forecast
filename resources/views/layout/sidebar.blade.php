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
  <!-- login Modal -->
  <div class="modal fade login-div-modal" id="loginModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"></div>
        <div class="modal-body">
          <div id="login-td-div" class="com-div-md">
            <span class="text-center d-table m-auto user-icon">
              <i class="fas fa-user-circle"></i>
            </span>
            <h5 class="text-center mb-3">Sign In</h5>
            <button type="button" class="close" data-bs-dismiss="modal">
              <span aria-hidden="true">×</span>
            </button>
            <div class="login-modal-pn">
              <div class="cm-select-login mt-3">
                <div class="country-dp">
                  <input type="email" class="form-control" placeholder="Username Or Email" />
                </div>
                <div class="phone-div">
                  <input type="password" class="form-control" placeholder="Password" />
                </div>
              </div>

              <button class="btn continue-bn">
                <i class="fas fa-lock"></i> SIGN IN
              </button>
            </div>

            <p class="text-center mt-3">
              <a data-bs-toggle="modal" class="regster-bn" data-bs-target="#lostpsModal" data-bs-dismiss="modal">
                Lost Password ?
              </a>
            </p>

            <p class="text-center mt-3">
              Do not have an account?
              <a data-bs-toggle="modal" class="regster-bn" data-bs-target="#registerModal" data-bs-dismiss="modal">
                Register
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- register Modal -->

  <div class="modal fade login-div-modal" id="registerModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"></div>
        <div class="modal-body">
          <div class="com-div-md">
            <span class="text-center d-table m-auto user-icon">
              <i class="fas fa-user-circle"></i>
            </span>
            <h5 class="text-center mb-3">Register</h5>
            <button type="button" class="close" data-bs-dismiss="modal">
              <span aria-hidden="true">×</span>
            </button>
            <div class="login-modal-pn">
              <div class="cm-select-login mt-3">
                <div class="country-dp">
                  <input type="text" class="form-control" placeholder="Full Name" />
                </div>
                <div class="phone-div">
                  <input type="email" class="form-control" placeholder="Email or Phone Number" />
                </div>
                <div class="phone-div">
                  <input type="password" class="form-control" placeholder="Create Password" />
                </div>
                <div class="phone-div">
                  <input type="password" class="form-control" placeholder="Confirm Password" />
                </div>

                <div class="forget2 mt-3 ml-3 d-flex justify-content-between">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                  <label class="form-check-label" for="exampleCheck1">
                    By clicking Register, you agree to our Terms of Use and
                    Cookie Policy</label>
                </div>
              </div>

              <button class="btn continue-bn">Register</button>
            </div>

            <p class="text-center mt-3">
              Do not have an account?
              <a data-bs-toggle="modal" class="regster-bn" data-bs-target="#loginModal" data-bs-dismiss="modal">
                Login
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- lost password -->

  <div class="modal fade login-div-modal" id="lostpsModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"></div>
        <div class="modal-body">
          <div>
            <div class="com-div-md">
              <span class="text-center d-table m-auto user-icon">
                <i class="fas fa-user-circle"></i>
              </span>
              <h5 class="text-center mb-3">Forget Your Password?</h5>
              <button type="button" class="close" data-bs-dismiss="modal">
                <span aria-hidden="true">×</span>
              </button>
              <div class="login-modal-pn">
                <p>We'll email you a link to reset your password</p>
                <div class="cm-select-login mt-3">
                  <div class="phone-div">
                    <input type="email" class="form-control" placeholder="Enter Your Email " />
                  </div>
                </div>

                <button class="btn continue-bn">
                  Send Me a password reset Link
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
