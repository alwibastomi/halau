<?php
	$content = "
	<html> 
	<body>
		<h1>MPDF WORK !</h1> 
		<h2> ISO O LAH ASW :( </h2>
	</body>
	</html>
	";
require_once(APPPATH.'libraries\mpdf_v8.0.3-master\vendor\autoload.php'); 
	$mpdf = new \Mpdf\Mpdf();
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	$mpdf->WriteHTML($content);
	$mpdf->Output();
ob_stop();
Hehehe();

?>