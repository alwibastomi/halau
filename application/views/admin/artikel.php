<?php 
if ($alert == 'sukses') { ?>
  <script type="text/javascript">
    window.location = "<?= site_url('Artikel') ?>";
  </script>
<?php }?>
<!-- /.container-fluid -->
<div class="container-fluid">


  <!-- Page Heading -->
  
  <!--  <h1 class="h3 mb-4 text-gray-800">Artikel</h1> -->

  
  <div class="card">
    <div class="card-body">

      <h3 class="text-center">Artikel</h3>
      
      <a href="<?= site_url('Artikel/tambah') ?>" class="btn btn-primary btn-tambah mb-3">Tambah<i class="fa fa-plus ml-2" aria-hidden="true"></i></a>
      
      
      <table class="table tablehead datatable-ku" data-func="artikel" data-meth="artikel_datatable" style="width:100%">
        <thead>
          <tr class="thead">
            <th data-orderable="false">No</th>
            <th>Header</th>
            <th>Isi</th>
            <th>Pakai</th>
            <th data-orderable="false">Aksi</th>
            
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
      
    </div>
  </div>
  


</div>
<!-- /.container-fluid -->



