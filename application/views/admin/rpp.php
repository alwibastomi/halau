
<!-- /.container-fluid -->
<div class="container-fluid">


  <!-- Page Heading -->
  
  <!--  <h1 class="h3 mb-4 text-gray-800">Artikel</h1> -->

  
  <div class="card">
    <div class="card-body">

      <h3 class="text-center">DATA RPP</h3>
      
      <a href="<?= site_url('Datarpp/tambah') ?>" class="btn btn-primary btn-tambah mb-3">Tambah<i class="fa fa-plus ml-2" aria-hidden="true"></i></a>
      <a href="<?= site_url('Datarpp/upload') ?>" class="btn btn-info mb-3" style="border-radius: 0 !important;
        border: none;">Upload Data<i class="fa fa-plus ml-2" aria-hidden="true"></i></a>
        <a href="<?= site_url('Datarpp/Hapus') ?>" class="btn btn-danger mb-3" style="border-radius: 0 !important;
        border: none;">Hapus Data<i class="fa fa-trash ml-2" aria-hidden="true"></i></a>
      
      
      <table class="table tablehead datatable-ku" data-func="datarpp" data-meth="datarpp_datatable" style="width:100%">
        <thead>
          <tr class="thead">

            <th>kelas</th>
            <th>matpel</th>
            <th>Semester</th>
            <th>Pertemuan</th>
            <th>Kd</th>
            <th>Materi</th>
            <th>Bab</th>
            <th>Halaman</th>
               
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
      
    </div>
  </div>
  


</div>
<!-- /.container-fluid -->



