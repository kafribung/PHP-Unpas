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
	
	$gambar= upload();
	if( !upload() ){
		return false;
	}
	//Memasukkan data ke Query
	$query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$email', '$jurusan', '$gambar' )";
	mysqli_query($conn, $query);


	return mysqli_affected_rows($conn);
}

function upload(){
	$namaFile = $_FILES["gambar"]["name"];
	$tmpNama = $_FILES["gambar"]["tmp_name"];
	$error = $_FILES["gambar"]["error"];
	$ukuran = $_FILES["gambar"]["size"];

	// cek apakah file sudah diupload
	if ($error === 4) {
		echo "
			 <script>
			 	alert('Gambar Belum diupload!');
			 </script>

		";
		return false;
	}

	// cek ekstensi file benar
	$ekstensiGambarValid =['jpg','png','jpeg'];
	$ekstensiGambar= explode('.', $namaFile);
	$ekstensiGambar= strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "
			 <script>
			 	alert('Yang di upload bukan gambar!');
			 </script>
		";
		return false;
	}

	//cek kalau terlalu besar
	if ($ukuran > 2000000) {
		echo "
			 <script>
			 	alert('Gambar terlalu besar!');
			 </script>
		";
		return false;
	}

	//Lolos pengecekan gambar siap diuload
	// generate gambar file baru
	$namaBaru = uniqid();
	$namaBaru .= '.';
	$namaBaru .= $ekstensiGambar;

	move_uploaded_file($tmpNama, 'img/'. $namaBaru);

	return $namaBaru;




}
function hapus($id) {
	global $conn;

	$query = "DELETE FROM mahasiswa WHERE id= $id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function ubah($data) {
	global $conn;
	$id = $data["id"];
	//Tangkap data
	$nama = htmlspecialchars($data["nama"]);
	$nim  = htmlspecialchars($data["nim"]);
	$email= htmlspecialchars($data["email"]);
	$jurusan= htmlspecialchars($data["jurusan"]);
	$gambarLama= htmlspecialchars($data["gambarLama"]);

	if ($_FILES["gambar"]["error"]== 4) {
		$gambar = $$gambarLama;
	} else {
		$gambar = upload();
	}
	//Memasukkan data ke Query
	$query = "UPDATE mahasiswa SET nama= '$nama', nim= '$nim', email= '$email', jurusan='$jurusan', gambar ='$gambar' WHERE id= $id";
	mysqli_query($conn, $query);


	return mysqli_affected_rows($conn);
}

function cari($keyword) {
	global $conn;
	$query = "SELECT * FROM mahasiswa WHERE 
				nama LIKE '%$keyword%' OR
				nim LIKE '%$keyword%' OR
				email LIKE '%$keyword%' OR
				jurusan LIKE '%$keyword%' OR
				gambar LIKE '%$keyword%'
			  " ;
	return query($query);

}	


?>