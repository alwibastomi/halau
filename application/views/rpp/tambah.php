<div class="card">

    <h3 class="mt-3 ml-2">Tambah Data</h3>
    <a href="<?= site_url('Datarpp') ?>" class="btn btn-warning col-lg-1 ml-2"><i class="fas fa-backward"> Back</i></a>
    <div class="card-body justify-content-center">

      <div class="row justify-content-center align-items-center">
        <div class="col-md-7">
         <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Detail</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  placeholder="Detail" name="id_detail">
            </div>
          </div>
          <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  placeholder="Kelas" name="id_kelas">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Matpel</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="" placeholder="Matpel"   name="id_matpel">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Pertemuan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="" placeholder="Pertemuan"   name="pertemuan">
            </div>
          </div>

          <div class="form-group row" >
                      <label class="col-sm-2 col-form-label">KD</label>
                          <div class="col-lg-10">
                                  <div class="input-group mb-3">
                                      <input type="text" name="title[]" class="form-control m-input" placeholder="KD" autocomplete="off">    
                                          <button id="removeRow" type="button" class="btn btn-danger ml-2"><i class="fas fa-minus"></i></button>
                                          <button id="addRow" type="button" class="btn btn-success ml-2"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
            </div>
        <div id="newRow"></div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Materi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="" placeholder="Materi"   name="materi">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Id_tp</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="" placeholder="tp"   name="id_tp">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Bab</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="" placeholder="Bab"   name="bab">
            </div>
          </div>
           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Halaman</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="" placeholder="Halaman"   name="halaman">
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
<script type="text/javascript">
        // add row
        $("#addRow").click(function () {
            var html = '';
            html += '<div class="form-group row" id="inputFormRow">';
            html += '<label class="col-sm-2 col-form-label"></label>';
            html += '<div class="col-lg-10">';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="title[]" class="form-control m-input" placeholder="KD" autocomplete="off">';
            
            html += '<button id="removeRow" type="button" class="btn btn-danger ml-2"><i class="fas fa-minus"></button>';
            
            html += '</div>';
            html += '</div>';
             html += '</div>';

            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow', function () {
            $(this).closest('#inputFormRow').remove();
        });
    </script>