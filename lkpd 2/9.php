<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Uang</title>
</head>
<body>
    <h1>Hitung Uang</h1>
    
    <form method="post" action="">
        <label for="uang">Masukkan jumlah uang:</label>
        <input type="number" id="uang" name="uang" min="1" required>
        <input type="submit" value="Hitung">
    </form>

    <?php
    // Mengecek apakah request yang diterima menggunakan metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Mengambil nilai input dari form, kemudian mengubahnya menjadi integer menggunakan intval
        $uang = intval($_POST["uang"]);

        // Mendefinisikan fungsi pecahan untuk menghitung jumlah pecahan uang
        function pecahan($uang) {
            
            // Membuat array untuk menyimpan jumlah pecahan uang (100000, 50000, dst.) yang ditemukan
            $arr = [
                '100000' => 0,
                '50000' => 0,
                '20000' => 0,
                '10000' => 0,
                '5000' => 0,
                '1000' => 0
            ];

            // Perulangan untuk menghitung jumlah pecahan 100000
            while ($uang >= 100000) {
                $uang -= 100000; // Mengurangi jumlah uang sebesar 100000
                $arr['100000']++; // Menambah jumlah pecahan 100000
            }

            // Perulangan untuk menghitung jumlah pecahan 50000
            while ($uang >= 50000) {
                $uang -= 50000;
                $arr['50000']++;
            }

            // Perulangan untuk menghitung jumlah pecahan 20000
            while ($uang >= 20000) {
                $uang -= 20000;
                $arr['20000']++;
            }

            // Perulangan untuk menghitung jumlah pecahan 10000
            while ($uang >= 10000) {
                $uang -= 10000;
                $arr['10000']++;
            }
            
            // Perulangan untuk menghitung jumlah pecahan 5000
            while ($uang >= 5000) {
                $uang -= 5000;
                $arr['5000']++;
            }

            // Perulangan untuk menghitung jumlah pecahan 2000
            while ($uang >= 2000) {
                $uang -= 2000;
                $arr['2000']++;
            }

            // Perulangan untuk menghitung jumlah pecahan 1000
            while ($uang >= 1000) {
                $uang -= 1000;
                $arr['1000']++;
            }

            // Mengembalikan array yang berisi jumlah pecahan uang
            return $arr;
        }

        // Memanggil fungsi pecahan dan menyimpan hasilnya ke dalam variabel $hasil
        $hasil = pecahan($uang);

        // Menampilkan hasil dalam format HTML
        echo "<h2>Hasil Pecahan:</h2>";
        echo "<p>Uang Rp. " . number_format($uang, 0, ',', '.') . " dapat dipecah menjadi:</p>";
        echo "<ul>";

        // Menampilkan setiap pecahan dan jumlahnya, hanya jika jumlah pecahan lebih dari 0
        foreach ($hasil as $nominal => $jumlah) {
            if ($jumlah > 0) {
                echo "<li>Rp. " . number_format($nominal, 0, ',', '.') . " sebanyak $jumlah buah</li>";
            }
        }
        echo "</ul>";
    }
?>

</body>
</html>
