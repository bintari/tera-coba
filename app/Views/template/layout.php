<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin Loket Pembayaran</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('') ?>/assets/vendor/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('') ?>/assets/vendor/adminlte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>


<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="<?php base_url('') ?>" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Daftar Tera
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php base_url('') ?>" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Jadwal Pengujian
                </p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content-->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard v3</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v3</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- /.content-header -->
      <?= $this->renderSection('content'); ?>

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">

            <!-- /.col-md-6 -->

            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- </div> -->
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.5
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?= base_url('') ?>/assets/vendor/adminlte/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url('') ?>/assets/vendor/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="<?= base_url('') ?>/assets/vendor/adminlte/dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="<?= base_url('') ?>/assets/vendor/adminlte/plugins/chart.js/Chart.min.js"></script>
  <script src="<?= base_url('') ?>/assets/vendor/adminlte/dist/js/demo.js"></script>
  <script src="<?= base_url('') ?>/assets/vendor/adminlte/dist/js/pages/dashboard3.js"></script>
</body>


</html>