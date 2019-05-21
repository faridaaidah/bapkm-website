<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>BAPKM | Admin Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('adminlte/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/vendors/css/vendor.bundle.addons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('adminlte/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('adminlte/css/select2.css')}}">
  <link rel="stylesheet" href="{{ asset('adminlte/css/dataTables.bootstrap4.min.css')}}">
  @section('css')

  @show
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
</head>
<body>
    <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="/admin" style="color: #2d2d2d">
          BAPKM - ADMIN
        </a>
           <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
          <i class="fa fa-align-justify" style="color: #fff;"></i>
        </button>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">
         
          <li class="nav-item dropdown d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, {{Auth::user()->name}} !</span>
                @if(Auth::user()->gambar == '')
                  <img class="img-xs rounded-circle"  src="{{asset('adminlte/images/user/default.png')}}" alt="profile image">
                @else
                <img class="img-xs rounded-circle"  src="{{asset('adminlte/images/user/'.Auth::user()->gambar)}}" alt="profile image">
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                 
                </div>
              </a>
              <a class="dropdown-item" style="margin-top: 20px;" href="{{route('admin.user.edit', Auth::user()->id)}}">
               Edit Profile
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                 Sign Out

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
              </a>
            </div>
          </li>
        </ul>
     
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      @section('sidebar')
          @include('layouts.sidebar-admin',['user' => Auth::User()])
      @show
      </nav>
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')

        </div>
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © {{date('Y')}}
            <a href="https://gilacoding.com/" target="_blank">BAPKM</a>. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <script src="{{asset('adminlte/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('adminlte/vendors/js/vendor.bundle.addons.js')}}"></script>
  <script src="{{asset('adminlte/js/off-canvas.js')}}"></script>
  <script src="{{asset('adminlte/js/misc.js')}}"></script>
  <script src="{{asset('adminlte/js/dashboard.js')}}"></script>
  <script src="{{asset('adminlte/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('adminlte/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('adminlte/js/sweetalert2.all.js')}}"></script>
  <script src="{{asset('adminlte/js/select2.min.js')}}"></script>

  @section('js')

  @show
</body>

</html>
                         
   