<?php
// KATEGORI USIA
$umur = 25;

if ($umur < 13) {
    echo "Kategori: Anak-anak";
} elseif ($umur < 18) {
    echo "Kategori: Remaja";
} elseif ($umur < 60) {
    echo "Kategori: Dewasa";
} else {
    echo "Kategori: Lansia";
}
?>