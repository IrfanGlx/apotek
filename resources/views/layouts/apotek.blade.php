<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Apotektek') }}</title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link href="{{ asset('css/apotek/material.css') }}" rel="stylesheet">
  <link href="{{ asset('css/apotek/demo.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">  
</head>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
      -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          <i class="fa fa-medkit fa-lg" aria-hidden="true"></i> Apotektek
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href="{{ route('apotek') }}">
              <i class="material-icons">content_paste</i>
              <p>Master Obat</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="{{ route('tambahobat') }}">
              <i class="material-icons">group</i>
              <p>Master Pengguna</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @yield('content')
  </div>
</div>

<script src="{{ asset('js/apotek/core/jquery.min.js') }}"></script>
<script src="{{ asset('js/apotek/core/popper.min.js') }}"></script>
<script src="{{ asset('js/apotek/core/bootstrap-material-design.min.js') }}"></script>
<script src="{{ asset('js/apotek/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('js/apotek/plugins/moment.min.js') }}"></script>
<script src="{{ asset('js/apotek/plugins/sweetalert2.js') }}"></script>
<script src="{{ asset('js/apotek/plugins/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/apotek/plugins/jquery.bootstrap-wizard.js') }}"></script>
<script src="{{ asset('js/apotek/plugins/bootstrap-selectpicker.js') }}"></script>
<script src="{{ asset('js/apotek/plugins/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('js/apotek/plugins/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/apotek/plugins/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('js/apotek/plugins/jasny-bootstrap.min.js') }}"></script>
<script src="{{ asset('js/apotek/plugins/fullcalendar.min.js') }}"></script>
<script src="{{ asset('js/apotek/plugins/jquery-jvectormap.js') }}"></script>
<script src="{{ asset('js/apotek/plugins/nouislider.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<script src="{{ asset('js/apotek/plugins/arrive.min.js') }}"></script>
<script src="{{ asset('js/apotek/plugins/chartist.min.js') }}"></script>
<script src="{{ asset('js/apotek/plugins/bootstrap-notify.js') }}"></script>
<script src="{{ asset('js/apotek/material-dashboard.js?v=2.1.1') }}" type="text/javascript"></script>
<script src="{{ asset('js/apotek/demo.js') }}"></script>
<script src="{{ asset('js/sidebar.js') }}"></script>
</body>
</html>
