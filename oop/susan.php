<?php
include_once "person.php";

$susan = new Person();
$susan->nama ="susan";
$susan->alamat ="jln lenteng agung";
$susan->kota ="depok";

echo $susan->nama;
echo "<br>";
echo $susan->alamat;