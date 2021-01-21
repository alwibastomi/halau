<?php 
if ($alert == 'sukses') { ?>
  <script type="text/javascript">
    window.location = "<?= site_url('Penulis') ?>";
  </script>
<?php }?>
<!-- /.container-fluid -->
<div class="container-fluid">


  <!-- Page Heading -->
  
  <!--  <h1 class="h3 mb-4 text-gray-800">Artikel</h1> -->

  
  <div class="card">
    <div class="card-body">

      <h3 class="text-center">Menu</h3>
      <a href="<?= site_url('Penulis/tambah') ?>" class="btn btn-primary btn-tambah mb-3">Tambah<i class="fa fa-plus ml-2" aria-hidden="true"></i></a>
      <!-- id="tablea" tablehead  -->
      <table class="table tablehead datatable-ku" data-func="penulis" data-meth="penulis_datatable" style="width:100%">
        <thead>
          <tr class="thead">
            <th data-orderable="false">No</th>
            <th>Nama</th>
            <th>Level</th>
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



