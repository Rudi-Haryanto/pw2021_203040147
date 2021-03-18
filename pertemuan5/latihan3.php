<?php 
$mahasiswa = [
	["Rudi Haryanto", "203040147", "Teknik Informatika", "rudiharyantovrt99@gmail.com"],
	["joni", "203040146", "Teknik Informatika", "jonivrt99@gmail.com"]

];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
 
<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
	<li><?= $mhs[0]; ?></li>
	<li><?= $mhs[1]; ?></li>
	<li><?= $mhs[2]; ?></li>
	<li><?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>



 </body>
 </html>