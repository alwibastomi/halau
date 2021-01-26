 <?php 
 if ($alert == 'enek') { ?>
  <script type="text/javascript">
    alert('Place Sudah Ada, Gunakan Place Lain')
  </script>
<?php } ?>
<?php if ($alert == 'sukses') { ?>
  <script type="text/javascript">
    window.location = "<?= site_url('Iklan') ?>";
  </script>
<?php } ?>
<div class="container-fluid">
 <div class="container-fluid">
   <div class="card">

    <h3 class="mt-3 ml-2">Tambah Iklan</h3>
    <a href="<?= site_url('Iklan') ?>" class="btn btn-warning col-lg-1 ml-2"><i class="fas fa-backward"> Back</i></a>
    <div class="card-body justify-content-center">

      <div class="row justify-content-center align-items-center">
        <div class="col-md-7">
         <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Script JS</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  placeholder="Script JS" name="script_js" required>
            </div>
          </div>
          <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Place</label>
            <div class="col-sm-10">
              <select class="form-control" name="place" style="border-radius: 0;">
                <?php
                $z = 5;
                for ($i=1; $i <= $z ; $i++) { ?>
                  <option value='1.<?= $i ?>'>1.<?= $i ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Pakai</label>
            <div class="col-sm-10">
              <select class="form-control" name="pakai" style="border-radius: 0;">
                <option value='1'>Ya</option>
                <option value='2'>Tidak</option>
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
<p> *nb : Place 1.1 Landing Page Kanan</p>
<p> Place 1.1 Landing Page Kanan</p>
</div>
</div>
</div>
</div>