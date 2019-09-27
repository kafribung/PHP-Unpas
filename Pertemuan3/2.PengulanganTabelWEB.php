<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Beljar PHP</title>
</head>
<body>
	<table border="2px" cellpadding="3px" cellspacing="0">
		<?php 
			for ($i=1; $i<=3; $i++) { 
				echo "<tr>";
					for ($x=1; $x <= 5 ; $x++) { 
						echo "<td>$i,$x</td>";
					}
				echo "</tr>";
			}
		 ?>
	</table>

	<table border="3" cellspacing="0" cellpadding="2">
		<?php for ($i=1; $i <=3 ; $i++) : ?>
			<tr>
				<?php for ($x=1; $x <=5 ; $x++) :?>
					<td><?= "$i,$x" ?></td>
				<?php endFor ?>
			</tr>
		<?php endFor ?>
	</table>
</body>
</html>