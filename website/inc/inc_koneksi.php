<?php
$host  = "localhost";
$user  = "root";
$pass  = "";
$db    ="petshopp";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if(!$koneksi){
 die("Gagal terkoneksi");
}else{
    echo"koneksi berhasil";
}