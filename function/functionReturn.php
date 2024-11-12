<?php
function cekGenap($bilangan) {
    if ($bilangan % 2 == 0) {
        return true; // Bilangan genap
    } else {
        return false; // Bilangan ganjil
    }
}

// Contoh penggunaan dengan echo:
$bilangan = 23;
if (cekGenap($bilangan)) {
    echo "$bilangan adalah bilangan genap (true)."; 
} else {
    echo "$bilangan adalah bilangan ganjil (false)."; 
}

echo "<br>"; // Baris baru untuk memisahkan output

$bilangan = 16;
if (cekGenap($bilangan)) {
    echo "$bilangan adalah bilangan genap (true)."; 
} else {
    echo "$bilangan adalah bilangan ganjil (false)."; 
}
?>
