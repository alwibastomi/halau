 <div class="container-fluid">
 <div class="card">

    <h3 class="mt-3 ml-2">Tambah Menu</h3>
    <a href="<?= site_url('Menu') ?>" class="btn btn-warning col-lg-1 ml-2"><i class="fas fa-backward"> Back</i></a>
    <div class="card-body justify-content-center">

      <div class="row justify-content-center align-items-center">
        <div class="col-md-7">
         <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Menu</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  placeholder="Menu" name="menu">
            </div>
          </div>
          <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Href</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  placeholder="Href" name="hreff">
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