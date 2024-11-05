<?php
// Kelas induk Pegawai
class Pegawai {
    protected $nama;
    protected $gajiPokok;

    public function __construct($nama, $gajiPokok) {
        $this->nama = $nama;
        $this->gajiPokok = $gajiPokok;
    }

    // Metode untuk menampilkan informasi pegawai
    public function infoPegawai() {
        echo "Nama: {$this->nama}, Gaji Pokok: Rp {$this->gajiPokok}<br>";
    }
}

// Kelas turunan KaryawanTetap yang meng-extend Pegawai
class KaryawanTetap extends Pegawai {
    private $tunjangan;

    public function __construct($nama, $gajiPokok, $tunjangan) {
        parent::__construct($nama, $gajiPokok);
        $this->tunjangan = $tunjangan;
    }

    // Metode untuk menampilkan tunjangan karyawan tetap
    public function infoTunjangan() {
        echo "Tunjangan: Rp {$this->tunjangan}<br>";
    }
}

// Kelas turunan Freelance yang meng-extend Pegawai
class Freelance extends Pegawai {
    private $jamKerja;
    private $upahPerJam;

    public function __construct($nama, $jamKerja, $upahPerJam) {
        parent::__construct($nama, 0); // Gaji pokok freelance diatur 0
        $this->jamKerja = $jamKerja;
        $this->upahPerJam = $upahPerJam;
    }

    // Metode untuk menghitung dan menampilkan total gaji freelance
    public function hitungGaji() {
        $totalGaji = $this->jamKerja * $this->upahPerJam;
        echo "Jam Kerja: {$this->jamKerja}, Upah per Jam: Rp {$this->upahPerJam}<br>";
        echo "Total Gaji: Rp {$totalGaji}<br>";
    }
}

// Membuat objek dari kelas KaryawanTetap
echo "<b>Karyawan Tetap:</b><br>";
$karyawanTetap = new KaryawanTetap("Siti", 6000000, 1200000);
$karyawanTetap->infoPegawai();
$karyawanTetap->infoTunjangan();

echo "<br><b>Freelance:</b><br>";
// Membuat objek dari kelas Freelance
$freelance = new Freelance("Dewi", 80, 150000);
$freelance->infoPegawai();
$freelance->hitungGaji();
?>
