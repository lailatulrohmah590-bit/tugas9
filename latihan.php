<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<h2>Latihan Prediksi Output & Debugging</h2>";


echo "<h3>A. Hasil Prediksi Output</h3>";


$a = 10;
$b = 3;
echo "Soal 1: " . ($a % $b) . "<br>";


$x = 5;
$y = "5";
echo "Soal 2 (==): ";
var_dump($x == $y); 
echo "<br>Soal 2 (===): ";
var_dump($x === $y);
echo "<br>";


$m = true;
$n = false;
echo "Soal 3: ";
var_dump($m && !$n); 
echo "<br>";


$p = 10;
$p += 5;
$p *= 2;
echo "Soal 4: " . $p . "<br>"; 


$i = 5;
echo "Soal 5 (++i): " . (++$i) . "<br>"; 
echo "Soal 5 (i++): " . ($i++) . "<br>"; 
echo "Soal 5 (nilai akhir i): " . $i . "<br><br>"; 



echo "<h3>B. Hasil Perbaikan Debugging</h3>";


$harga = 15000;
$jumlah = 2;
$total = $harga * $jumlah;
echo "Debugging 1 - Total: Rp " . $total . "<br>";


$nilai = 80;
if ($nilai == 80) {
    echo "Debugging 2: Nilai sama dengan 80<br>";
}


$umur = 18;
$ktp = true;
if ($umur >= 17 && $ktp) {
    echo "Debugging 3: Boleh membuat KTP<br>";
}
?>