<?php 
//array asosiatif adalah array yang indexnya merupakan string
//Jadi walaupun datanya dibolak balik tetap dapat terbaca
$mahasiswa = [
	["nama"=>"Fuad Adnansyah", "nim"=>"60900117002", "jurusan"=>"Sistem Informasi", "gambar"=>"bung.jpg"],
	["nama"=>"Suarmin", "nim"=>"60900117003", "jurusan"=>"Sistem Informasi"],
	["nama"=>"Yassar", "nim"=>"60900117004", "jurusan"=>"Sistem Informasi"],
	["nama"=>"Alea", "jurusan"=>"Sistem Informasi","nim"=>"60900117005"]


];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array Asosiatif</title>
</head>
<body>
	<h1>Nama Mahasiswa SI</h1>
	<?php foreach ($mahasiswa as $mhs) :?>
		<ul>
			<li>
				<img src="img/<?= $mhs["gambar"] ?>" alt="1 ji gambar ku input">
			</li>
			<li><?= $mhs["nama"] ?></li>
			<li><?= $mhs["nim"] ?></li>
			<li><?= $mhs["jurusan"] ?></li>

		</ul>
	<?php endForeach ?>
</body>
</html>