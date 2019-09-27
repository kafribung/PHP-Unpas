<?php 
// Koneksi DBMS
require 'phpMySql2Function.php';

// Ambil data dari URL
$id = $_GET["id"];

// query ubah 
$mhs = query("SELECT * FROM mahasiswa WHERE id= $id")[0];


//Cek apakah tombol telah diklik
if ( isset($_POST["submit"]) ){
	// cek apakah data telah berhasil diubah
	if (ubah($_POST) > 0) {
		echo "
			  <script>
				alert('Data berhasil diubah');
				document.location.href = 'phpMySql2.php';
			  </script>

			 ";
	} else {
		echo "
			<script>
				alert('Data gagal diubah!');
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
	<title>Update</title>
</head>
<body>
	<h1>Ubah data mahsiswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
				<input type="hidden" name="gambarLama" value="<?= $mhs["gambar"] ?>">
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required="" value="<?= $mhs["nama"];?>">
			</li>
			<li>
				<label for="nim">NIM :  </label>
				<input type="text" name="nim" id="nim" required="" value="<?= $mhs["nim"];?>">
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email" required="" value="<?= $mhs["email"];?>">
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" required="" value="<?= $mhs["jurusan"]; ?>">
			</li>
			<li>
				<label for="gambar">Gambar : </label>	
				<img src="img/<?= $mhs["gambar"] ?>" width=100>
				<br>
				<input type="file" name="gambar" id="gambar"];?>

			</li>
			<li>
				<br>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>
	</form>


</body>
</html>