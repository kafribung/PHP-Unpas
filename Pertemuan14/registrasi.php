<?php 
require 'phpMySql2Function.php';

	if (isset($_POST["registrasi"])) {
		if (registrasi($_POST) > 0) {
			echo "
				<script>
					alert ('Registrasi Berhasil');
				</script>";
		} else {
			echo mysqli_error($conn);
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrasi</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>
<body>
	<h1>Registrasi</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username</label>
				<input type="text" name="username" id="username" autocomplete="off">
			</li>
			<li>
				<label for="password">Password</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<label for="password2">Konfirmasi Password</label>
				<input type="password" name="password2" id="password2">
			</li>
			<li>
				<button type="submit" name="registrasi">Daftar!</button>
			</li>
		</ul>
	</form>
</body>
</html>