<?php
//operator logika and, or & not
//yaitu dan, atau & bukan

$benar = true;
$salah = false;

$hasilDan = $benar && $salah; //hasilnya 0 atau kosong yaitu false
$hasilAtau = $benar || $salah; //hasilnya 1 yaitu true
$hasilBukan = !$benar; //hasilnya 1 yaitu true 

echo "hasil Dan" . $hasilDan;
echo "hasil Atau" . $hasilAtau;
echo "hasil Bukan" . $hasilBukan;
?>