<?php 
$date = date('Y-m-d');
?>
 
                   
       
<!-- End Body Navbar -->
<div class="container">
  <div class="row">
    <div class="col-xl-4 order-xl-last">
      <div class="kotak-iklan" id="lolo">
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
        <p></p>
        <?= $aaaa->isi ?>
        <p></p>
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
          <h3 class="title text-left" style="color: black;"><b>Isi Detail RPP</b></h3>     
          <form action="<?= site_url('RPP/download/') ?>" role="form" id="myform" method="post" enctype="multipart/form-data" style="color: black">   
            <!-- nama  -->
            <div class="row">
              <div class="col-md-4">
                <div class="form-group mt-2">
                  <label style="color: black;">Masukkan Nama</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                </div>
              </div>
            </div>
            <!-- end nama  -->

            <!-- sekolah  -->
            <div class="row">
              <div class="col-md-4">
                <div class="form-group mt-2">
                  <label style="color: black;">Masukkan Sekolah</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="sekolah" class="form-control" placeholder="Nama Sekolah" required>
                </div>
              </div>
            </div>
            <!-- end sekolah  -->

            <div class="row">
              <div class="col-md-4">
                <div class="form-group mt-2">
                  <label style="color: black;">Masukkan Kepala Sekolah</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="kep_sekolah" class="form-control" placeholder="Nama Kepala Sekolah" required>
                </div>
              </div>
            </div>
            <!-- Tanggal RPP -->
            <div class="row">
              <div class="col-md-4">
                <div class="form-group mt-2">
                  <label style="color: black;">Masukkan Tanggal RPP</label>
                </div>
              </div>

              <div class="col-md-6">
                <!-- Tanggal RPP -->
                <div class="form-group">
                  <div class="input-group date">
                    <input type="text" name="tanggal_rpp" style="background-color: white" class="form-control basicDate" value="<?= $date ?>" placeholder="Tanggal RPP" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar"
                          aria-hidden="true"></i></span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Tanggal RPP -->

              <!-- ajaran  -->
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group mt-2">
                    <label style="color: black;">Pilih Tahun Ajaran</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <select name="tahun_ajaran" id="tahun_ajaran" class="form-control" required>
                      <option value="">- PILIH -</option>
                      <?php
                      for ($tgl = date('Y'); $tgl >= 1999; $tgl--) {
                        echo "<option value=".$tgl.">".$tgl."</option>";
                      }
                      ?>
                    </select>
                  </div>
                </div>
              </div>
              <!-- end ajaran  -->

              <!-- kelas  -->
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group mt-2">
                    <label style="color: black;">Pilih Kelas</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <select name="kelas" id="kelas" class="form-control" required>
                      <option value="">- PILIH -</option>
                      <?php 
                      foreach ($kelas as $key) { ?>

                        <option value="<?= $key->id ?>"><?= $key->kelas ?></option>
                      <?php }?>
                    </select>
                  </div>
                </div>
              </div>
              <!-- end kelas  -->

              <!-- pelajaran  -->
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group mt-2">
                    <label style="color: black;">Pilih Pelajaran</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <select name="pelajaran" id="pelajaran" class="form-control" required>
                      <option value="">- PILIH -</option>                      
                      <?php 
                      foreach ($matpel as $key) { ?>

                        <option value="<?= $key->id ?>"><?= $key->nama_matpel ?></option>
                      <?php }?>
                    </select>
                  </div>
                </div>
              </div>
              <!-- end pelajaran  -->

              <!-- semester  -->
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group mt-2">
                    <label style="color: black;">Pilih Semester</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <select name="semester" id="semester" class="form-control" required>
                      <option value="">- PILIH -</option>                      
                      <?php 
                      foreach ($semester as $key) { ?>

                        <option value="<?= $key->id ?>"><?= $key->semester ?></option>
                      <?php }?>
                    </select>
                  </div>
                </div>
              </div>
              <!-- end pelajaran  -->

              <!-- iklan -->
              <div class="kotak-iklan mb-2">
                <!-- <a href="" title="Pasang Iklan">
                  <img alt="iklan banner" src=""/>
                </a> -->
                <!-- IKLAN 1.3 -->
                <?php if (!empty($iklan3->place)) {
                  echo $iklan3->script_js;
                }else{
                  echo "Ini iklan 1.3";
                }
                ?>
              </div>
              <!-- iklan -->
              <!-- end -->
              <div id='hasil'>

              </div>

              <div class="row">
                <div class="col-md-6 mb-2">
                  <button class="btn btn-ijo btn-round" id="uy">Generate</button>

                </div>
              </div>
              <div class="kotak-iklan mb-2">
                <!-- <a href="" title="Pasang Iklan">
                  <img alt="iklan banner" src=""/>
                </a> -->
                <!-- IKLAN 1.4 -->
                <?php if (!empty($iklan4->place)) {
                  echo $iklan4->script_js;
                }else{
                  echo "Ini iklan 1.4";
                }
                ?>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <center><h3>Download RPP Pertemuan</h3></center>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12" id="list">

                </div>

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
    <style>
      @media screen and (max-width:560px){
        #per{
          width: auto;
          margin: 2px;
          padding-left: 13%;
          position: relative;
          display: flex;
          justify-content: center;
        }
        }
    </style>
    <!-- end alur  -->
    <script type="text/javascript">
      $('#uy').click(function(l) {

        l.preventDefault();
        var nama = $("input[name='nama']").val();
        var sekolah = $("input[name='sekolah']").val();
        var kep_sekolah = $("input[name='kep_sekolah']").val();
        var matpel = $( "#pelajaran option:selected" ).text();
        var sem = $( "#semester option:selected" ).text();

        var tgl = $("input[name='tanggal_rpp']").val();
        var tahun_ajaran = $( "#tahun_ajaran option:selected" ).text();
        var th = $( "#tahun_ajaran option:selected" ).val();
        var kls = $( "#kelas option:selected" ).text();
        var kelas = $( "#kelas option:selected" ).val();

        var pelajaran = $( "#pelajaran option:selected" ).val();

        var semester = $( "#semester option:selected" ).val();

        if (nama == "" || sekolah == "" || kep_sekolah == "" || $("#kelas")[0].selectedIndex <= 0 || $("#pelajaran")[0].selectedIndex <= 0 || $("#tahun_ajaran")[0].selectedIndex <= 0 || $("#semester")[0].selectedIndex <= 0) {
       alert("Data masih ada yang kosong")

        }else {
           $.ajax({
          type:'POST',
          data:'kelas='+kelas+'&pelajaran='+pelajaran+'&semester='+semester,
          url:'<?= site_url('RPP/cek') ?>',
          dataType:'JSON',
          success: function(hasil){
            
             
            var z = 4;
            var list = '';
            for (var i = 0; i < hasil.length; i++) {
              var x = i+1;
              if (z%4 == 0) {

                list += '<br><div class="row">';
              }
              list += '<div class="col-sm-3" id="per"><a type="submit" href="<?= site_url("RPP/download/'+hasil[i].id_detail+'/'+nama+'/'+sekolah+'/'+kep_sekolah+'/'+tgl+'/'+tahun_ajaran+'") ?>" class="btn btn-primary" target="_blank"> Pertemuan '+x+' </a></div>';

              if (i == hasil.length - 1 || z%4 == 3) {
                list += '</div>'
              }

              z = z+1;
            }
            document.getElementById('list').innerHTML = list;
          }
        });    
          
        }


        


        /* Act on the event */
      });
    </script>