<?php 
//standar Output :
//echo , print (sama saja)
//print_r (bisa cetak string bisa cetak array)
//var_dump (cetak tipe data dan keterang string)
	echo "Kafri Bung";
	print("Belaja");
	print_r("Lagi");
	var_dump("PHP");

	echo true;
	echo false;

	// Penulisan sintaxt PHP :
	// 1. PHP didalam html
	// 2. HTML didalam PHP (Tdk disarankan)

	$nama = "bung";


	//Variabel
	$nama2 = "praja";
	echo "nama saya $nama2"; // kalau menggunakan string 1 akan dibaca dollar

	// Operatror
	// 1.Operator Aritmatika (+, - , / , *, %)
		echo 2 + 4;
	// 2.Operator Concatenation
		echo $nama ." ". $nama2;
	//3.Operator Asiggment (=, +=, -=, /=, *= dan .=)
		$a ="Saya";
		$a .=" ";
		$a .= "Belajar";
		echo "$a";
	//4.Operator Perbandingan (<,>,<=,>=, ==, !=) 
	//5.Operator Indentitas (===, !==)
		var_dump(1 === "1" );
	// 6.Operator Logika (&&, || , !)
		var_dump (1 < 10 && 2 == 2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Hi <?php echo $nama; ?></h1>

	<?PHP 
		echo "<h1>hi Bung Cafry</h1>";
	?>
</body>
</html>