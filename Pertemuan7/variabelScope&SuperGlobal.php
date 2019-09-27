<?php 
//variabe scope atau jangkauan variabel
//x didalam function tidak akan dikenali, karena dia bersifat lokal
//agar dapat dikenalai maka kita harus menambahkan fungsi global

//Contoh variabel superglobals, (Intinya semua merupakan array asosiatif):
// 1.$_GET //Mengirim data menggunakan link dan menangkapnya menggunakan variabel $_GET
// 2.$_POST
// 3.$REQUEST
// 4.$SESSION
// 5.$COOKIE
// 6.$SERVER
// 7.$ENV
// $x=10;

// function tampilX(){
// 	global $x; // sehingga menjadi variabel global
// 	echo $x;
// }

// echo tampilX();

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
	<title>GET</title>
</head>
<body>
	<h1>Nama Mahasiswa</h1>
	<ul>
	<?php foreach ($mahasiswa as $mhs) :?>
		
			<li>
				<a href="linkYgDituju.php?nama=<?=$mhs["nama"];?>&nim=<?= $mhs["nim"];?>&jurusan=<?= $mhs["jurusan"];?>">
					<?= $mhs["nama"]; ?>	
				</a>
			</li>
		
	<?php endForeach ?>
	</ul>
</body>
</html>