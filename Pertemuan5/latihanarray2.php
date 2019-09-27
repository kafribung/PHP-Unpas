<?php 

//Array Numeric (array yang memilik index yang dimulai dari 0)
//Kekurangan yaitu ketika data di tukar maka user akan kebingungan
$mahasiswa =[
	["kafri Bung","60900117001","Sistem Informasi", "cumlaude"],
	["Dandi", "60900117015", "Teknik Informatika", ""],
	["Yassar", "60200117003", "Ilmu Komputer", ""],
	["Suarmin", "60200119004", "Peternakan Komputer", ""]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan Array 2</title>
</head>
<body>
	<h1>Nama Mahasiswa Fakultas SAINTEK</h1>
	<?php foreach ($mahasiswa as $mhs) : ?>
		<ul>
			<li>Nama :<?= $mhs[0] ?></li>
			<li>NIM:<?= $mhs[1] ?></li>
			<li>Jurusan:<?= $mhs[2] ?></li>
			<li>Prestasi:<?= $mhs[3] ?></li>

		</ul>
	<?php endForeach ?>
</body>
</html>