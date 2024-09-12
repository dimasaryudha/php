<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Total Pembayaran</title>
</head>
<body>

<h2>Form Pembelian</h2>
<form method="post" action="">
    <label for="pembelian">Total Pembelian (Rp):</label>
    <input type="number" id="pembelian" name="pembelian" required>
    <br><br>
    <label for="day">Pilih Hari:</label>
    <select id="day" name="day" required>
        <option value="Monday">Senin</option>
        <option value="Tuesday">Selasa</option>
        <option value="Wednesday">Rabu</option>
        <option value="Thursday">Kamis</option>
        <option value="Friday">Jumat</option>
        <option value="Saturday">Sabtu</option>
        <option value="Sunday">Minggu</option>
    </select>
    <br><br>
    <input type="submit" value="Hitung">
</form>

</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pembelian = $_POST['pembelian'];
    $day = $_POST['day']; // Mengambil nilai hari dari form

    $totalBayar = 0;    

    // Diskon 7% jika pembelian lebih dari 100000
    if ($pembelian > 100000) {
        $totalBayar = $pembelian - ($pembelian * 7 / 100);
    } else {
        $totalBayar = $pembelian;
    }

    // Diskon tambahan 5% jika hari Selasa
    if ($day == "Tuesday") {
        $totalBayar = $totalBayar - ($totalBayar * 5 / 100);
    }

    // Menampilkan hari, total belanja, dan total yang harus dibayar
    echo "Hari: " . $day . "<br>";
    echo "Total Belanja: Rp " . $pembelian . "<br>";
    echo "Total yang Harus Dibayar: Rp " . $totalBayar;
}

?>