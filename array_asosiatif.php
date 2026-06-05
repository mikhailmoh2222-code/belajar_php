<?php
$siswa = array ("nama" => "mikhail", "usia" => 16, "kelas" => "X", "jurusan" => "rekayasa perangkat lunak");

echo "nama:" . $siswa["nama"] . "<br/>";
echo "usia:" . $siswa["usia"] . "tahun <br/>";
echo "kelas:" . $siswa["kelas"]. "<br/>";
echo "jurusan:" . $siswa["jurusan"] . "<br/>";

"<br/>";

$buah = array("apel", "kemesek", "sirsak", "anggur");

foreach ($buah as $item) {
    echo "buah:" . $item . "<br/>";
}
?>