<?php 
//Koneksi kedatabase
require 'phpMySql2Function.php';

$mahasiswa = query("SELECT * FROM mahasiswa");





//Ambil data (fetch) dari tabel mahasiswa ada 4:
//1.mysqli_fetch_row() Mengembalikan array numerik
//2.mysqli_fetch_assoc() Mengembalikan array asosiatif
//3.mysqli_fetch_array() Mengembalikan keduanya 
//4.mysqli_fetch_object() Mengembalikan objek var_dump($mhs->id);


// while ($mhs = mysqli_fetch_assoc($result)) {
// 	var_dump($mhs);	
// };


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<a href="tambahData2.php" target="_blank">Tambah data mahasiswa</a>
	<br><br>
	<table border="2" cellspacing="0" cellpadding="10">
		<tr>
			<th>No</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
		<?php $i=1; ?>
		<?php foreach ($mahasiswa as $mhs) : ?>
			<tr>
				<td><?= $i ?></td>
				<td>
					<a href="">ubah</a> |
					<a href="hapusData.php?id=<?= $mhs["id"];?>">hapus</a>
				</td>
				<td>
					<img src="img/<?php echo($mhs["gambar"]) ?>" width="50" alt="Tidak muncul">
				</td>
				<td><?php echo $mhs["nim"]; ?></td>
				<td><?php echo $mhs["nama"]; ?></td>
				<td><?php echo $mhs["email"]; ?></td>
				<td><?php echo $mhs["jurusan"]; ?></td>
			</tr>
			<?php $i++; ?>
			<?php endForeach; ?>
		</table>
	</body>
	</html>