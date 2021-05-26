<?php
// $_GET
$mahasiswa = [
	[
		"nama" => "Rudi Haryanto",
		"bahan" => "203040147",
		"size" => "rudiharyantovrt99@gmail.com",
		"harga" => "Teknik Informatika",
		"gambar" => "image.png"
	],
	[
		"nama" => "",
		"bahan" => "203040146",
		"size" => "monovrt99@gmail.com",
		"harga" => "Teknik Industri",
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
	<h1>Daftar Barang Myclothing</h1>
	<ul>
		<?php foreach ($mahasiswa as $mhs) : ?>
			<li>
				<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&bahan=<?= $mhs["bahan"]; ?>&size=<?= $mhs["size"]; ?>&harga=<?= $mhs["harga"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>

			</li>

		<?php endforeach; ?>
	</ul>


</body>

</html>