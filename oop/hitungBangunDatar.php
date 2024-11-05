<?php

// Kelas abstrak untuk bangun datar
abstract class BangunDatar {
    abstract public function hitungLuas();
    abstract public function hitungKeliling();
}

// Kelas Persegi
class Persegi extends BangunDatar {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        return $this->sisi * $this->sisi;
    }

    public function hitungKeliling() {
        return 4 * $this->sisi;
    }
}

// Kelas Segitiga (dengan asumsi segitiga sama sisi)
class Segitiga extends BangunDatar {
    private $sisi;
    private $tinggi;

    public function __construct($sisi, $tinggi) {
        $this->sisi = $sisi;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas() {
        return 0.5 * $this->sisi * $this->tinggi;
    }

    public function hitungKeliling() {
        return 3 * $this->sisi;
    }
}

// Kelas Lingkaran
class Lingkaran extends BangunDatar {
    private $jariJari;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    public function hitungLuas() {
        return pi() * pow($this->jariJari, 2);
    }

    public function hitungKeliling() {
        return 2 * pi() * $this->jariJari;
    }
}

// Contoh penggunaan
$persegi = new Persegi(4);
echo "Luas Persegi: " . $persegi->hitungLuas() . "\n";
echo "<br>";
echo "Keliling Persegi: " . $persegi->hitungKeliling() . "\n\n";
echo "<br>";
$segitiga = new Segitiga(6, 5);
echo "Luas Segitiga: " . $segitiga->hitungLuas() . "\n";
echo "<br>";
echo "Keliling Segitiga: " . $segitiga->hitungKeliling() . "\n\n";
echo "<br>";

$lingkaran = new Lingkaran(7);
echo "Luas Lingkaran: " . $lingkaran->hitungLuas() . "\n";
echo "<br>";
echo "Keliling Lingkaran: " . $lingkaran->hitungKeliling() . "\n";
echo "<br>";

?>
