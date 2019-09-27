
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Post</title>
</head>
<body>
	<!-- tidak berfungsi jika action di aktifkan -->
	<?php if (isset($_POST["submit"])): ?>
		<h1>Selamat datang, <?= $_POST["nama"] ?></h1>,
	<?php endif ?>
	
	<form action="" method="post">
		Masukkan Nama <input type="text" name="nama">
		<br>
		<button type="submit">Kirim</button>	
	</form>
	
</body>
</html>