<div class="container-fluid">


  <!-- Page Heading -->
  
  <!--  <h1 class="h3 mb-4 text-gray-800">Artikel</h1> -->

  
  <div class="card">
    <div class="card-body">

      <h3 class="text-center">Aktivitas</h3>
      <a href="<?= site_url('Activity/hapus_log') ?>" class="btn btn-primary btn-tambah mb-3">Delete<i class="fa fa-trash ml-2" aria-hidden="true"></i></a>
      <!-- id="tableactiviti" tablehead  -->
      <table class="table tablehead datatable-ku" data-func="activity" data-meth="activity_datatable" style="width:100%">
        <thead>
          <tr class="thead">
            <th data-orderable="false">ID</th>
            <th>Keterangan</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          
        </tbody>
      </table>
      
    </div>
  </div>
  
  

</div>
<!-- /.container-fluid -->

