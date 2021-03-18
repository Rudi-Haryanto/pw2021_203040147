<?php 
// $mahasiswa = [
// 	["Rudi Haryanto", "203040147", "rudiharyantovrt99@gmail.com", "Teknik Informatika"],
// 	["mono", "203040146", "monovrt99@gmail.com", "Teknik Industri"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
	<title>Daftar mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>
			<li>
				<img src="img/<?= $mhs["gambar"]; ?>">
			</li>
			<li>Nama : <?= $mhs["nama"] ?></li>
			<li>NRP : <?= $mhs["nrp"] ?></li>
			<li>Jurusan : <?= $mhs["jurusan"] ?></li>
			<li>Email : <?= $mhs["email"] ?></li>
		</ul>
	<?php endforeach; ?>



</body>
</html>