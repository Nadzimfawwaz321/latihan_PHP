<?php
// CEK DISKON BELANJA
$totalBelanja = 250000;

if ($totalBelanja >= 200000) {
    $diskon = 0.1 * $totalBelanja;
    echo "Total belanja: Rp $totalBelanja<br>";
    echo "Diskon Anda: Rp $diskon";
} else {
    echo "Total belanja: Rp $totalBelanja<br>";
    echo "Belum dapat diskon.";
}
?>