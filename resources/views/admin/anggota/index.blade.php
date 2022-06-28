<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin IPMY Yogyakarta | Data Anggota</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/admin/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/dist/css/cssanggota.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/summernote/summernote-bs4.min.css')}}">
  <!-- fontawesome v5 -->
  <script src="https://kit.fontawesome.com/72bfe7a45e.js" crossorigin="anonymous"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

      <!-- SEARCH FORM -->
    <form class="form-inline ml-3" method="get" action="/home/anggota/cari" enctype="multipart/form-data">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Cari" aria-label="Search" name="search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout" role="button" onclick="return confirm('Ingin Log Out ?')">
        <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="{{asset('assets/admin/dist/img/hmjti.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin WEB IPMY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/admin/dist/img/profiladmin.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Halo Admin !</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <!-- Dashbord -->
          <li class="nav-item">
            <a href="/home" class="nav-link">
            <i class="nav-icon fas fa-columns"></i>
              <p>
                Dashbord
              </p>
            </a>
          </li>
          <!-- / Dashbord -->

          <!-- Data Anggota -->
          <li class="nav-item">
            <a href="/home/anggota" class="nav-link active">
            <i class="fas fa-user-friends nav-icon"></i>
              <p>
                Data Anggota
              </p>
            </a>
          </li>
          <!-- / Data Anggota -->

          <!-- Data Kegiatan -->
          <li class="nav-item">
            <a href="/home/kegiatan" class="nav-link">
            <i class="fas fa-chart-line nav-icon"></i><i class=""></i>
              <p>
                Data Kegiatan
              </p>
            </a>
          </li>
          <!-- / Data Kegiatan -->

          <!-- Data Informasi Organisasi -->
          <li class="nav-item">
            <a href="/home/organisasi" class="nav-link">
            <i class="fas fa-sitemap nav-icon"></i>
              <p>
                Data Organisasi
              </p>
            </a>
          </li>
          <!-- / Data Informasi Organisasi -->

          <!-- Data Struktur Organisasi -->
          <li class="nav-item">
            <a href="/home/struktur" class="nav-link">
            <i class="fas fa-sitemap nav-icon"></i>
              <p>
                Data Struktur Organisasi
              </p>
            </a>
          </li>
          <!-- / Data Struktur Organisasi -->

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" >Selamat Datang !!!</h1>
            <h5 class="m-0" style="font-weight:10;">Dihalaman Admin Web IPMY</h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                 <strong>{{ $message }}</strong>
                </div>
                @endif

                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                 <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
                </div>
                @endif
                <a href="/home/anggota/tambah" class="btn btn-success">Tambah </a>
                <a href="/home/anggota/cetak" class="btn btn-primary">Cetak </a>
        </br></br>

        <div class="card">
          <div class="card-body">
                  <table>
                    <thead>
                      <tr style="text-align: center;">
                        <th>No</th>
                        <th>Foto Anggota</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($anggota as $ang)
                      <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td style="width:13%;"><a href="{{asset('foto_anggota/'.$ang->foto_anggota) }}"><img id="myImg" src="{{asset('foto_anggota/'.$ang->foto_anggota) }}" style='width:140px; height:160px;'></a></td>
                      <td>
                      Nomor Keanggotaan : {{ $ang->id_anggota }}<br/>
                      Nama : {{ $ang->nama_anggota }}<br/>
                      Status Di Jogja : {{ $ang->status_di_jogja }}<br/>
                      Alamat Asal : {{ $ang->alamat_tinggal }}<br/>
                      Alamat Domisili : {{ $ang->alamat_domisili }}<br/>
                      Email : {{ $ang->email }}<br/>
                      Nomor Telpon : {{ $ang->nomor_telepon }}<br/>
                      Motto : {{ $ang->motto }}<br/>
                      Status Aktif : {{ $ang->status_aktif }}<br/>
                      Jabatan : {{ $ang->struktur->nama_jabatan }}
                      </td>
                      <td>
                        <a href="/home/anggota/edit/{{ $ang->id }}" class="btn btn-warning" style="width:100%;">Edit </a></br></br>
                        <a href="/home/anggota/hapus/{{ $ang->id }}" class="btn btn-danger" style="width:100%;">Hapus</a>
                      </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                {{ $anggota->links() }}
                </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.Main Content -->

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://www.instagram.com/farizasandaira/" target="_blank">Fariza</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>AdminLTE</b> V 3.1.0-rc
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assets/admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('assets/admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('assets/admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('assets/admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('assets/admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('assets/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/admin/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/admin/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/admin/dist/js/pages/dashboard.js')}}"></script>
</body>
</html>
