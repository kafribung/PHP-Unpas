<?php 
// Koneksi DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
//Cek apakah tombol telah diklik
if ( isset($_POST["submit"]) ){
	//Ambil data
	$nama = $_POST["nama"];
	$nim  = $_POST["nim"];
	$email= $_POST["email"];
	$jurusan= $_POST["jurusan"];
	$gambar= $_POST["gambar"];

	//Memasukkan data ke Query
	$query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$email', '$jurusan', '$gambar' )";
	mysqli_query($conn, $query);

	//cek query
	if (mysqli_affected_rows($conn) > 0) {
		echo "<h6>Data berhasil diinput</h6>";
	} else {
		echo "<h6>Terjadi Kesalahan</h6>";
		echo mysqli_error($conn);
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
				<input type="text" name="nama" id="nama">
			</li>
			<li>
				<label for="nim">NIM :  </label>
				<input type="text" name="nim" id="nim">
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email">
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan">
			</li>
			<li>
				<label for="gambar">Gambar : </label>	
				<input type="gambar" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah</button>
			</li>
		</ul>
	</form>


</body>
</html>