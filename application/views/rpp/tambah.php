<div class="card">

  <h3 class="mt-3 ml-2">Tambah Data</h3>
  <a href="<?= site_url('Datarpp') ?>" class="btn btn-warning col-lg-1 ml-2"><i class="fas fa-backward"> Back</i></a>
  <div class="card-body justify-content-center">

    <div class="row justify-content-center align-items-center">
      <div class="col-md-7">
        <form action="" id="uwu" method="post" enctype="multipart/form-data">
          
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
            <label class="col-sm-2 col-form-label">Pertemuan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="" placeholder="Pertemuan"   name="pertemuan" required>
            </div>
          </div>

          <div class="form-group row" >
            <label class="col-sm-2 col-form-label">TP</label>
            <div class="col-lg-10">
              <div class="input-group mb-3">
                <input type="text" name="tp1" id="tp1" onblur="lololo('tp1')" class="form-control m-input" placeholder="TP 1" autocomplete="off" required>    
                <button id="removeRow" type="button" class="btn btn-danger ml-2"><i class="fas fa-minus"></i></button>
                <button id="addRow" type="button" class="btn btn-success ml-2"><i class="fas fa-plus"></i></button>
              </div>
            </div>
          </div>
          <div id="newRow"></div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Materi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="" placeholder="Materi"   name="materi" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">KD</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="" placeholder="kd"   name="kd" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Bab</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="" placeholder="Bab"   name="bab" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Halaman</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="" placeholder="Halaman"   name="halaman" required>
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
        z = 1;

        var isi = [];
        $("#addRow").click(function () {
          z = z + 1;
          x = z-1;
          var html = '';
          html += '<div class="form-group row" id="inputFormRow'+z+'">';
          html += '<label class="col-sm-2 col-form-label"></label>';
          html += '<div class="col-lg-10">';
          html += '<div class="input-group mb-3">';
          html += '<input type="text" name="tp'+z+'" id="tp'+z+'" onblur="lololo(\'tp\'+z)" class="form-control m-input" placeholder="TP'+z+'" autocomplete="off">';
          html += '<div id="place_button'+z+'">';
          html += '<button id="removeRow'+z+'" onClick="xc('+z+');" type="button" class="btn btn-danger ml-2"><i class="fas fa-minus"></button>';
          html += '<div>';
          html += '</div>';
          html += '</div>';
          html += '</div>';

          $('#newRow').append(html);
          if (x != 1) {
            $('#removeRow'+x).remove();
          }

        });
        function xc(l) {
          s = l-1;
          z = z - 1;
          $('#inputFormRow'+l).remove();
          $('#place_button'+s).append('<button id="removeRow'+s+'" onClick="xc('+s+');" type="button" class="btn btn-danger ml-2"><i class="fas fa-minus"></button>')
          $('#tp'+l).val("");
          isi.splice(z,1);
          console.log(isi)

        }

        function lololo(haha) {
          var uwu = $('#'+haha).val();
          var haha = haha.substr(2,haha.length);
          var haha = haha-1;
          isi[haha] = uwu;
          console.log(isi)
        };
        $('#uwu').submit(function(e){

          e.preventDefault()
          var data = new FormData(this);

          console.log()
            $.ajax({
              type:'POST',
              data:new FormData(this),
              url:'<?= site_url('RPP/add_rpp') ?>',
              processData: false,
              contentType: false,  
              cache:false,
              async:false,
              success: function(hasil){
                $.ajax({
                  type:'POST',
                  data:'isi='+JSON.stringify(isi),
                  url:'<?= site_url('RPP/isi/') ?>'+hasil,
                  dataType:'JSON',
                  success: function(hasil){
                    alert('msg');

                  }
                });
              }
            });
        });
                    // // remove row
        // $(document).on('click', '#removeRow', function () {
        //     $(this).closest('#inputFormRow').remove();
        // });
      </script>