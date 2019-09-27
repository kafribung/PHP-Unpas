<?php 
//Perikasa juka tombol telah diklik
if( isset($_POST["submit"]) ) {
	//Periksa password
	if ( $_POST["username"]=="admin" && $_POST["password"]=="root" ) {
		//direct ke link yang dituju
		header("Location:admin.php");
		exit;
	} else {
		//tampilkan pesan error
		$error = true;
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<?php if (isset($error)): ?>
		<p style="color: red; font-style: italic;">Username & Password salah</p>
	<?php endif ?>
	
	<h1>Login menggunakan akun anda</h1>
	<li>
		<form action="admin.php" method="post">
			<label for="username">Username : </label>
			<input type="text" name="username" id="username">
			<br><br>
			<label for="password">Password : </label>
			<input type="password" name="password" id="password">
			<br><br><br>
			<button type="submit" name="submit">Masuk</button>
		</li>
	</form>
</body>
</html>