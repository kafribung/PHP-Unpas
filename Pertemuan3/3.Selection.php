<?php 
//Pengkondisian
//1.if else
//2.if else if else
//3.ternary
//4.switch

$i =50;

if ($i < 10) {
	echo "$i lebih kecil dari 10";
} else if ($i == 10) {
	echo "$i sama dengan 10";
}else {
	echo "Tidak ada pilihan";
}


switch ($i) {
	case 100:
		echo "Angka Seratus";
		break;
	case 50:
		echo "Angka 50";
		break;
	default:
		echo "Angka Bukan Seratus";
		break;
}
 ?>
