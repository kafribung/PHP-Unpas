<?php 
$nilai = [3,1,5,6,8,2,3];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array</title>
	<style>
	.kotak {
		width: 50px;
		height: 50px;
		text-align: center;
		line-height: 50px;
		background-color: silver;
		margin: 20px 3px 0;
		float: left;
	}
	.clear {
		clear: both;
	}
</style>
</head>
<body>
	<?php for ($i=0; $i < count($nilai); $i++) : ?>
		<div class="kotak"><?php echo $nilai[$i]; ?></div>
	<?php endFor ?>
	
	<div class="clear"></div>

	<?php foreach ($nilai as $nil) : ?>
		<div class="kotak"><?= $nil?></div>
	<?php endForeach ?>
</body>
</html>