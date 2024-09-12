<?php

// Fungsi untuk memotong teks jika lebih dari 50 karakter, menambahkan elipsis
function wrapText($text) {
    $count = str_split($text);  // Pisahkan teks menjadi array karakter

    if (count($count) > 50) {
        $text = substr($text, 0, 50) . "...";  // Potong teks dan tambahkan elipsis
    }

    echo $text;  // Tampilkan teks
}

// Contoh teks panjang
$kata = "Lorem ipsum dolor sit memet, consectetur adipiscing elit. Nulla vel auctor turpis. Donec vel erat sollicitudin, accumsan lectus eget, blandit orci. Integer ut erat ipsum. Sed porta at erat vitae ornare. Aenean auctor, lacus ac condimentum ultricies, mi enim lobortis nibh, sit amet laoreet arcu felis nec quam. Cras euismod ex magna, in scelerisque urna laoreet quis. Aliquam tincidunt lacus sed tempor dapibus. Morbi sit amet dolor hendrerit, sollicitudin purus non, blandit sem.";

// Tampilkan teks awal
echo "<b>Kalimat awal : </b> " . $kata . "</br>";

// Panggil fungsi untuk memproses teks
wrapText($kata);

?>
