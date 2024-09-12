<?php
// Jumlah baris dan kolom
$rows = 4;
$cols = 8;

// Mencetak persegi pertama
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        echo "*";
    }
    echo "<br>"; // Pindah ke baris berikutnya
}

// Tambahkan baris kosong sebagai pemisah
echo "<br>";

// Mencetak persegi kedua
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        echo "*";
    }
    echo "<br>"; // Pindah ke baris berikutnya
}
?>
 