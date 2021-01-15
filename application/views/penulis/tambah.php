<?php 
if ($alert == 'sukses') { ?>
  <script type="text/javascript">
    alert('Data Tersimpan')
    window.location = "<?= site_url('Penulis') ?>";
  </script>
<?php }?>
<div class="container-fluid">


  <!-- Page Heading -->
  
  <!--  <h1 class="h3 mb-4 text-gray-800">Artikel</h1> -->

  
  <div class="card">

    <h3 class="mt-3 ml-2">Tambah Data</h3>
    <a href="<?= site_url('penulis') ?>" class="btn btn-warning col-lg-1 ml-2"><i class="fas fa-backward"> Back</i></a>
    <div class="card-body justify-content-center">

      <div class="row justify-content-center align-items-center">
        <div class="col-md-7">
         <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control"  placeholder="Email" name="email">
            </div>
          </div>
          <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control"  placeholder="Password" name="password">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama" placeholder="Nama"   name="nama">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form">Level</label>
            <div class="col-sm-10">
              <select class="form-control" name="level" style="border-radius: 0;">
                <option value="1">1</option>
                <option value="2">2</option>
                
              </select>
            </div>
          </div>
          <div class="mt-4">
            <button type="submit" class="btn btn-primary btn-flat">Save<i class="fas fa-paper-plane ml-2"></i></button>
            <button type="button" class="btn btn-secondary btn-flat">Reset</button>
          </div>
        </div>    
      </div>
    </form>
  </div>
</div>
</div>
</div>
</div>