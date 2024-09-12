<?php

// Mendefinisikan sebuah variabel bilangan dengan nilai 120
$bilangan = 120;

// Menampilkan teks di browser untuk menjelaskan output yang akan muncul
echo "Bilangan yang dapat membagi $bilangan dari rentang 1-30:<br>";

// Membuat perulangan dari 1 sampai 30
for ($i = 1; $i <= 30; $i++) {
    
    // Mengecek apakah $bilangan habis dibagi dengan $i (jika sisa bagi adalah 0)
    if ($bilangan % $i == 0) {
        
        // Jika benar ($bilangan habis dibagi $i), maka cetak nilai $i
        echo $i . "<br>";
    }
}

?>
