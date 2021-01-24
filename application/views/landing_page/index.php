<?php 
$date = date('Y-m-d');
?>

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
        <img class="img-fluid" src="<?= site_url('images/artikel/artikel.jpg') ?>" alt="">
        <h4><b>Laptop apik tapi murah</b></h4>
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
        <p></p><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
          ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
          voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
          sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum."</p><p>"Sed
          ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
          doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo 
          inventore veritatis et quasi architecto beatae vitae dicta sunt 
          explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut 
          odit aut fugit, sed quia consequuntur magni dolores eos qui ratione 
          voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum 
          quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam 
          eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat 
          voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam 
          corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
          Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse 
          quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo 
        voluptas nulla pariatur?"</p>

        <p>"But I must explain to you how all this mistaken idea of denouncing 
          pleasure and praising pain was born and I will give you a complete 
          account of the system, and expound the actual teachings of the great 
          explorer of the truth, the master-builder of human happiness. No one 
          rejects, dislikes, or avoids pleasure itself, because it is pleasure, 
          but because those who do not know how to pursue pleasure rationally 
          encounter consequences that are extremely painful. Nor again is there 
          anyone who loves or pursues or desires to obtain pain of itself, because
          it is pain, but because occasionally circumstances occur in which toil 
          and pain can procure him some great pleasure. To take a trivial example,
          which of us ever undertakes laborious physical exercise, except to 
          obtain some advantage from it? But who has any right to find fault with a
          man who chooses to enjoy a pleasure that has no annoying consequences, 
        or one who avoids a pain that produces no resultant pleasure?"</p><p></p>
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
            <a href="" title="Pasang Iklan">
              <img alt="iklan banner" src=""/>
            </a>
          </div>
          <h3 class="title text-left" style="color: black;"><b>Isi Detail RPP</b></h3>     
          <form role="form" id="myform" method="post" enctype="multipart/form-data" style="color: black">   
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
                <a href="" title="Pasang Iklan">
                  <img alt="iklan banner" src=""/>
                </a>
              </div>
              <!-- iklan -->
              <!-- end -->
              <div id='hasil'>

              </div>

              <div class="row">
                <div class="col-md-6">
                  <button class="btn btn-ijo btn-round" id="uy">Generate</button>

                </div>
              </div>
              <div class="kotak-iklan mb-2">
                <a href="" title="Pasang Iklan">
                  <img alt="iklan banner" src=""/>
                </a>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <center><h3>List Download RPP</h3></center>
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
    <!-- end alur  -->
    <script type="text/javascript">
      $('#uy').click(function(l) {

        l.preventDefault();
        var kelas = $( "#kelas option:selected" ).val();

        var pelajaran = $( "#pelajaran option:selected" ).val();

        var semester = $( "#semester option:selected" ).val();

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
              if (z/4 == 1) {
                list += '<div class="row">';
              }
              list += '<div class="col-md-3"><a href="<?= site_url("RPP/download/'+hasil[i].id_detail+'") ?>" class="btn btn-primary"> Pertemuan '+x+' </a></div>';

              if (i == hasil.length - 1 || z%4 == 3) {
                list += '</div>'
              }

            z = z+1;
            }
            document.getElementById('list').innerHTML = list;
          }
        });    
        


        /* Act on the event */
      });
    </script>