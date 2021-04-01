<?php 
// $_GET
$mahasiswa = [
	[
		"nama" => "Rudi Haryanto", 
		"nrp" => "203040147",
		"email" => "rudiharyantovrt99@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "image.png"
	],
	[
		"nama" => "Mono", 
		"nrp" => "203040146",
		"email" => "monovrt99@gmail.com",
		"jurusan" => "Teknik Industri",
		"gambar" => "mono.png"
	]
];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>GET</title>
 </head>
 <body>
 <h1>Daftar Mahasiswa</h1>
 <ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
			
	</li>

<?php endforeach; ?>
</ul>

 
 </body>
 </html>