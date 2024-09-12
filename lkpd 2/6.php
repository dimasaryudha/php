<?php

// Data pembelanjaan disimpan dalam array
$pembelanjaan = [
    ["nama" => "Beras", "jumlah" => 2, "harga_per_unit" => 50000],
    ["nama" => "Minyak Goreng", "jumlah" => 1, "harga_per_unit" => 25000],
    ["nama" => "Telur", "jumlah" => 1, "harga_per_unit" => 20000],
    ["nama" => "Gula", "jumlah" => 3, "harga_per_unit" => 10000],
];

// Inisialisasi Variabel 
$totalBayar = 0;

echo "<h2>Daftar Belanjaan</h2>";

foreach ($pembelanjaan as $item) {
    // Menghitung total harga untuk setiap item
    $totalHargaItem = $item["jumlah"] * $item["harga_per_unit"];
    
    // Menambahkan total harga item ke total keseluruhan
    $totalBayar += $totalHargaItem;

    // Menampilkan informasi item dengan format: nama, jumlah, harga per unit, dan total harga
    echo "- " . $item["nama"] . " : " . $item["jumlah"] . " x " . number_format($item["harga_per_unit"], 0, ',', '.') . " = Rp " . number_format($totalHargaItem, 0, ',', '.') . "<br>";
}

// Menampilkan total yang harus dibayar setelah loop selesai
echo "<p>Total yang Harus Dibayar: Rp " . number_format($totalBayar, 0, ',', '.') . "</p>";

?>
