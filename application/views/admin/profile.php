
<!-- /.container-fluid -->
<div class="container-fluid">


  <!-- Page Heading -->
  
  <!--  <h1 class="h3 mb-4 text-gray-800">Artikel</h1> -->

  
  <div class="card" style="border: none;">
    <div class="card-body" style="height: 530px; ">
      <div class="row ">
        <div class="col-lg-3" style=" border-right: 1px solid black; ">
          
          <img style="" class="img-profile rounded-circle" src="<?= base_url('images/profil/default.jpg') ?>">
          <p class="text-center mt-2 mr-3"><?= $nama ?></p>
          
        </div>
        <div class="col-lg-4">
          <h3 class="mt-3">INFORMASI</h3>
          
          <div class="col-lg-8">
            <p style="color: black; font-weight: 600; margin-bottom: 0;">Email </p>
            <span style="padding-top:-50px;"><?= $email ?></span>
          
            <p style="color: black; font-weight: 600; margin-bottom: 0;">Level </p>
            <?php 
            if ($level == 1) {
              $lala = "Owner";
            }else{
              $lala = "Penulis";
            }
             ?>
            <span style="padding-top:-50px;"><?= $lala ?></span>
            
          </div>
        </div>
      </div>
     
      
    </div>
  </div>
  
  

</div>
<!-- /.container-fluid -->



