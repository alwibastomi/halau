<!-- End Body Navbar -->

<!-- header  -->
<!-- <div class="page-header" id="bgne" style="background-image: url('assets/lpage/img/botro.png');"> -->
  <div class="content-wrapper" id="bgne" style="background-color: #d5fefd; background-image: linear-gradient(350deg, #d5fefd 0%, #fffcff 74%);">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 order-xl-last">
          <!-- iklan -->
          <div class="kotak-iklan" style="height: 90%; margin-top: 20px;">
            <a href="https://mmc.tirto.id/image/share/tw/2017/05/26/Sirup-marjan.JPG" title="Pasang Iklan">
              <img alt="iklan banner" style="height: 100%;" src="https://mmc.tirto.id/image/share/tw/2017/05/26/Sirup-marjan.JPG"/>
            </a>
          </div>
          <!-- iklan -->
        </div>
        <div class="col-xl-8 order-xl-first">
          <div class="kotak-iklan" style="margin-top: 20px;">
            <a href="https://mmc.tirto.id/image/share/tw/2017/05/26/Sirup-marjan.JPG" title="Pasang Iklan">
              <img alt="iklan banner" src="https://mmc.tirto.id/image/share/tw/2017/05/26/Sirup-marjan.JPG"/>
            </a>
          </div>
          <h3 class="title text-left" style="color: black;"><b>Isi Detail RPP</b></h3>     
          <form form role="form" id="myform" action="" method="post" enctype="multipart/form-data" style="color: black">   
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
                    <input type="text" name="tanngal_rpp" style="background-color: white" class="form-control basicDate" placeholder="Tanggal RPP" required>
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
                      $th = 1945;
                      $tgl = date('Y');
                      for ($th; $th <= $tgl; $th++) {
                        echo "<option value=".$th.">".$th."</option>";
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
                      <option value="">X</option>
                      <option value="">XI</option>
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
                      <option value="">MAT</option>
                      <option value="">Penjaskes</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- end pelajaran  -->

              <!-- iklan -->
              <div class="kotak-iklan mb-2">
                <a href="https://mmc.tirto.id/image/share/tw/2017/05/26/Sirup-marjan.JPG" title="Pasang Iklan">
                  <img alt="iklan banner" src="https://mmc.tirto.id/image/share/tw/2017/05/26/Sirup-marjan.JPG"/>
                </a>
              </div>
              <!-- iklan -->
              <!-- end -->

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <button type="submit" class="btn btn-ijo btn-round" name="save">Buat RPP</button>
                  </div>
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
    <!-- end alur  -->

    <!-- mulai footer -->
    