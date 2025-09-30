<?php

// Kunci Jawaban (5 soal)
$kunci = ['B', 'A', 'D', 'C', 'B'];

// Jawaban Siswa telah dimodifikasi agar memiliki 4 jawaban benar.
$jawaban = ['B', 'A', 'D', 'C', 'A']; // 4 Benar, 1 Salah

// Data Siswa
$nama_siswa = "Mohammad Nadzim Fawwaz";

$skor_benar = 0;
$total_soal = count($kunci);

echo "--- Pemeriksaan Kuis ({$nama_siswa}) ---\n";

// Logika Perulangan (Looping)
for ($i = 0; $i < $total_soal; $i++) {

    // Logika Kontrol (Percabangan IF)
    if ($jawaban[$i] == $kunci[$i]) {
        // Jika cocok (BENAR):
        $skor_benar++;
        echo "Soal " . ($i + 1) . ": Jawaban Benar.\n";
    } else {
        // Jika tidak cocok (SALAH):
        echo "Soal " . ($i + 1) . ": Jawaban Salah (Kunci: {$kunci[$i]}).\n";
    }
}

echo "--- Hasil Akhir ---\n";

// Perhitungan Persentase
$persentase = ($skor_benar / $total_soal) * 100;
$lulus = 60; // Batas Lulus 60%

echo "Nama Siswa: {$nama_siswa}\n";
echo "Jumlah Jawaban Benar: {$skor_benar} dari {$total_soal}\n";
echo "Persentase Skor: {$persentase}%\n";

// Logika Kontrol Akhir (Penentuan Status Kelulusan)
if ($persentase >= $lulus) {
    echo "Status Kelulusan: SELAMAT! Anda DINYATAKAN LULUS.\n";
} else {
    echo "Status Kelulusan: MAAF. Anda DINYATAKAN TIDAK LULUS.\n";
}

?>