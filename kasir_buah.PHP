<?php

$jumlahApel = 20;  // Variabel Apel //
$hargaApel = 15000;  // Variabel Apel //

$jumlahJeruk = 7;  // Variabel Jeruk //
$hargaJeruk = 20000;  // Variabel Jeruk //

$totalApel = $jumlahApel * $hargaApel;
$totalJeruk = $jumlahJeruk * $hargaJeruk;

$totalBelanja = $totalApel + $totalJeruk;

$diskon = $totalBelanja * 10 / 100;  // Variabel Diskon //

$totalBayar = $totalBelanja - $diskon;

$kotakApel = ($jumlahApel = 3);  // Variabel Kotak Apel //

$sisaApel = $jumlahApel % 3;

$uangBayar = 100000;  // Variabel Uang Pembayaran //

$kembalian = $uangBayar - $totalBayar;

echo "Total Harga Apel : Rp. $totalApel";
echo "Total Harga Jeruk : Rp. $totalJeruk";
echo "Total Harga Sebelum Diskon : Rp. $totalBelanja";
echo "Diskon 10% : Rp. $diskon";
echo "Total Bayar Setelah Diskon : Rp. $totalBayar";

echo "Jumlah Kotak Apel : $kotakApel.kotak";
echo "Sisa Apel : $sisaApel.buah";
echo "Uang Pembayaran : Rp.$uangBayar";
echo "Uang Kembalian : Rp. $kembalian";

?>