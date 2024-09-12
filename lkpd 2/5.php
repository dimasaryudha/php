<?php

// Definisikan dua array
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

// Gabungkan kedua array
$kombinasiArray = array_merge($bil1, $bil2);

// Hapus nilai yang duplikat
$hapusArray = array_unique($kombinasiArray);

// Urutkan array dari yang terkecil ke terbesar
sort($hapusArray);

// Tampilkan hasil tanpa urutan angka
echo implode(', ', $hapusArray);
?>
