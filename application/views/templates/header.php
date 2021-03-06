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
    
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets')?>/vendor/datatables/dataTables.bootstrap4.min.css">
    <link href="<?= base_url('assets') ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <script src="<?= site_url('assets') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= site_url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    
    


    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

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
         background-color: #445963 !important;
         background-image: linear-gradient(180deg, #445963 10%, #253137 100%);
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
     .bottom-right-toast{
            bottom: 20px;
            right: 10px;
        }
        
        .toast-body{
            border-left: 4px solid #111212;
            color: #1c1c1b;
        }
        .cek{
            margin-top: 10px;
            position: absolute;
            font-size: 30px;
            color: #171717;
        }
        .message-j strong{
            font-size: 18px;
            margin-top: -5px!important;
            margin-bottom: -6px;
            margin-left:  44px!important;
        }
        .message-i{
            margin-left: 43px;
            margin-bottom: -6px;
        }
        .toast{
            margin: 0 auto;
            position: fixed;
            z-index: 9999;
            margin-left: 82%;
            width: 16.5%;
            margin-top: 5%;
            transition: all 1s ;
            background-color: white!important;

        }
        
         
</style>


</head>

<body id="page-top">


    <body id="page-top ">
    <?php if($this->session->flashdata('pesan')){ ?>
                    <div class="toast d-flex align-items-center text-black bg-light border-0 mb-5 mr-4" role="alert" aria-live="assertive" aria-atomic="true">
                              <div class="toast-body message-j">
                                <i class="fas fa-check cek"></i><strong id="message-j">web kuu</strong>

                            <p class="message-i" style="">Sukses Tambah Data</p>
                          </div>
                          
                        </div>
                </div>
        <?php }else if($this->session->flashdata('edit_pesan')){ ?>
        <div class="toast d-flex align-items-center text-black bg-light border-0 mb-5 mr-4" role="alert" aria-live="assertive" aria-atomic="true">
                              <div class="toast-body message-j">
                                <i class="fas fa-check cek"></i><strong id="message-j">web kuu</strong>

                            <p class="message-i" style="">Sukses Edit Data</p>
                          </div>
                          
                        </div>
                </div>
<?php }else if($this->session->flashdata('hapus_pesan')){ ?>
    <div class="toast d-flex align-items-center text-black bg-light border-0 mb-5 mr-4" role="alert" aria-live="assertive" aria-atomic="true">
                              <div class="toast-body message-j">
                                <i class="fas fa-check cek"></i><strong id="message-j">web kuu</strong>

                            <p class="message-i" style="">Sukses Hapus Data</p>
                          </div>
                          
                        </div>
                </div>
<?php } else if($this->session->flashdata('login')){ ?>
    <div class="toast d-flex align-items-center text-black bg-light border-0 mb-5 mr-4" role="alert" aria-live="assertive" aria-atomic="true">
                              <div class="toast-body message-j">
                                <i class="fas fa-check cek"></i><strong id="message-j">web kuu</strong>

                            <p class="message-i" style="">Berhasil Login</p>
                          </div>
                          
                        </div>
                </div>
<?php } ?>
        <!-- Page Wrapper -->
        <div id="wrapper">