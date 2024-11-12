<?php
function greet($nama, $gender = "tidak diketahui") {
    if ($gender == "laki-laki") {
        echo "Hi bro, nama saya adalah $nama, dan gender saya adalah $gender.";
    } elseif ($gender == "wanita") {
        echo "Hi sis, nama saya adalah $nama, dan gender saya adalah $gender.";
    } else {
        echo "Hi, nama saya adalah $nama, dan saya tidak mendefinisikan gender.";
    }
    echo "<br>"; 
}


greet("Andi", "laki-laki"); 
greet("Sasha", "wanita"); 
greet("Raka"); 
?>
