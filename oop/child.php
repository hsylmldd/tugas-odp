<?php
include_once "person.php";

class Faculty extends Person {
    var $nip;

    function __construct($nama, $alamat, $kota, $nip) {
        parent::__construct($nama, $alamat, $kota);
        $this->nip = $nip;
    }

    // Override the say method
    function say() {
        echo "Hello, I am a faculty member. My name is " . $this->nama . ".<br>";
    }
}

class Student extends Person {
    var $nis;

    function __construct($nama, $alamat, $kota, $nis) {
        parent::__construct($nama, $alamat, $kota);
        $this->nis = $nis;
    }

    // Override the say method
    function say() {
        echo "Hello, I am a student. My name is " . $this->nama . ".<br>";
    }
}

// Create instances of Student and Faculty
$fikri = new Student("Fikri", "jalan dua", "depok", "1000001");
$tom = new Faculty("Tom", "UI", "Depok", "2007110");

// Display properties of $fikri (Student)
echo $fikri->nis . "<br>";
echo $fikri->nama . "<br>";
echo $fikri->alamat . "<br>";
echo $fikri->kota . "<br>";
echo "<br>";

// Display properties of $tom (Faculty)
echo $tom->nama . "<br>";
echo $tom->nip . "<br>";
echo $tom->alamat . "<br>";
echo $tom->kota . "<br>";
echo "<br>";

// Demonstrate the overridden say method
$fikri->say(); 
$tom->say();  
?>
