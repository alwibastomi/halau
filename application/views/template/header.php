<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="<?= site_url('assets/images/navlogo.png'); ?>" />
  <link rel="icon" type="image/png" href="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title><?= $title; ?></title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
  name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="<?= site_url('assets/lpage/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?= site_url('assets/lpage/css/paper-kit.css'); ?>">
  <link rel="stylesheet" href="<?= site_url('assets/sweetalert/sweetalert.css'); ?>">

  <script src="<?= site_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
  <script src="<?= site_url('assets/cus.js'); ?>"></script>

  <style>
    /* Input field */
    .select2-selection__rendered {
      color: #4d4d4d !important;
      font-weight: 400 !important;
    }
    /* Around the search field */
    .select2-search {
      color: #4d4d4d !important;
      font-weight: 400 !important;
    }
    /* Search field */
    .select2-search input {
      color: #4d4d4d !important;
      font-weight: 400 !important;
    }
    /* Each result */
    .select2-results {
      color: #4d4d4d !important;
      font-weight: 400 !important;
    }
    /* Higlighted (hover) result */
    .select2-results__option--highlighted {
      color: #4d4d4d !important;
      font-weight: 400 !important;
    }
    /* Selected option */
    .select2-results__option[aria-selected=true] {
      color: #4d4d4d !important;
      font-weight: 400 !important;
    }
    #s2, #s3, #s4, #s5, #s6{
      display: none;
    }
    .select2-selection__rendered {
      line-height: 33px !important;
      font-size: 15px !important;
      border-color: transparent !important;
    }
    .select2-container .select2-selection--single {
      height: 37px !important;
    }
    .select2-selection__arrow {
      height: 40px !important;
    }
    .select2-results__option { 
      font-size: 14px !important;
    }
    #regis{
      background-image: url('assets/lpage/img/bgpenline.png'); 
      background-size: 69%; background-repeat: no-repeat; background-position: center; background-position-y: 50%;
    }
    @media (max-width: 575.98px) {
      #bgne{
        background-repeat: no-repeat;
        background-position: 76%;
      }
      #imgne{
        width: 90% !important;
        margin-top: 110px !important;
        margin-left: auto;
        margin-right: auto;
        display: block;
      }
      #dsosia{
        display: none;
      }
      #text1{
        font-size: 30px;
        text-align: center !important;
      }
      #text2{
        text-align: center !important;
        display: none;
      }
      #text3{
        display: none;
        text-align: center !important;
      }
      #btn-daftar{
        margin: 0 auto;
        display: block;
        margin-top: 10px;
      }
      #alr1{
        font-size:
        25px;
      }
      #alur{
        margin-top: -10px;
      }
      #alur2{
        margin-top: -20px;
      }
      #alur-txt1{
        margin-top: 25px;
      }
      #alur-txt2{
        margin-top: 25px;
      }
      #deskripsi{
        margin-top: -30px;
      }
      #deskripsi2{
        text-align: justify !important;
      }
      #regis{
        background-size: 0px;
        background-position-x: 70% !important;
        background-position-y: 20% !important;
      }
    }
    
    @media (min-width: 576px) and (max-width: 767.98px) { 
      #bgne{
        background-repeat: no-repeat;
        background-position-x: 84% !important;
        background-position-y: 45% !important;
        background-size: 1000px;
      }
      #imgne{
        display: none;
        width: 80% !important;
        margin-top: 100px !important;
        margin-left: auto;
        margin-right: auto;
        display: block;
      }
      #dsosia{
        display: none;
      }
      #text1{
        font-size: 30px;
        margin-top: 50px;
        text-align: right !important;
      }
      #text2{
        text-align: right !important;
      }
      #text3{
        display: none;
      }
      #btn-daftar{
        margin-left: auto;
        display: block;
      }
      #alur{
        margin-top: -10px;
      }
      #alur2{
        margin-top: -50px;
      }
      #alur-txt1{
        margin-top: 25px;
      }
      #alur-txt2{
        margin-top: 25px;
      }
      #deskripsi{
        margin-top: -30px;
      }
      #regis{
        background-size: 100% !important;
        background-position-x: 50% !important;
        background-position-y: 80% !important;
      }
    }
    @media (min-width: 768px) and (max-width: 991.98px) { 
      #bgne{
        background-repeat: no-repeat;
        background-position-x: 84% !important;
        background-position-y: 45% !important;
        background-size: 2000px;
      }
      #imgne{
        display: none;
        width: 90% !important;
        margin-top: 100px !important;
        margin-left: auto;
        margin-right: auto;
        display: block;
        margin-top: -10px !important;
      }
      #regis{
        background-size: 100% !important;
        background-position-x: 50% !important;
        background-position-y: 90% !important;
      }
    }
    @media (min-width: 992px) and (max-width: 1199.98px) {
      #bgne{
        background-repeat: no-repeat;
        background-position-x: 84% !important;
        background-position-y: 45% !important;
        background-size: 2500px;
      }
      #imgne{
        display: none;
        width: 100% !important;
        margin-top: 130px !important;
        margin-left: auto;
        margin-right: auto;
        display: block;
      }
      #dsosia{
        display: none;
      }
      #regis{
        background-size: 90% !important;
        background-position-x: 50% !important;
        background-position-y: 60% !important;
      }
    }
    @media (min-width: 1200px) { 
      #bgne{
        background-repeat: no-repeat;
        background-position-x: 84% !important;
        background-position-y: 45% !important;
        background-size: 170%;
      }
    }
    @media (min-width: 1469px) {
      #regis{
        background-size: 65% !important;
        background-position-x: 50% !important;
        background-position-y: 50% !important;
      }
    }

    .btn-ijo{
      background-color: white;
      border-color: #53bedb;
      color:#53bedb;
    }
    .btn-ijo:hover{
      background-color: #53bedb;
      border-color: #53bedb;
    }
    .btn-ijo:focus{
      background-color: #80bf41;
      border-color: #80bf41;
    }
    .nav-link:hover{
      color: #53bedb !important;
    }
    .nav-link:focus{
      color: #53bedb !important;
    }
    .kotak-iklan{ background : #ddd; text-align : center; border-radius : 4px; padding : 1px; }
    .kotak-iklan img { background : #ebf5f9; margin : auto; text-align : center; width : 100%; height : 80px; }
    .kotak-iklan img:hover { background : #fff; }

    .main_blog_details .user_details {
      overflow: hidden;
      margin-bottom: 30px;
    }

    .sti {
      z-index: 1999;
      width: 100%;
      position: fixed;
      left: 0;
      bottom: -90px;
      background-color: #007ea7;
      background-image: linear-gradient(315deg, #007ea7 0%, #80ced7 74%);
      height: 60px;
      transition: all .3s ease-in-out;
      padding: 10px;
      -webkit-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.4);
      -moz-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.4);
      box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.4);
      border-left: 10px solid #41beae;
      font-family: 'Raleway';
      /*display: none;*/
    }

    .papa{
      transition: .2s;
      opacity: 0;
    }

/*    .sticky {
      display: inline-block;
      z-index: 1;
      animation:slide-down 0.5s;
      position: fixed;
      bottom: 0;
      width: 100%;
    }


    @keyframes slide-down {
      0% {
        opacity: 0;
        transform: translateY(100%);
      }
      100% {
        opacity: 0.6;
        transform: translateY(0);
      }
      }*/

      .stiki{
        font-size: 20px !important;
        line-height: 1.3em !important;
        display: block;
        margin: auto;
        margin-top: 20px!important;
        /*padding: 10px;*/
        max-width: 500px;
        margin: auto!important;
        text-align: center;
        color: #FFF!important;
        font-weight: 700;
        letter-spacing: .5px;
      }

      @media screen and (max-width: 845px){
        #lolo{
          display: none;
        }
        .stiki{
          font-size: 50px;
        }
      }
      @media screen and (max-width: 768px){
        #lolo{
          display: none;
        }
        .sticky {
          z-index: 1999;
          padding-top: 5px;
          width: 100%;
          position: fixed;
          left: 0;
          height: 70px;
          transition: all .3s ease-in-out;
        }

        .stiki{
          font-size: 15px !important;
        }
      }

      @media screen and (max-width: 1140px){
        #lolo{
          display: none;
        }
      }

      #lolo{
        height: 70%;
        width: 25%;
        margin-top: 20px;
        position: fixed;
      }

      /*.navbar-brand:hover{
        opacity: 0.6;
        text-shadow: 5px 5px 5px;
        transition: .2s;
        }*/

      </style>
    </head>

    <body class="index-page sidebar-collapse">

      <!-- navbar  -->
      <!-- <nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="5" id="navresponsive"> -->
        <nav class="navbar navbar-expand-lg" id="navresponsive">
          <div class="container">
            <div class="navbar-translate">
              <a class="navbar-brand" href="<?= site_url('L_Page') ?>" rel="tooltip" style="color: rgb(77, 77, 77) !important; font-size: 30px;">
                Nama Website
              </a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
              aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" style="color: black">
              <span class="navbar-toggler-bar bar1" style="color: black !important"></span>
              <span class="navbar-toggler-bar bar2" style="color: black !important"></span>
              <span class="navbar-toggler-bar bar3" style="color: black !important"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">

                <!-- <li class="nav-item">
                <a href="<?= site_url('L_Page') ?>" style="color: grey;" class="nav-link">Home</a>
              </li> -->
              <?php foreach ($nav as $lala) {
                if ($lala->pakai == '1') { ?>
                  <li class="nav-item">
                    <a href="<?= site_url('L_Page/Menu/'.$lala->menu) ?>" style="color: grey;" class="nav-link"><?= $lala->menu ?></a>
                  </li>
                <?php } } ?>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
          <div class="sti" id="lala" style="bottom: 0;">
            <div class="row">
              <!-- <div class="col-md-6 text-right">
                <p class="stiki">We’ll increase your conversions by by by by</p>
              </div> -->
              <div class="col-md-12 text-center">
                <!-- <a href="#" class="btn btn-warning"  style="width: 80%; color: black">CLAIM YOUR FREE AUDIT NOW</a> -->
                <?php if (!empty($iklan5->place)) {
                  echo $iklan5->script_js;
                }else{
                  echo "Ini iklan 1.5";
                }
                ?>
              </div>
            </div>
          </div>