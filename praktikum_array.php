<?php
// ini cara pertama membuat array 
$siswa = array ("najmi","Mingyu","scoups","joshua","vernon",17,true,0.5);
echo "siswa ke 3 adalah $siswa[2]";

// ini cara kedua membuat array
$buah = ["mangga","jeruk","apel"];
echo "<pre";
print_r($buah);
echo "</pre>";

$buah[] = "durian"; // menambahkan elemen kedalam array
//array_push
array_push($buah,"manggis","alpukat");
echo "<pre>";
print_r($buah);
echo "</pre>";

// menambahkan fungsi unset
unset($buah[5]);
echo "<pre>";
print_r($buah);
echo "</pre";

//menambahkan elemen array ke paling awal menggunakan perintah unshift

array_unshift($buah,"lengkeng");
echo "<pre>";
print_r($buah);
echo "</pre>";

sort($buah);
echo "<pre>";
print_r($buah);
echo "</pre>";

//array di dalam array
$siswa [
    ["mingyu", 20, "bandung"],
    ["scoups", 21, "jakarta"],
    ["vernon", 22, "bekasi"],
    
];

echo $siswa[0][0];
echo "<br>";
echo $siswa[0][2];
echo "<br>";
echo "nama siswa ke 3 adalah". $siswa[2][1];
