{{--  <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Talk') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>
<body style="background-color: #f0f2f5">
<div class="container" style="margin-top: 10%">
    <div class="row">
        <div class="col-lg-6">
            <b>Talk !</b>
        </div>
        <div class="col-lg-6">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <form action="{{route('login')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="container-fluid">
                        @if (Session::has('error'))
                            <div class="alert alert-danger m-0">{{ Session::get('error') }}</div>
                        @endif
                        @if (Session::has('success'))
                            <div class="alert alert-success m-0">{{ Session::get('success') }}</div>
                        @endif
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary btn-lg btn-block w-100">Log in</button>
                            </div>
                        </div>
                    </form>
                        <div class="row mt-3">
                            <div class="col-lg-12 text-center">
                                <div class="form-group">
                                    <a href="#">Forget your password ?</a>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12 text-center">
                                <button type="button" class="btn btn-success btn-lg btn-block w-50" data-toggle="modal" data-target="#exampleModal">Create account</button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('assets/js/popper.min.js') }} "></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Appear JavaScript -->
<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
<!-- Countdown JavaScript -->
<script src="{{ asset('assets/js/countdown.min.js') }}"></script>
<!-- Counterup JavaScript -->
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<!-- Wow JavaScript -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- Apexcharts JavaScript -->
<script src="{{ asset('assets/js/apexcharts.js') }}"></script>
<!-- Slick JavaScript -->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<!-- Select2 JavaScript -->
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<!-- Owl Carousel JavaScript -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }} "></script>
<!-- Magnific Popup JavaScript -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="{{ asset('assets/js/smooth-scrollbar.js') }} "></script>
<!-- morris chart JavaScript -->
<script src="{{ asset('assets/js/morris.js') }} "></script>
<script src="{{ asset('assets/js/raphael-min.js') }} "></script>
<script src="{{ asset('assets/js/morris.min.js') }} "></script>
<!-- End custom js for this page-->
</body>
</html>
 --}}
 @extends('admin.master')
@section('content')
    <section class="sign-in-page bg-white">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-sm-6 align-self-center">
                    <div class="sign-in-from">
                        @if (Session::has('error'))
                            <div class="alert alert-danger m-0">{{ Session::get('error') }}</div>
                        @endif
                        @if (Session::has('success'))
                            <div class="alert alert-success m-0">{{ Session::get('success') }}</div>
                        @endif
                        <h1 class="mb-0">S'identifier</h1>
                        <p>Entrez votre adresse e-mail et votre mot de passe pour accéder au panneau d'administration.</p>
                            <form action="{{route('login')}}" method="post" enctype="multipart/form-data">
                                @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mot de passe</label>
                            {{-- <a href="{{route('recover')}}" class="float-right">Mot de passe oublié?</a> --}}
                            <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="d-inline-block w-100">
                            <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Se souvenir de moi</label>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">S'identifier</button>
                            </form>
                        </div>
                        <div class="sign-info">
                             <span class="dark-color d-inline-block line-height-2"><a href="#" data-toggle="modal" data-target="#"> Mot de passe oublié </a></span>
                             <div class="modal fade" id="recovery" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Renisialiser mot de passe</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <form action="" method="POST" class="was-validated" enctype="multipart/form-data">
                                        @csrf
                                    <div class="modal-body">
                                      <div class="container">
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <input type="email" class="form-control" id="recovery" name="recovery" required>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                      <button type="submit" class="btn btn-success">Valider</button>
                                    </div>
                                </form>
                                  </div>
                                </div>
                              </div>
                            <ul class="iq-social-media">
                                <li><a href="" target="_blank"><i class="ri-link"></i></a></li>
                                <li><a href="" target="_blank"><i class="ri-facebook-box-line"></i></a></li>
                                <li><a href="" target="_blank"><i class="ri-instagram-line"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 bg-primary text-center">
                    <div class="sign-in-detail text-white" style="background: url({{asset("assets/images/login/1.png")}}) no-repeat 0 0; background-size: cover; min-height:calc(100vh - 55px);">
                        {{-- <a class="sign-in-logo mb-5" href="#"><img src={{asset("assets/images/logo-white.png")}} class="img-fluid" alt="logo"></a> 
                        {{-- <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                          <div class="item">
                            <img src={{asset("assets/images/login/1.png")}} class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                          </div>
                          <div class="item">
                            <img src={{asset("assets/images/login/1.png")}} class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                          </div>
                          <div class="item">
                            <img src={{asset("assets/images/login/1.png")}} class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                          </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .iq-footer{
            margin:0px;
        }
    </style>
@endsection