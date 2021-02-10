<?php 
function tgl_indonesia($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);

	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>
<div class="container-fluid">

    <div class="row">
      <div class="col-sm-6 grid-margin stretch-card">
        <div class="card"
        style="
        background-image: url('https://media.istockphoto.com/vectors/star-universe-background-illustration-flat-design-for-kid-vector-id941365072?k=6&m=941365072&s=170667a&w=0&h=9tB7wDjEUbEkUvYbL061LDqVsyAm56pX34fOCa6wo9Q=')
        ; background-size: 100%">
        <div class="card-body">
          <div class="clearfix">

            <div class="float-right">
              <p class="mb-0 text-right text-light">Selamat Datang Kembali !</p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-right mt-2 mb-0" style="color: #7bff61">
                  <?= $nama ?>
                </h3>
                <p class="mt-3 text-right mb-0 ahref"><a href="<?= site_url('Profile') ?>" style="text-decoration:none; color: #c7fffd">lihat profil
                  &nbsp;<i><span class="mdi mdi-arrow-right-drop-circle-outline"></span></i></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
          <div class="col-sm-6 grid-margin stretch-card">
        <div class="card" 
        style="
        background-image: url('https://image.shutterstock.com/image-photo/calendar-planner-on-yellow-background-260nw-1449652403.jpg')
        ; background-size: 100%">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <p class="mb-0 text-left text-light">
                <?php
                date_default_timezone_set("Asia/Jakarta");
                echo "Pukul : " . date("H:i");
                ?>
              </p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-left mt-2 mb-0 text-light">
                  <?php
                  echo tgl_indonesia(date("Y-m-d"))."<br>";
                  ?>
                </h3>
                <p class="mt-3 text-left text-light mb-0">
                  <?php
                  $hari = array ( 1 =>    
                    'Senin - Monday',
                    'Selasa - Tuesday',
                    'Rabu - Wednesday',
                    'Kamis - Thursday',
                    'Jumat - Friday',
                    'Sabtu - Saturday',
                    'Minggu - Sunday'
                  );
                  echo $hari[ date('N') ]; 
                  ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<br>
	<!-- Page Heading -->
	<div class="row">
		<div class="col-md-12 card">
			<div class="row card">
				<div class="col-md-12 card-body">
					<center><h1>Recent Activity</h1></center>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="padding-bottom: 20px;">
					<br>
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

	</div>
</div>
<!-- /.container-fluid -->

</div>


            <!-- End 