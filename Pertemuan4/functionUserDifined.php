<?php 
function nama($tiba="datang", $nama="admin"){
	return "Selemat $tiba, $nama";
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Defined Function</title>
</head>
<body>
	<h1><?php echo nama("pagi") ?></h1>
</body>
</html>