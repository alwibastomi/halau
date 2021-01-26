<?php 
if ($alert == 'sukses') { ?>
  <script type="text/javascript">

    window.location = "<?= site_url('Iklan') ?>";
  </script>
<?php }?>
<div class="container-fluid">


  <!-- Page Heading -->
  
  <!--  <h1 class="h3 mb-4 text-gray-800">Artikel</h1> -->

  
  <div class="card">

    <h3 class="mt-2 ml-2">Edit Data</h3>
    <a href="<?= site_url('Menu') ?>" class="btn btn-warning col-lg-1 ml-2"><i class="fas fa-backward"> Back</i></a>
    <div class="card-body justify-content-center">

      <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Script JS</label>
              <div class="col-sm-10">
                <input type="hidden" class="form-control" id="id" value="<?= $iklan->id ?>"  name="id" >
                <input type="text" class="form-control" id="script_js" value="<?= $iklan->script_js ?>"  name="script_js" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Place</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="place" value="<?= $iklan->place ?>" name="place" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Pakai</label>
              <div class="col-sm-10">
                <select class="form-control" name="pakai" style="border-radius: 0;">
                  <?php
                  if ($iklan->pakai == "1") {
                    echo "<option value='1' selected>Ya</option>";
                    echo "<option value='2'>Tidak</option>";
                  }else{
                    echo "<option value='2' selected>Tidak</option>";
                    echo "<option value='1'>Ya</option>";
                  }
                  ?>
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