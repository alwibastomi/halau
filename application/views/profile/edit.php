<?php 
if ($alert == 'sukses') { ?>
  <script type="text/javascript">
    alert('Edit Profile Tersimpan')
    window.location = "<?= site_url('Profile') ?>";
  </script>
<?php }?>
<div class="card">

  <h3 class="mt-2 ml-2">Edit Profile</h3>
  <a href="<?= site_url('Profile') ?>" class="btn btn-warning col-lg-1 ml-2"><i class="fas fa-backward"> Back</i></a>
  <div class="card-body justify-content-center">

    <div class="row justify-content-center align-items-center">
      <div class="col-md-10">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-8">
              
              <input type="text" class="form-control" id="email" value="<?= $user->email ?>" name="email">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nama" value="<?= $user->nama ?>" name="nama">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="password">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Konfirmasi Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="password2" name="password">
              <span id="pesan"></span>
            </div>
          </div>
          <input type="hidden" class="form-control"value="<?= $user->level ?>" name="level">
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
  $('#password, #password2').on('keyup', function () {
    if ($('#password').val() == $('#password2').val()) {
      $('#pesan').html('Valid').css('color', 'green');
    } else 
    $('#pesan').html('Tidak Valid').css('color', 'red');
  });
</script>