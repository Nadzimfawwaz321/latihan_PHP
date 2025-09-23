<?php
// ==============================
// 1. Contoh Type Juggling
// ==============================
echo "<h3>1. Type Juggling (String jadi angka)</h3>";
$a = "10"; // String angka
$b = "5";  // String angka
$hasil = $a + $b; // PHP otomatis konversi ke integer
echo "a = \"$a\" dan b = \"$b\"<br>";
echo "a + b = $hasil (string angka dikonversi ke integer)";

// ==============================
// 2. Perbedaan / dan %
// ==============================
echo "<h3>2. Perbedaan Operator / dan %</h3>";
$x = 10;
$y = 3;
echo "$x / $y = " . ($x / $y) . " (hasil bagi biasa)<br>";
echo "$x % $y = " . ($x % $y) . " (sisa bagi/modulo)";

// ==============================
// 3. Menggabungkan string tugas1 dan tugas2 jadi "9080"
// ==============================
echo "<h3>3. Penggabungan String</h3>";
$tugas1 = 90;
$tugas2 = 80;
echo "Penggabungan \$tugas1 dan \$tugas2: " . $tugas1 . $tugas2; // Output: 9080

// ==============================
// Contoh tambahan: Single vs Double Quoted
// ==============================
echo "<h3>4. Single Quoted vs Double Quoted</h3>";
$string1 = 'Ini adalah string sederhana';
$string2 = "Halo, nama saya $string1"; // Variabel diproses
$string3 = 'Halo, nama saya $string1'; // Variabel tidak diproses

echo $string1 . "<br>";
echo $string2 . "<br>"; // Variabel diproses
echo $string3 . "<br>"; // Ditampilkan apa adanya
?>