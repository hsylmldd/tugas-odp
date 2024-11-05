<?php

class Mahasiswa {
    private $nim;
    private $nama;
    private $nilai;

    public function __construct($nim, $nama, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->nilai = $nilai;
    }

    public function getKeteranganLulus() {
        return $this->nilai > 70 ? "Lulus" : "Tidak Lulus";
    }

    public function getNim() {
        return $this->nim;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getNilai() {
        return $this->nilai;
    }
}

// Membuat objek Mahasiswa
$mahasiswaList = [
    new Mahasiswa("101", "Budi", 85),
    new Mahasiswa("102", "Susan", 90),
    new Mahasiswa("103", "Santi", 78)
];

// Menampilkan data dalam bentuk tabel HTML
echo "<table border='1' cellspacing='0' cellpadding='5'>";
echo "<tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Nilai</th>
        <th>Keterangan</th>
      </tr>";

foreach ($mahasiswaList as $mahasiswa) {
    echo "<tr>
            <td>{$mahasiswa->getNim()}</td>
            <td>{$mahasiswa->getNama()}</td>
            <td>{$mahasiswa->getNilai()}</td>
            <td>{$mahasiswa->getKeteranganLulus()}</td>
          </tr>";
}

echo "</table>";

?>
