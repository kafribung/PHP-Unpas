<?php
require 'phpMySql2Function.php'; 
if(isset($_POST["login"])) {
	//ambil data dari username & password
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result =mysqli_query($conn, "SELECT * FROM users WHERE username= '$username'");
	if (mysqli_num_rows($result) == 1) {
		// cek password
		$row = mysqli_fetch_assoc($result);
		var_dump($row);
		die;
		if	(password_verify($password, $row["password"])) {
			header('Location:phpMySql2.php');
			exit;
		}
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
	<h1>Silahkan Login!</h1>
	
	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<button type="submit" name="login">Login</button>
			</li>
		</ul>
	</form>
	
</body>
</html>