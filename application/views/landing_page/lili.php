<?php 
$date = date('Y-m-d');
?>

<!-- End Body Navbar -->
<div class="container">
  <div class="row">
    <div class="col-xl-4 order-xl-last">
      <div class="kotak-iklan" id="lolo" style="">
        <!-- <a href="" title="Pasang Iklan">
          <img alt="iklan banner" style="height: 100%;" src=""/>
        </a> -->
        <!-- IKLAN 1.1 -->
        <?php if (!empty($iklan1->place)) {
          echo $iklan1->script_js;
        }else{
          echo "Ini iklan 1.1";
        }
        ?>
      </div>
    </div>
    <div class="col-xl-8 order-xl-first mt-4">
      <div class="main_blog_details">
        <!-- <img class="img-fluid" src="<?= site_url('images/artikel/artikel.jpg') ?>" alt=""> -->
        <h4><b><?= $aaaa->header ?></b></h4>
        <div class="user_details" style="margin-top: 20px;">
          <div class="float-left">
            <a class="btn btn-primary" style="border-radius: 40px; padding: 2px 10px;" href="#"><i class="fa fa-thumbs-up"></i></a>
          </div>
          <div class="float-right">
            <div class="media">
              <div class="media-body">
                <p>Januari 24, 2021</p>
              </div>
            </div>
          </div>
        </div>
        <p></p><?= $aaaa->isi ?><p></p>
      </div>
    </div>
  </div>
</div>
<!-- header  -->
<!-- <div class="page-header" id="bgne" style="background-image: url('assets/lpage/img/botro.png');"> -->
  <div class="content-wrapper" id="bgne" style="background-color: #d5fefd; background-image: linear-gradient(350deg, #d5fefd 0%, #fffcff 74%);">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 order-xl-last">
          <!-- iklan -->
          <!-- <div class="kotak-iklan" style="height: 90%; margin-top: 20px;">
            <a href="" title="Pasang Iklan">
              <img alt="iklan banner" style="height: 100%;" src=""/>
            </a>
          </div> -->
          <!-- iklan -->
        </div>
        <div class="col-xl-8 order-xl-first">
          <div class="kotak-iklan" style="margin-top: 20px;">
            <!-- <a href="" title="Pasang Iklan">
              <img alt="iklan banner" src=""/>
            </a> -->
            <!-- IKLAN 1.2 -->
            <?php if (!empty($iklan2->place)) {
              echo $iklan2->script_js;
            }else{
              echo "Ini iklan 1.2";
            }
            ?>
          </div>
          


          <!-- end  -->
        </form>
      </div>
    </div>
  </div>
</div>
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
