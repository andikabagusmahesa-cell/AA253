<?php
function hitungLuasLingkaran($jari) {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

$jari = 7;
$hasil = hitungLuasLingkaran($jari);

echo "Luas lingkaran denfan jari-jari "
     . $jari . " adalah " . $hasil;
?>