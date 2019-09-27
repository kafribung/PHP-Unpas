<?php 
//Koneksi kedatabase
$db= mysqli_connect("localhost", "root", "", "phpdasar");
//Ambil data dari tabel  mahasiswa //query data mahasisawa
$result= mysqli_query($db,"SELECT * FROM mahasiswa");

//Untuk mengecek apakah qurey error atau tidak
if (!$result) {
	echo mysqli_error($db);
}

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
		<?php while ($row= mysqli_fetch_assoc($result)) :?>
		<tr>
			<td><?= $i ?></td>
			<td>
				<a href="">ubah</a> |
				<a href="">hapus</a>
			</td>
			<td>
				<img src="img/<?php echo($row["gambar"]) ?>" width="50" alt="Tidak muncul">
			</td>
			<td><?php echo $row["nim"]; ?></td>
			<td><?php echo $row["nama"]; ?></td>
			<td><?php echo $row["email"]; ?></td>
			<td><?php echo $row["jurusan"]; ?></td>
		</tr>
		<?php $i++; ?>
		<?php endWhile; ?>
	</table>
</body>
</html>