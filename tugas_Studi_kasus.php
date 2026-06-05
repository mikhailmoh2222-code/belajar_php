<?php
$umur = 23;

if ($umur >= 18) 
    echo "kamu sudah dewasa";
else 
    echo "kamu masih anak-anak";

echo "<br/>";

$panjang = 22;
$lebar = 0.4;
$luas = $panjang * $lebar;
echo "luas persegi panjang adalah " . $luas . "<br/>";

$alas = 11;
$tinggi = 7;
$luasSegitiga = 0.5 * $alas * $tinggi;
echo "luas segitiga adalah " . $luasSegitiga . "<br/>";

$username = "admin 1";
$password = "xYe3ki8vP2";

if ($username === "admin 1" && $password === "xYe3ki8vP2") 
    echo "login berhasil";
else 
    echo "login gagal";