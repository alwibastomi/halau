<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RPP</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="http://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/vendors/iconfonts/puse-icons-feather/feather.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/select2.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/dataTables.bootstrap4.min.css">
 
  <!-- endinject -->
  <link rel="shortcut icon" href="<?=base_url()?>assets/images/logo.jpeg" />
</head>
<body>
    <div class="container-scroller">

    <!-- navbar -->
    <?php $this->load->view('template/header')?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- sidebar -->
    <?php $this->load->view('template/sidebar')?>
      <div class="main-panel">
        <div class="content-wrapper" style="background-color: #e8f4f7;">
        <!-- content -->
        <?php echo $contents ?>
        </div>
        <!-- footer -->
        <?php $this->load->view('template/footer')?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <script src="<?=base_url()?>assets/css/vendors/js/vendor.bundle.addons.js"></script>
  <script src="<?=base_url()?>assets/css/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?=base_url()?>assets/js/off-canvas.js"></script>
  <script src="<?=base_url()?>assets/js/misc.js"></script>
  <script src="<?=base_url()?>assets/js/template.js"></script>
  <script src="<?=base_url()?>assets/js/jquery.dataTables.min.js"></script>
  <script src="<?=base_url()?>assets/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?=base_url()?>assets/js/sweetalert2.all.js"></script>
  <script src="<?=base_url()?>assets/js/select2.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#table').DataTable({
        "iDisplayLength": 10
      });
  
  } );
  </script>

</body>

</html>
                         
   