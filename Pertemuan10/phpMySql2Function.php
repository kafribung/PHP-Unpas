<?php 
//koneksi
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//function query 
function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows =[];

	while ($row = mysqli_fetch_assoc($result)) {
	 	$rows[] = $row;
	 }
	return $rows; 

}

function tambah($data) {
	global $conn;
	//Tangkap data
	$nama = htmlspecialchars($data["nama"]);
	$nim  = htmlspecialchars($data["nim"]);
	$email= htmlspecialchars($data["email"]);
	$jurusan= htmlspecialchars($data["jurusan"]);
	$gambar= htmlspecialchars($data["gambar"]);

	//Memasukkan data ke Query
	$query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$email', '$jurusan', '$gambar' )";
	mysqli_query($conn, $query);


	return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;

	$query = "DELETE FROM mahasiswa WHERE id= $id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

?>