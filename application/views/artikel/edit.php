<div class="container-fluid">


  <!-- Page Heading -->
  
  <!--  <h1 class="h3 mb-4 text-gray-800">Artikel</h1> -->

  
  <div class="card">

      <h3 class="mt-2 ml-2">Tambah Data</h3>
      <a href="<?= site_url('Artikel') ?>" class="btn btn-warning col-lg-1 ml-2"><i class="fas fa-backward"> Back</i></a>
    <div class="card-body justify-content-center">

      <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
     <form action="" id="formData">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Header</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="header" placeholder="Tambahkan Header"  name="header">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Id_isi</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" id="id_isi" placeholder="Tambahkan Isi" name="id_isi">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Pakai</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="pakai" placeholder="Pakai Artikel" name="pakai">
                                    <!-- value="<?= $id->pakai ?>" -->
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