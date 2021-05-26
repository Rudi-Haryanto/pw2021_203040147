<?php
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {


	// cek apakah data berhasil di tambahkan atau tidak
	if (tambah($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Tambah data barang</title>
	<style>
		body {
			background-image: url(img/barangg.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>

<body>
	<div class="body"></div>
	<h1>Tambah data barang<h1>

			<form action="" method="post" enctype="multipart/form-data">
				<ul>
					<li>
						<label for="nama">Nama : </label>
						<input type="text" name="nama" id="nama" required>
					</li>
					<li>
						<label for="bahan">BAHAN : </label>
						<input type="text" name="bahan" id="bahan" required>
					</li>
					<li>
						<label for="size">SIZE : </label>
						<input type="text" name="size" id="size">
					</li>
					<li>
						<label for="harga">HARGA : </label>
						<input type="text" name="harga" id="harga">
					</li>
					<li>
						<label for="gambar">Gambar : </label>
						<input type="file" name="gambar" id="gambar">
					</li>
					<li>
						<button type="submit" name="submit">Tambah Data!</button>
					</li>
				</ul>


			</form>

</body>

</html>