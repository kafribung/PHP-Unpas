<?php 
//array adalah varibel yang dapat menamoung lebih dari satu nilai dan memiliki index
//array tidak dapat dicetak oleh echo, tapi dicetak oleh var_dump dan print_r
//echo digunakan hanya untuk menampikan 1 index
$hari =["senin","selasa","rabu"];
$bulan =["januari","februari","maret"];
$array =[999,"inr","hitam emas"];

//Mencetak array dilayar
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
echo $array[0];

//Menambah elemen array
$hari[]= "kamis";
echo "<br>";
var_dump($hari);
ec
?>