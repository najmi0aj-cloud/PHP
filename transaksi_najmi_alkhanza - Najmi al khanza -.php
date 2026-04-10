<?php
$namaToko = "Minimarket Najmi";                 // Tipe data teks
$lokasiToko = "Jl. Laswi Kp. Baru Pasarkemis";  // Tipe data teks
$namaKasir = "Najmi Alkhanza";                  // Tipe data teks
$tanggalTransaksi = "10 Maret 2026";            // Tipe data teks
$nomorTransaksi = "NA001";                      // Tipe data teks

$namaProduk1 = "Beras 5kg";                     // Tipe data teks
$hargaProduk1 = 75000;                          // tipe data angka
$jumlahProduk1 = 1;                             // Tipe data angka

$namaProduk2 = "Minyak Goreng 1L";              // Tipe data teks
$hargaProduk2 = 18000;                          // Tipe data angka
$jumlahProduk2 = 2;                             // Tipe data angka

$namaProduk3 = "Gula 1kg";                      // Tipe data teks
$hargaProduk3 = 14000;                          // Tipe data angka
$jumlahProduk3 = 3;                             // Tipe data angka

$totalProduk1 = $hargaProduk1 * $jumlahProduk1;                 // Operator perkalian
$totalProduk2 = $hargaProduk2 * $jumlahProduk2;                 // Operator perkalian
$totalProduk3 = $hargaProduk3 * $jumlahProduk3;                 // Operator perkalian

$totalBelanja = $totalProduk1 + $totalProduk2 + $totalProduk3;  // Operator penjumlahan

$diskon = 10000;                                // Tipe data angka 
$pajakPersen = 11;                              // Tipe data angka
$biayaPlastik = 2000;                           // Tipe data angka

$pajak = ($totalBelanja * $pajakPersen) / 100;                  // Operator perkalian dan pembagian. Hasil dari pembagian adalah tipe data desimal
$setelahDiskon = $totalBelanja - $diskon;                       // Operator pengurangan. Jika diskon lebih besar hasil menjadi minus
$totalAkhir = $setelahDiskon + $pajak + $biayaPlastik;          // Operator penjumlahan
$uangBayar = 200000;
$kembalian = $uangBayar - $totalAkhir;                          // Operator pengurangan

echo "<h2>$namaToko</h2>";
echo "Nama kasir: $namaKasir <br>";
echo "Tgl. transaksi: $tanggalTransaksi <br>";
echo "No. transaksi: $nomorTransaksi <br>";
echo "Lokasi: $lokasiToko <hr>";

echo "$namaProduk1 ($jumlahProduk1 x $hargaProduk1) = Rp $totalProduk1 <br>";
echo "$namaProduk2 ($jumlahProduk2 x $hargaProduk2) = Rp $totalProduk2 <br>";
echo "$namaProduk3 ($jumlahProduk3 x $hargaProduk3) = Rp $totalProduk3 <br>";

echo "<hr>";
echo "Total Belanja: Rp $totalBelanja <br>";
echo "Diskon: Rp $diskon <br>";
echo "Pajak (11%): Rp $pajak <br>";
echo "Biaya Plastik: Rp $biayaPlastik <br>";
echo "<strong>Total Akhir: Rp $totalAkhir</strong> <br>";
echo "Bayar: $uangBayar <br>";
echo "Kembalia: $kembalian";
?>
