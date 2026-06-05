<?php
// Menghitung total belanja dengan diskon

function hitungTotalBelanja($harga, $jumlah) {
    $total = $harga * $jumlah;
    return $total;
}

function berikanDiskon($total, $diskon) {
    $nilai_diskon = $total * $diskon;
    $total_diskon = $total - $nilai_diskon;
    return $total_diskon;
}

$harga_barang = 100;
$jumlah_barang = 5;
$diskon_persen = 0.1; // 10% diskon

$total_harga = hitungTotalBelanja($harga_barang, $jumlah_barang);
$total_setelah_diskon = berikanDiskon($total_harga, $diskon_persen);

echo "Total belanja: " . $total_harga . "<br>";
echo "Total setelah diskon: " . $total_setelah_diskon;
?>