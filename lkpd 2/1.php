<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character and Number Extraction</title>
</head>
<body>
    <form method="post">
        <label for="teks">Masukkan teks:</label>
        <input type="text" id="teks" name="teks" required>
        <button type="submit">Cek</button>
    </form>

    <?php
    // Mengecek metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Mengambil input teks yang dikirimkan melalui form
        $teks = $_POST['teks'];

        // Mencari semua karakter non-huruf dan non-spasi, serta angka dalam $teks
        preg_match_all('/[^\w\s]|\d+/', $teks, $matches);

        
        // Menghapus semua karakter atau angka yang duplikat, hanya menyisakan yang unik
        $allUnique = array_unique($matches[0]);

        echo $allUnique ? 
            "Karakter dan angka yang terdapat pada kalimat: " . implode(', ', $allUnique) : 
            "Tidak terdapat karakter atau angka pada kalimat.";
    }
?>

</body>
</html>
