<?php
$namaToko = "Minimarket Najmi";
$lokasiToko = "Jl. Laswi Kp. Baru Pasarkemis";
$namaKasir = "Najmi Alkhanza";
$tanggalTransaksi = "10 Maret 2026";
$nomorTransaksi = "NA002";

$namaProduk1 = "Beras 3kg";
$hargaProduk1 = 75000;
$jumlahProduk1 = 1;

$namaProduk2 = "Minyak Goreng 1L";
$hargaProduk2 = 18000;
$jumlahProduk2 = 7;

$namaProduk3 = "Gula 1kg";
$hargaProduk3 = 14000;
$jumlahProduk3 = 2.5;

$namaProduk4 = "Daging 1kg";
$hargaProduk4 = 50000;
$jumlahProduk4 = 5;

$namaProduk5 = "Tepung 1kg";
$hargaProduk5 = 17000;
$jumlahProduk5 = 1;

$namaProduk6 = "Mie Instan 1dus";
$hargaProduk6 = 104000;
$jumlahProduk6 = 2;

$totalProduk1 = $hargaProduk1 * $jumlahProduk1;
$totalProduk2 = $hargaProduk2 * $jumlahProduk2;
$totalProduk3 = $hargaProduk3 * $jumlahProduk3;
$totalProduk4 = $hargaProduk4 * $jumlahProduk4;
$totalProduk5 = $hargaProduk5 * $jumlahProduk5;
$totalProduk6 = $hargaProduk6 * $jumlahProduk6;

$totalBelanja = $totalProduk2 + $totalProduk6 + $totalProduk4 + $totalProduk5 + $totalProduk3 + $totalProduk1;

$diskon = 0;
$pajakPersen = 11;
$biayaPlastik = 2000;

$pajak = ($totalBelanja * $pajakPersen) / 100;
$setelahDiskon = $totalBelanja - $diskon;
$totalAkhir = $setelahDiskon + $pajak + $biayaPlastik;
$uangBayar = 800000;
$kembalian = $uangBayar - $totalAkhir;

echo "<h2>$namaToko</h2>";
echo "Nama kasir: $namaKasir <br>";
echo "Tgl. transaksi: $tanggalTransaksi <br>";
echo "No. transaksi: $nomorTransaksi <br>";
echo "Lokasi: $lokasiToko <hr>";

echo "$namaProduk2 ($jumlahProduk2 x $hargaProduk2) = Rp $totalProduk2 <br>";
echo "$namaProduk6 ($jumlahProduk6 x $hargaProduk6) = Rp $totalProduk6 <br>";
echo "$namaProduk4 ($jumlahProduk4 x $hargaProduk4) = Rp $totalProduk4 <br>";
echo "$namaProduk5 ($jumlahProduk5 x $hargaProduk5) = Rp $totalProduk5 <br>";
echo "$namaProduk3 ($jumlahProduk3 x $hargaProduk3) = Rp $totalProduk3 <br>";
echo "$namaProduk1 ($jumlahProduk1 x $hargaProduk1) = Rp $totalProduk1 <br>";

echo "<hr>";
echo "Total Belanja: Rp $totalBelanja <br>";
echo "Diskon: Rp $diskon <br>";
echo "Pajak (11%): Rp $pajak <br>";
echo "Biaya Plastik: Rp $biayaPlastik <br>";
echo "<strong>Total Akhir: Rp $totalAkhir</strong> <br>";
echo "Bayar: $uangBayar <br>";
echo "Kembalian: $kembalian";
?>
