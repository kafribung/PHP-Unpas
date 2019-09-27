<?php 
//koneksi
$cons = mysqli_connect("localhost", "root", "", "phpdasar");

//function query 
function query($query) {
	global $cons;
	$result = mysqli_query($cons, $query);
	$rows =[];

	while ($row = mysqli_fetch_assoc($result)) {
	 	$rows[] = $row;
	 }
	return $rows; 

}

?>