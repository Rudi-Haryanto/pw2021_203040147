<?php
// cek apakah tidak ada data di $_GET
if (
	!isset($_GET["nama"]) ||
	!isset($_GET["bahan"]) ||
	!isset($_GET["size"]) ||
	!isset($_GET["harga"]) ||
	!isset($_GET["gambar"])
) {
	// redirect
	header("Location: latihan1.php");
	exit;
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Detail Barang</title>
</head>

<body>

	<ul>
		<li><img src="img/<?= $_GET["gambar"]; ?>"></li>
		<li><?= $_GET["nama"]; ?></li>
		<li><?= $_GET["bahan"]; ?></li>
		<li><?= $_GET["size"]; ?></li>
		<li><?= $_GET["harga"]; ?></li>
	</ul>

	<a href="latihan1.php">kembali ke daftar Barang</a>

</body>

</html>