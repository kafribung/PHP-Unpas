<?php 
// Koneksi DBMS
require 'phpMySql2Function.php';

//Cek apakah tombol telah diklik
if ( isset($_POST["submit"]) ){
	// cek apakah data telah berhasil ditambahkan
	if (tambah($_POST) > 0) {
		echo "
			  <script>
				alert('Data berhasil ditambahkan');
				document.location.href = 'phpMySql2.php';
			  </script>

			 ";
	} else {
		echo "
			<script>
				alert('Data gagal ditambahkan!');
				document.location.href = 'phpMySql2.php';
			 </script>

			";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create</title>
</head>
<body>
	<h1>Tambah data mahsiswa</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required="">
			</li>
			<li>
				<label for="nim">NIM :  </label>
				<input type="text" name="nim" id="nim" required="">
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email" required="">
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" required="">
			</li>
			<li>
				<label for="gambar">Gambar : </label>	
				<input type="gambar" name="gambar" id="gambar" required="">
			</li>
			<li>
				<button type="submit" name="submit">Tambah</button>
			</li>
		</ul>
	</form>


</body>
</html>