<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Datasoft</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/css/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/css/vendors/iconfonts/puse-icons-feather/feather.css">
  <link rel="stylesheet" href="assets/css/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/css/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/font-awesome.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/select2.css">
  <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
 
  <!-- endinject -->
  <link rel="shortcut icon" href="assets/images/logo.jpeg" />
</head>
<body>
    <div class="container-scroller">

    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="home.html" style="color: #2d2d2d">
          DATASOFT
        </a>
           <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu" style="color: white;"></span>
        </button>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, Diki Akbar</span>
                <img class="img-xs rounded-circle"  src="assets/images/logo.jpeg" alt="profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                    <img src="assets/images/logo.jpeg" alt="" style="width: 50%; margin-left: auto; margin-right: auto; margin-top: 5%; margin-bottom: 5%;">
                </div>
              </a>
              <a class="dropdown-item" style="margin-top: 20px;" href="edit_user.html">
                Profil Saya
              </a>
              <a class="dropdown-item" href="login.html">
                 Sign Out
              </a>
            </div>
          </li>
        </ul>
     
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <!-- sidebar -->
          <ul class="nav">
            <li class="nav-item nav-profile">
              <div class="nav-link">
                <div class="user-wrapper">
                  <div class="profile-image">
                    <img src="assets/images/logo.jpeg" alt="profile image">
                  </div>
                  <div class="text-wrapper">
                    <p class="profile-name">Diki Akbar</p>
                    <div>
                      <small class="designation text-muted" style="text-transform: uppercase;letter-spacing: 1px;">Admin</small>
                      <span class="status-indicator online"></span>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item"> 
              <a class="nav-link" href="">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Master Data</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="">Data Anggota</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="">Data User</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <i class="menu-icon mdi mdi-backup-restore"></i>
                <span class="menu-title">Peminjaman</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-laporan" aria-expanded="false" aria-controls="ui-laporan">
                <i class="menu-icon mdi mdi-table"></i>
                <span class="menu-title">Laporan</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-laporan">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="">Laporan Peminjaman</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
      </nav>
      <div class="main-panel">
        <div class="content-wrapper" style="background-color: #e8f4f7;">
          <div class="row">
            <!-- content -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
                    <div class="card card-statistics">
                        <div class="card-body">
                          <div class="clearfix">
                            <div class="float-left">
                              <i class="mdi mdi-poll-box text-danger icon-lg"></i>
                            </div>
                            <div class="float-right">
                              <p class="mb-0 text-right">Data Pemasukan</p>
                              <div class="fluid-container">
                                <h3 class="font-weight-medium text-right mb-0">1</h3>
                              </div>
                            </div>
                          </div>
                          <p class="text-muted mt-3 mb-0">
                            <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Total seluruh pemasukan
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
                      <div class="card card-statistics">
                        <div class="card-body">
                          <div class="clearfix">
                            <div class="float-left">
                              <i class="mdi mdi-receipt text-warning icon-lg"></i>
                            </div>
                            <div class="float-right">
                              <p class="mb-0 text-right">On going</p>
                              <div class="fluid-container">
                                <h3 class="font-weight-medium text-right mb-0">2</h3>
                              </div>
                            </div>
                          </div>
                          <p class="text-muted mt-3 mb-0">
                            <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> sedang proses
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
                      <div class="card card-statistics">
                        <div class="card-body">
                          <div class="clearfix">
                            <div class="float-left">
                              <i class="mdi mdi-account-location text-info icon-lg"></i>
                            </div>
                            <div class="float-right">
                              <p class="mb-0 text-right">Anggota</p>
                              <div class="fluid-container">
                                <h3 class="font-weight-medium text-right mb-0">32</h3>
                              </div>
                            </div>
                          </div>
                          <p class="text-muted mt-3 mb-0">
                            <i class="mdi mdi-account mr-1" aria-hidden="true"></i> Total seluruh anggota
                          </p>
                        </div>
                      </div>
                    </div>
        </div>
        <div class="row" >
          <div class="col-lg-2 mb-4">
            <a href="create_anggota.html" class="btn btn-primary btn-rounded btn-fw">
               Tambah Anggota</a>
          </div>
        <div class="col-lg-12 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <h3 class="text-center">Data Anggota</h3>
                          <br>
                          <div class="table-responsive">
                            <table class="table table-striped" id="table">
                              <thead>
                                <tr>
                                  <th>
                                    Kode
                                  </th>
                                  <th>
                                    Nama
                                  </th>
                                  <th>
                                    Nik
                                  </th>
                                  <th>
                                    Status
                                  </th>
                                  <th>
                                    Action
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                   09113
                                  </td>
                                  <td>
                                    Diki
                                  </td>
                                  <td>
                                    21323123999
                                  </td>
                                  <td>
                                    <label class="badge badge-success">Aktif</label>
                                  </td>
                                  <td>
                                    <div class="btn-group dropdown">
                                      <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                      </button>
                                      <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                          
                                      <form action="" method="post" enctype="multipart/form-data">
                                        <a href="edit_user.html" class="dropdown-item">Detail</a>
                                      </form>
                                        <form action="" class="pull-left"  method="post">
                                        <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete
                                        </button>
                                      </form>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            <!-- content -->
        </div>
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020
           All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <script src="assets/css/vendors/js/vendor.bundle.addons.js"></script>
  <script src="assets/css/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/dashboard.js"></script>
  <script src="assets/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/js/sweetalert2.all.js"></script>
  <script src="assets/js/select2.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#table').DataTable({
        "iDisplayLength": 10
      });
  
  } );
  </script>

</body>

</html>
                         
   