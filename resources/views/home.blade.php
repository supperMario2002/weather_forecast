@extends('layout')

@section('name', 'Trang chủ')

@section('content')
<section class="vh-100" style="background-color: #f5f6f7;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-10 col-lg-8 col-xl-6">

                <div class="card bg-dark text-white" style="border-radius: 40px;">
                    <div class="bg-image" style="border-radius: 35px;">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-weather/draw1.webp" class="card-img" alt="weather" />
                        <div class="mask" style="background-color: rgba(190, 216, 232, .5);"></div>
                    </div>
                    <div class="card-img-overlay text-dark p-5">
                        <h4 class="mb-0">Juneau, Alaska, US</h4>
                        <p class="display-2 my-3">1.28°C</p>
                        <p class="mb-2">Feels Like: <strong>-1.08 °C</strong></p>
                        <h5>Snowy</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="vh-100" style="background-color: #4B515D;">
    <div class="container py-5 h-100">
  
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-8 col-lg-6 col-xl-4">
  
          <div class="card" style="color: #4B515D; border-radius: 35px;">
            <div class="card-body p-4">
  
              <div class="d-flex">
                <h6 class="flex-grow-1">Warsaw</h6>
                <h6>15:07</h6>
              </div>
  
              <div class="d-flex flex-column text-center mt-5 mb-4">
                <h6 class="display-4 mb-0 font-weight-bold" style="color: #1C2331;"> 13°C </h6>
                <span class="small" style="color: #868B94">Stormy</span>
              </div>
  
              <div class="d-flex align-items-center">
                <div class="flex-grow-1" style="font-size: 1rem;">
                  <div><i class="fas fa-wind fa-fw" style="color: #868B94;"></i> <span class="ms-1"> 40 km/h
                    </span></div>
                  <div><i class="fas fa-tint fa-fw" style="color: #868B94;"></i> <span class="ms-1"> 84% </span>
                  </div>
                  <div><i class="fas fa-sun fa-fw" style="color: #868B94;"></i> <span class="ms-1"> 0.2h </span>
                  </div>
                </div>
                <div>
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-weather/ilu1.webp"
                    width="100px">
                </div>
              </div>
  
            </div>
          </div>
  
        </div>
      </div>
  
    </div>
  </section>
@endsection

