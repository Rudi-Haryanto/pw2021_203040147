<?php
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if (isset($_POST["cari"])) {
	$mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Halaman Admin</title>
	<style>
		body {
			background-image: url(img/logo.jpeg);
			background-repeat: no-repeat;
			background-size: cover;

		}
	</style>
</head>

<body>
	<div class="body"></div>

	<a href="logout.php">Logout</a>

	<h1>Daftar Barang Myclothing</h1>

	<a href="tambah.php">Tambah Data Barang</a>
	<br></br>

	<form action="" method="post">

		<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
		<button type="submit" name="cari">Cari!</button>

	</form>
	<br>
	<table border="1" cellpadding="10" cellspacing="0">

		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Bahan</th>
			<th>Size</th>
			<th>Harga</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach ($mahasiswa as $row) : ?>
			<tr>
				<td><?= $i ?></td>
				<td>
					<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
					<a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin');">hapus</a>
				</td>
				<td><img src="img/<?php echo $row["gambar"]; ?>" width="50"></td>
				<td><?= $row["nama"]; ?></td>
				<td><?= $row["bahan"]; ?></td>
				<td><?= $row["size"]; ?></td>
				<td><?= $row["harga"]; ?></td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>

	</table>


</body>

</html>