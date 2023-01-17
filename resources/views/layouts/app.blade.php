<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin PhotoSano</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <!-- Favicons -->
  <link href="{{ asset('foto/sano.png') }}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('adminsano/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('adminsano/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('adminsano/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('adminsano/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('adminsano/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('adminsano/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('adminsano/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

  <!-- Template Main CSS File -->
  <link href="{{ asset('adminsano/assets/css/style.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">  
  @yield('css')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">PhotoSano</span>
        
      </a>      
      <i class="bi bi-list toggle-sidebar-btn"></i>

    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">         
        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>          
      </ul>
      <ul>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                 {{ Auth::user()->name }}
             </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                </form>
            </div>
        </li>
      </ul>
    </nav><!-- End Icons Navigation -->    
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link " href="{{ route('agenda') }}">
          <i class="bi bi-menu-button-wide"></i><span>Agenda</span></i>
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link " href="{{ route('pelanggan') }}">
          <i class="bi bi-menu-button-wide"></i><span>Pelanggan</span></i>
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link " href="{{ route('pengeluaran') }}">
          <i class="bi bi-menu-button-wide"></i><span>Pengeluaran</span></i>
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Foto</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('wedding') }}">
              <i class="bi bi-circle"></i><span>Foto Wedding</span>
            </a>
          </li>
          <li>
            <a href="{{ route('potrait')}}">
              <i class="bi bi-circle"></i><span>Foto Potrait</span>
            </a>
          </li>
          <li>
            <a href="{{ route('studio')}}">
              <i class="bi bi-circle"></i><span>Foto Studio</span>
            </a>
          </li>
          <li>
            <a href="{{ route('komersial')}}">
              <i class="bi bi-circle"></i><span>Foto Komersial</span>
            </a>
          </li>
          <li>
            <a href="{{ route('cosplay')}}">
              <i class="bi bi-circle"></i><span>Foto Cosplay</span>
            </a>
          </li>
          <li>
            <a href="{{ route('group')}}">
              <i class="bi bi-circle"></i><span>Foto Group</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->      
    </ul>

  </aside><!-- End Sidebar-->
    <main id="main" class="main">
                <div class="container-fluid">
                    @yield('content')
                </div>
    </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>PS</span></strong>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('adminsano/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('adminsano/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('adminsano/assets/vendor/chart.js/chart.min.js') }}"></script>
  <script src="{{ asset('adminsano/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('adminsano/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('adminsano/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('adminsano/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('adminsano/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('adminsano/assets/js/main.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
    $.ajaxSetup({
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });
    
    @if (Session::has('message') && Session::get('status') == 'success')
        @if (Session::get('status') == 'success')
        swal("Success","{{Session::get('message')}}","success")
        @else
            swal("Success","{{Session::get('message')}}","error")
        @endif
    @endif
  </script>
    

</body>

</html>