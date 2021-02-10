<?php 
$date = date('Y-m-d');
?>

<style>
   @media screen and (max-width:780px){
      #img{
        padding-left: 1%;
        width: 100%;
        height: 80px;
      }
   }
</style>
<!-- End Body Navbar -->
<div class="container">
  <div class="row">
    <div class="col-xl-4 order-xl-last">
      <div class="kotak-iklan" id="lolo" style="">
        <a href="" title="Pasang Iklan">
          <img alt="iklan banner" style="height: 100%;" src=""/>
        </a>
      </div>
    </div>
    <div class="col-xl-8 order-xl-first mt-4">
      <div class="main_blog_details">
        <div class="row">
          <center><h1>Download File</h1></center>
          <h3>Untuk Mengunduh file pdf silahkan klik pada pojok kanan atas tampilan preview</h3>
          <img id="img" src="<?= site_url('file download.jpg') ?>" alt="" width="700" height="200" >
          <h3>Tampilan Preview RPP</h3>
          <div class="col-md-12">
              <iframe src="<?= site_url('RPP/rpp/'.$id.'/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'/'.$this->uri->segment(6)) ?>" style="width: 100%; height: 500px;"></iframe>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- header  -->

<!-- end header  -->

<!-- alur  -->
<div class="container" id="alur">
  <div class="row">
    <div class="col-md-12 mt-5 text-center">
      <h2 class="title text-center">Panduan Penggunaan</h2>
    </div>
  </div>
  <div class="jumbotron" style="background-color: transparent !important; margin-top: -5%; background-position-x: 100px;">
    <div class="row" id="alur2">
      <div class="col-md-4">
        <div class="info">
          <div class="icon icon-danger text-center">
            <i class="nc-icon nc-single-copy-04" style="color: #53bedb;"></i>
          </div>
          <div class="description text-center" id="deskripsi">
            <h4 class="info-title" style="color: #53bedb; font-weight: bolder">Bla Bla Bla</h4>
            <br>
            <p style="font-weight: bolder" id="deskripsi2">Bla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla Bla Bla Bla Bla Bla Bla Bla.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4" id="alur-txt1">
        <div class="info">
          <div class="icon icon-danger text-center">
            <i class="nc-icon nc-single-copy-04" style="color: #53bedb;"></i>
          </div>
          <div class="description text-center" id="deskripsi">
            <h4 class="info-title" style="color: #53bedb; font-weight: bolder">Bla Bla Bla</h4>
            <br>
            <p style="font-weight: bolder" id="deskripsi2">Bla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla Bla Bla Bla Bla Bla Bla Bla.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4" id="alur-txt2">
        <div class="info">
          <div class="icon icon-danger text-center">
            <i class="nc-icon nc-single-copy-04" style="color: #53bedb;"></i>
          </div>
          <div class="description text-center" id="deskripsi">
            <h4 class="info-title" style="color: #53bedb; font-weight: bolder">Bla Bla Bla</h4>
            <br>
            <p style="font-weight: bolder" id="deskripsi2">Bla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla Bla Bla Bla Bla Bla Bla Bla.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"
integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
crossorigin="anonymous"></script>
<!-- end alur  -->
<!--     <script type="text/javascript">

      $('#myform').submit(function(e){
        e.preventDefault()

        $.ajax({
          type:'POST',
          data:new FormData(this),
          url:'<?= site_url('RPP') ?>',
          processData: false,
          contentType: false,  
          cache:false,
          async:false,
          success: function(hasil){
            alert(hasil);
          }
        });
      });
    </script> -->
    <!-- mulai footer -->
