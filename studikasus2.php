<?php
// PENENTUAN GRADE NILAI
$nilai = 82;

if ($nilai >= 85) {
    $grade = "A";
} elseif ($nilai >= 70) {
    $grade = "B";
} elseif ($nilai >= 55) {
    $grade = "C";
} elseif ($nilai >= 40) {
    $grade = "D";
} else {
    $grade = "E";
}

echo "Nilai Anda: $nilai<br>";
echo "Grade: $grade";
?>