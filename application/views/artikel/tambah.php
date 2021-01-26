<script src="<?= base_url('vendor/ckeditor/ckeditor/ckeditor.js') ?>"></script>

<?php
error_reporting(0);
if ($edit) {
  if($artikel != null){
    $tt = 'Edit';
    $header = $artikel->header;
    $isi = $artikel->isi;
    $pakai = $artikel->pakai;
    $submit = 'Update';
  }else{
    redirect('artikel');
  }
}else{
  $tt = 'Tambah';
  $header = '';
  $isi = '';
  $pakai = '';
  $submit = 'Save';
}
?>
<?php if ($alert == 'sukses') { ?>
  <script type="text/javascript">
    
    window.location = "<?= site_url('Artikel') ?>";
  </script>
<?php }else if ($alert == 'sukses_edit'){ ?>
  <script type="text/javascript">
    
    window.location = "<?= site_url('Artikel') ?>";
  </script>
<?php } ?>
<div class="container-fluid">


  <!-- Page Heading -->

  <!--  <h1 class="h3 mb-4 text-gray-800">Artikel</h1> -->


  <div class="card">

    <h3 class="mt-2 ml-2"><?= $tt ?> Data</h3>
    <a href="<?= site_url('Artikel') ?>" class="btn btn-warning col-lg-1 ml-2"><i class="fas fa-backward"> Back</i></a>
    <div class="card-body justify-content-center">

      <div class="row justify-content-center align-items-center">
        <div class="col-md-12">
         <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Header</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="header" value="<?= $header ?>" name="header" required>
            </div>
          </div>
          <div class="form-group row">

            <label class="col-sm-2 col-form-label">Isi Artikel</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="id_isi" value="" name="isi" required><?= $isi ?></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Pakai</label>
            <div class="col-sm-10">
              <select class="form-control" name="pakai" style="border-radius: 0;">
                <?php
                  if ($pakai == "1") {
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

          <button type="submit" class="btn btn-primary btn-flat"><?= $submit ?><i class="fas fa-paper-plane ml-2"></i></button>
          <button type="button" class="btn btn-secondary btn-flat">Reset</button>
        </div>    
      </div>
    </form>
  </div>
</div>
</div>
</div>
</div>
<script>
  var editor = CKEDITOR.replace( 'id_isi', {
    language: 'en',
    extraPlugins: 'notification',
    height:300
});

editor.on( 'required', function( evt ) {
    editor.showNotification( 'This field is required.', 'warning' );
    evt.cancel();
} );
  


</script>