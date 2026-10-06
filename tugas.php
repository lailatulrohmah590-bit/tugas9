<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


$namaBarang = "Buku Tulis";
$hargaSatuan = 5000;
$jumlahBeli = 7;


$subtotal = $hargaSatuan * $jumlahBeli;


$diskon = 0;
if ($subtotal > 30000) {
    $diskon = 0.10 * $subtotal;
}


$totalBayar = $subtotal - $diskon;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Program Kasir Sederhana</title>
</head>
<body>
    <h2>STRUK PEMBAYARAN KASIR</h2>
    <hr>
    <p><strong>Nama Barang:</strong> <?php echo $namaBarang; ?></p>
    <p><strong>Harga Satuan:</strong> Rp <?php echo number_format($hargaSatuan, 0, ',', '.'); ?></p>
    <p><strong>Jumlah Beli:</strong> <?php echo $jumlahBeli; ?></p>
    <p><strong>Subtotal:</strong> Rp <?php echo number_format($subtotal, 0, ',', '.'); ?></p>
    <p><strong>Diskon (10%):</strong> Rp <?php echo number_format($diskon, 0, ',', '.'); ?></p>
    <hr>
    <h3>Total Bayar: Rp <?php echo number_format($totalBayar, 0, ',', '.'); ?></h3>
</body>
</html>