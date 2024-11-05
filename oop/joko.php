<?php
include_once "person.php";

$joko = new Person("joko","lenteng agung","depok");
$joko->nama ="joko";
$joko->alamat ="jln lenteng agung";
$joko->kota ="depok";

echo $joko->nama;
echo "<br>";
echo $joko->alamat;
echo "<br>";
echo $joko->kota;

$joko->say();