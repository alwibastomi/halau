<div class="container-fluid">
<div class="card">

  <h3 class="mt-3 ml-2">Tambah Data</h3>

  <a href="<?= site_url('Datarpp') ?>" class="btn btn-warning col-lg-1"><i class="fas fa-backward"> Back</i></a>

  <div class="card-body justify-content-center">

    <div class="row justify-content-center align-items-center">
      <div class="col-md-7">
        <form action="" id="uwu" method="post" enctype="multipart/form-data">
          <div class="form-group row">
            <center><a href="<?= site_url('RPP/Document_read') ?>" class="btn btn-success ">Download Template</a></center>

        </div>
                  <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
             <select name="kelas" id="kelas" class="form-control" required>
                      <option value="">- PILIH -</option>
                      <?php 
                      foreach ($kelas as $key) { ?>

                        <option value="<?= $key->id ?>"><?= $key->kelas ?></option>
                      <?php }?>
                    </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Matpel</label>
            <div class="col-sm-10">
              <select name="pelajaran" id="pelajaran" class="form-control" required>
                      <option value="">- PILIH -</option>                      
                      <?php 
                      foreach ($matpel as $key) { ?>

                        <option value="<?= $key->id ?>"><?= $key->nama_matpel ?></option>
                      <?php }?>
                    </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Semester</label>
            <div class="col-sm-10">
              <select name="semester" id="semester" class="form-control" required>
                      <option value="">- PILIH -</option>                      
                      <?php 
                      foreach ($semester as $key) { ?>

                        <option value="<?= $key->id ?>"><?= $key->semester ?></option>
                      <?php }?>
                    </select>
            </div>
          </div>
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Upload Data</label>
            <div class="col-sm-10">

                <input type="file" name="berkas_excel" class="form-control" id="exampleInputFile">
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary btn-flat">Save<i class="fas fa-paper-plane ml-2"></i></button>
        </div>
    </div>    
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>