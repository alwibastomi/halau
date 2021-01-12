<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets')?>/vendor/datatables/dataTables.bootstrap4.min.css">
    <link href="<?= base_url('assets') ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- JS -->
    <script type="text/javascript"> var BASE_URL = "<?php echo base_url();?>"; </script>

    <script src="<?= site_url('assets/css/vendors/js/vendor.bundle.addons.js'); ?>"></script>
    <script src="<?= site_url('assets/css/vendors/js/vendor.bundle.base.js'); ?>"></script>
    <script src="<?= site_url('assets/js/off-canvas.js'); ?>"></script>
    <script src="<?= site_url('assets/js/misc.js'); ?>"></script>

    <script src="<?= site_url('assets/js/jquery.dataTables.min.js'); ?>"></script>

    <script src="<?= site_url('assets/js/dataTables.bootstrap4.min.js'); ?>"></script>

    <script src="<?= site_url('assets/js/select2.min.js'); ?>"></script>
    <script src="<?= site_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
    <script src="<?= site_url('assets/js/scripts.js'); ?>"></script>

    <script src="<?= site_url('assets/custom1.js'); ?>"></script>
    <script src="<?= site_url('assets/cus.js'); ?>"></script>
    

    <style type="text/css">
        .bg-gradient-primary{
         background-color: #253137 !important;
         background-image: linear-gradient(180deg, #253137 10%, #253137 100%);
         background-size: cover;
     }
     .tablehead{
        background-color: white;
        color: black;

    }
    .sorting{
        margin-left: -200px;
    }
    .text-center{
        color: black;
        font-weight: 500;
    }
    #tableku_filter{
        width: 80%;
    }
    #tableku_filter input{
        width: 200px;
    }
    .btn-tambah{
        background-color: #404040;
        border-radius: 0 !important;
        border: none;
    }
    .btn-tambah:hover{
        background-color: #050614;
        border-radius: 0 !important;
        border: none;
    }
    .btn-flat{
        border-radius: 0;
    }
    .card h3{
        color: #050614;
        text-align: center;
        font-weight: 500;
       
    }
    .form-group input{
        border-radius: 0;
    }
    .form-group label{
        color: #050614;
        font-weight: 600
    }
    .btn-warning{
        background-color: #404040; 
        border-radius: 0 !important;
        border: none;
    }
    .btn-warning:hover{
        background-color: #050614;
        border-radius: 0 !important;
        border: none;
    }
</style>


</head>

<body id="page-top">


    <body id="page-top ">
    <!-- <?php if($this->session->flashdata('pesan')): ?>
        <div class="position-realetive ">
                <div class="position-absolute bottom-right-toast">
                    <div class="toast d-flex align-items-center text-black bg-light border-0 mb-5 mr-4" role="alert" aria-live="assertive" aria-atomic="true">
                              <div class="toast-body message-j">
                                <i class="fas fa-check cek"></i><strong id="message-j">Jurnalku Book</strong>

                            <p class="message-i">Selamat Datang  <?= $user['nama']?></p>
                          </div>
                          <button type="button" class="btn-close btn-close-black ms-auto me-2 mb-4 mr-2" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                </div>
            </div>
        </div>
        <?php endif ?> -->
        

        <!-- Page Wrapper -->
        <div id="wrapper">