<?php
// PEMILIHAN METODE PEMBAYARAN
$metode = "transfer";

switch ($metode) {
    case "transfer":
        echo "Silakan transfer ke rekening BCA 123-456.";
        break;
    case "ewallet":
        echo "Silakan bayar melalui OVO/DANA.";
        break;
    case "cod":
        echo "Bayar di tempat saat barang tiba.";
        break;
    default:
        echo "Metode pembayaran tidak dikenali.";
}
?>