<!doctype html>
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

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
  <!-- Typography CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/typography.css') }}" />
  <!-- Style CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
  <!-- Dragndrop CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/dragndrop.css') }}" />
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

  <link rel="stylesheet" href="{{ asset('assets/css/toast.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/js/toast.min.js') }}" />

  <!-- Full calendar -->
  <link href="{{ asset('assets/fullcalendar/core/main.css') }}" rel='stylesheet' />
  <link href="{{ asset('assets/fullcalendar/daygrid/main.css') }}" rel='stylesheet' />
  <link href="{{ asset('assets/fullcalendar/timegrid/main.css') }}" rel='stylesheet' />
  <link href="{{ asset('assets/fullcalendar/list/main.css') }}" rel='stylesheet' />
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.bootstrap4.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/selectize.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/css/bootstrap-select.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/i18n/defaults-*.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
  <script src="https://cdn.datatables.net/plug-ins/1.11.3/i18n/fr_fr.json"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">
  
  <link type="text/css" href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />
<script type="text/javascript" src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>

  {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script> --}}
  {{-- <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script> --}}

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.3/af-2.3.7/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/b-print-2.0.1/cr-1.5.5/date-1.1.1/fc-4.0.1/fh-3.2.0/kt-2.6.4/r-2.2.9/rg-1.1.4/rr-1.2.8/sc-2.0.5/sb-1.3.0/sp-1.4.0/sl-1.3.3/datatables.min.css" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.3/af-2.3.7/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/b-print-2.0.1/cr-1.5.5/date-1.1.1/fc-4.0.1/fh-3.2.0/kt-2.6.4/r-2.2.9/rg-1.1.4/rr-1.2.8/sc-2.0.5/sb-1.3.0/sp-1.4.0/sl-1.3.3/datatables.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  {{-- <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet"> --}}
</head>
<body>
    <div id="app">
            @yield('content')
    </div>
<!-- Optional JavaScript -->
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
<!-- lottie JavaScript -->
<script src="{{ asset('assets/js/lottie.js') }} "></script>
<script src="{{ asset('assets/js/core.js') }}"></script>
<script src="{{ asset('assets/js/charts.js') }}"></script>
<script src="{{ asset('assets/js/animated.js') }}"></script>
<!-- high charts JavaScript -->
<script src="{{ asset('assets/js/highcharts.js') }}"></script>
<script src="{{ asset('assets/js/highcharts-3d.js') }}"></script>
<script src="{{ asset('assets/js/highcharts-more.js') }}"></script>
<!-- fullcalendar JavaScript -->
<script src="{{ asset('assets/fullcalendar/core/main.js') }}"></script>
<script src="{{ asset('assets/fullcalendar/daygrid/main.js') }}"></script>
<script src="{{ asset('assets/fullcalendar/timegrid/main.js') }}"></script>
<script src="{{ asset('assets/fullcalendar/list/main.js') }}"></script>
<!-- bc paint JavaScript -->
<script src="{{ asset('assets/js/bcpaint.js') }}"></script>
<!-- Dragndrop JavaScript -->
<script src="{{ asset('assets/js/dragndrop.js') }}"></script>

<!-- Chart Custom JavaScript -->
<script src="{{ asset('assets/js/chart-custom.js') }} "></script>
<script src="{{ asset('assets/js/jquery-print.js') }} "></script>

<!-- Custom JavaScript -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script> --}}
<script src="https://www.amcharts.com/lib/4/maps.js"></script>
<script src="https://www.amcharts.com/lib/4/geodata/continentsLow.js"></script>
<script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/kelly.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/vfs_fonts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/html-to-pdfmake/browser.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js" integrity="sha256-c9vxcXyAG4paArQG3xk6DjyW/9aHxai2ef9RpMWO44A=" crossorigin="anonymous"></script>

</body>
</html>
