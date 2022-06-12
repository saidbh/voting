<!-- TOP Nav Bar -->
<div class="iq-top-navbar">
  <div class="iq-navbar-custom">
    <div class="iq-sidebar-logo">
      <div class="top-logo">
        <a href="{{ route('admin.dashboard') }}" class="logo">
          <img src="{{ asset('assets/images/logo.jpg') }}" class="img-fluid" alt="">
          <span>Vote</span>
        </a>
      </div>
    </div>
    <div class="navbar-breadcrumb">
      <h5 class="mb-0">
        Dashboard
{{--        @if(Session::has('user_type')) <sup class="text-danger">{{Session::get('user_type')}}</sup> @endif--}}
{{--        @if(Session::has('user_agency_name')) <sup class="text-success">{{Session::get('user_agency_name')}}</sup> @endif--}}
{{--        @if(Session::has('user_department_name')) <sup class="text-primary">{{Session::get('user_department_name')}}</sup> @endif--}}
      </h5>
      {{-- <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ul>
      </nav> --}}
    </div>
    <nav class="navbar navbar-expand-lg navbar-light p-0">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="ri-menu-3-line"></i>
      </button>
      <div class="iq-menu-bt align-self-center">
        <div class="wrapper-menu">
          <div class="line-menu half start"></div>
          <div class="line-menu"></div>
          <div class="line-menu half end"></div>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto navbar-list">
          <li class="nav-item">
{{--             <a class="search-toggle iq-waves-effect" href="#"><i class="ri-search-line"></i></a>
 --}}            <form action="#" class="search-box">
{{--               <input type="text" class="text search-input" placeholder="Type here to search..." />
 --}}            </form>
          </li>
          <li class="nav-item dropdown">
{{--             <a href="#" class="search-toggle iq-waves-effect"><i class="ri-mail-line"></i></a>
 --}}            <div class="iq-sub-dropdown">
              <div class="iq-card shadow-none m-0">
                <div class="iq-card-body p-0 ">
                  <div class="bg-primary p-3">
                    <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                  </div>
                  <a href="#" class="iq-sub-card">
                    <div class="media align-items-center">
                      <div class="">
                        <img class="avatar-40 rounded" src="{{ asset('assets/images/user/01.jpg') }}" alt="">
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="mb-0 ">Nik Emma Watson</h6>
                        <small class="float-left font-size-12">13 Jun</small>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="iq-sub-card">
                    <div class="media align-items-center">
                      <div class="">
                        <img class="avatar-40 rounded" src="{{ asset('assets/images/user/02.jpg') }}" alt="">
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                        <small class="float-left font-size-12">20 Apr</small>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="iq-sub-card">
                    <div class="media align-items-center">
                      <div class="">
                        <img class="avatar-40 rounded" src="{{ asset('assets/images/user/03.jpg') }}" alt="">
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="mb-0 ">Why do we use it?</h6>
                        <small class="float-left font-size-12">30 Jun</small>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="iq-sub-card">
                    <div class="media align-items-center">
                      <div class="">
                        <img class="avatar-40 rounded" src="{{ asset('assets/images/user/04.jpg') }}" alt="">
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="mb-0 ">Variations Passages</h6>
                        <small class="float-left font-size-12">12 Sep</small>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="iq-sub-card">
                    <div class="media align-items-center">
                      <div class="">
                        <img class="avatar-40 rounded" src="{{ asset('assets/images/user/05.jpg') }}" alt="">
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                        <small class="float-left font-size-12">5 Dec</small>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </li>
          {{-- <li class="nav-item">
            <a href="#" class="iq-waves-effect"><i class="ri-shopping-cart-2-line"></i></a>
          </li> --}}
          <li class="nav-item">
{{--             <a href="#" class="search-toggle iq-waves-effect"><i class="ri-notification-2-line"></i></a>
 --}}            <div class="iq-sub-dropdown">
              <div class="iq-card shadow-none m-0">
                <div class="iq-card-body p-0 ">
                  <div class="bg-danger p-3">
{{--                     <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
 --}}                  </div>
                </div>
              </div>
            </div>
          </li>
{{--           <li class="nav-item iq-full-screen"><a href="#" class="iq-waves-effect" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a></li>
 --}}        </ul>
      </div>
      <ul class="navbar-list">
        <li>
          <a href="#" class="search-toggle iq-waves-effect bg-primary text-white"><img src="{{ asset('assets/images/user/1.jpg') }}" class="img-fluid rounded" alt="user"></a>
          <div class="iq-sub-dropdown iq-user-dropdown">
            <div class="iq-card shadow-none m-0">
              <div class="iq-card-body p-0 ">
                <div class="bg-primary p-3">
                  <h5 class="mb-0 text-white line-height">Bonjour {{auth()->user()->first_name.' '.auth()->user()->last_name}}</h5>
                  <span class="text-white font-size-12">Disponible</span>
                </div>

                <div class="d-inline-block w-100 text-center p-3">
                  <a class="iq-bg-danger iq-sign-btn" href="{{route('admin.logout')}}" role="button">Déconnexion<i class="ri-login-box-line ml-2"></i></a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!-- TOP Nav Bar END -->
