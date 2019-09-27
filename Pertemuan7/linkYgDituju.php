<?php 
//cek apakah data ada yang dikirim atau tidak
if (!isset($_GET["nama"]) || 
	!isset($_GET["nim"]) || 
	!isset($_GET["jurusan"])) {
	header("Location: variabelScope&SuperGlobal.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calon Programmer Muda</title>
</head>
<body>
	<h1>Nama-nama programmer</h1>
	<ul>
		<li><?php echo $_GET["nama"] ?></li>
		<li><?php echo $_GET["nim"] ?></li>
		<li><?php echo $_GET["jurusan"] ?></li>

	</ul>
	<a href="variabelScope&SuperGlobal.php">Halaman pertama</a>
</body>
</html>