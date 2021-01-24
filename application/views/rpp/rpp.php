<?php
	$content = "
	<html> 
	<body>
		<h1 style='text-align:center'>RPP</h1> 
		<h2 style='text-align:center'> Rencana Pelaksanaan Pembelajaran </h2>
		<p style='line-height:0.5;padding-top:5px;'>Sekolah		: SMP TELO 4 Jombang</p>
		<p style='line-height:0.5;'>Mata pelajaran	: BAHASA INGGRIS (milih) drop down</p>
		<p style='line-height:0.5;'>Kelas/Semester	: VII/I (milehkelas/milihsemeserter)</p>
		<p style='line-height:0.5;'>Materi Pokok	:«Materi_pokok»</p>
		<p style='line-height:0.5;'>Alokasi Waktu	: 1 x 2 Jam Pelajaran @40 Menit</p>
		<p style='line-height:0.5;'>KD/Pertemuan	: «KD» / «Pertemuan»</p>
		<h4>A. Tujuan Pembelajaran</h4>
		<p>Setelah mengikuti proses pembelajaran, peserta didik diharapkan dapat :</p>
		<ol type='1'>
			<li>«TP_1»</li>
		</ol>
		<h4 >B. Kegiatan Pembelajaran</h4>
		<ol type='1' style='bold'>
			<li ><h4>Pendahuluan</h4> </li>
			<ol type='a'>
				<li>Guru mengucapkan salam dan mengajak berdoa para siswa</li>
				<li>	Para siswa menjawab salam dan berdoa bersama</li>
				<li>	Siswa Mengisi absen terlebih dahulu sebelum KBM dimulai</li>
			</ol>
			<li ><h4>Inti</h4> </li>
			<ol type='a'>
				<li>Siswa diminta mengkaji, memahami dan menganalisa buku paket BAB«Materi_pokok» pada halaman «Halaman_LKS»</li>
				<li>Siswa diminta menjelaskan tentang «Materi_pokok»</li>
				<li>Guru Membahas materi «Materi_pokok» bersama siswa</li>
				<li>Guru Memberikan kesempatan siswa untuk bertanya seputar materi«Materi_pokok»</li>
				<li>Guru Memberikan Beberapa Pertanyaan tentang «Materi_pokok» Untuk memastikan siswa memahami materi</li>
			</ol>
			<li ><h4>Penutup</h4> </li>
			<ol type='a'>
				<li>Guru Memberikan Kesimpulan dan rangkuman soal materi «Materi_pokok» yang telah dipelajari untuk memastikan semua siswa memahami materi</li>
				<li>Guru menutup KBM dengan nasihat tentang pentingnya ahlak, dan dilanjutkan dengan salam penutup</li>
				<li style='padding-bottom:50px;'>Siswa Menjawab Salam Guru</li>
			</ol>
			
		</ol>
		
				
				<table>
			        <tr>
			            <td>Mengetahui,<br>Kepala Sekolah SMP Amanatul Ummah</td>
			            
			            <td style='padding-left:30%;' >Kanigoro, 28 Juli 2020<br>Guru Bahasa Inggris</td>
			            
			            <tr >
			            	<td style='padding-top:30px;'>Imam Muhtar, M.A</td>
			            	<td style='padding-left:30%;padding-top:30px;'>Imam Muhtar, M.A</td>
			            </tr>
			            
			        </tr>
        
    			</table>

			
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