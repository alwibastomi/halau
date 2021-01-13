<?php 
if ($alert == 'sukses') { ?>
  <script type="text/javascript">
    alert('Data Tersimpan')
    window.location = "<?= site_url('Menu') ?>";
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
              <label class="col-sm-2 col-form-label">Menu</label>
              <div class="col-sm-10">
                <input type="hidden" class="form-control" id="id" value="<?= $menu->id ?>"  name="id">
                <input type="text" class="form-control" id="menu" value="<?= $menu->menu ?>"  name="menu">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Href</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="href" value="<?= $menu->href ?>" name="href">
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