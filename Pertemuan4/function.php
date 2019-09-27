<?php 
//built-function
//user-defined function

//Waktu & Tanggal : (time(), date(), mktime())
//String : strlen(Panjang String), strcmp(membandingkan 2 string), explode(memecah string menj. array), htmlspecialchars(Menjaga agar website aman)
//Utility : var_dump(variabel menampilkan jenis tipe data, dan panjangnya), isset(apakah variabel sudah pernah dinbikin atau belum,boolean), empty(apakah variabel kosong at tidak), die(memberhentikan program), sleep(memberhentikan sementara)


//WAKTU & TANGGAL
// date() l = namaHari, d = day m/M/j(angka)= mount, y = year
echo date("l, d-j-y");
echo "<br>";
// time (waktu)
// UNIX timestamp / EPOCH time mulai terhitung sejak 1 Januari 1970
echo date("d-M-Y", time()+60*60*24*100);

// mktime() untuk membuat detik sendiri
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun

echo date("y", mktime(0,0,0,7,7,1999));

?>