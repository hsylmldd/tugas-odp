<?php
// Kelas induk Rekening
class Rekening {
    protected $norek;
    protected $saldo;
    protected $namaPemilik;

    // Konstruktor untuk inisialisasi nama pemilik, nomor rekening, dan saldo awal
    public function __construct($namaPemilik, $norek, $saldoAwal) {
        $this->namaPemilik = $namaPemilik;
        $this->norek = $norek;
        $this->saldo = $saldoAwal;
    }

    // Metode untuk menabung (menambahkan saldo)
    public function nabung($jumlah) {
        $this->saldo += $jumlah;
        echo "{$this->namaPemilik} menabung: Rp $jumlah<br>";
    }

    // Metode untuk cek saldo
    public function cekSaldo() {
        echo "Saldo {$this->namaPemilik} saat ini: Rp " . $this->saldo . "<br>";
    }

    // Metode untuk menarik uang (mengurangi saldo)
    public function tarik($jumlah) {
        if ($jumlah > $this->saldo) {
            echo "Saldo tidak cukup untuk menarik Rp $jumlah<br>";
        } else {
            $this->saldo -= $jumlah;
            echo "{$this->namaPemilik} menarik: Rp $jumlah<br>";
        }
    }
}

// Kelas turunan RekeningTabungan
class RekeningTabungan extends Rekening {
    private $potonganBulanan;

    // Konstruktor dengan parameter tambahan untuk potongan bulanan
    public function __construct($namaPemilik, $norek, $saldoAwal, $potonganBulanan) {
        parent::__construct($namaPemilik, $norek, $saldoAwal);
        $this->potonganBulanan = $potonganBulanan;
    }

    // Metode untuk menerapkan potongan bulanan
    public function potongBulanan() {
        $this->saldo -= $this->potonganBulanan;
        echo "Potongan bulanan {$this->namaPemilik}: Rp " . $this->potonganBulanan . "<br>";
    }
}

// Kelas turunan RekeningDeposito
class RekeningDeposito extends Rekening {
    private $bunga;

    // Konstruktor dengan parameter tambahan untuk bunga deposito
    public function __construct($namaPemilik, $norek, $saldoAwal, $bunga = 0.10) {
        parent::__construct($namaPemilik, $norek, $saldoAwal);
        $this->bunga = $bunga;
    }

    // Metode untuk menambahkan bunga ke saldo
    public function tambahBunga() {
        $bungaTambahan = $this->saldo * $this->bunga;
        $this->saldo += $bungaTambahan;
        echo "Bunga deposito untuk {$this->namaPemilik}: Rp " . $bungaTambahan . "<br>";
    }
}

// Membuat objek dari kelas RekeningTabungan
echo "<b>Rekening Tabungan:</b><br>";
$rekeningTabungan = new RekeningTabungan("Ali", "12345", 1000000, 50000);
$rekeningTabungan->cekSaldo();
$rekeningTabungan->nabung(200000);
$rekeningTabungan->cekSaldo();
$rekeningTabungan->tarik(100000);
$rekeningTabungan->cekSaldo();
$rekeningTabungan->potongBulanan();
$rekeningTabungan->cekSaldo();

echo "<br><b>Rekening Deposito:</b><br>";
// Membuat objek dari kelas RekeningDeposito
$rekeningDeposito = new RekeningDeposito("Budi", "67890", 2000000);
$rekeningDeposito->cekSaldo();
$rekeningDeposito->nabung(500000);
$rekeningDeposito->cekSaldo();
$rekeningDeposito->tarik(250000);
$rekeningDeposito->cekSaldo();
$rekeningDeposito->tambahBunga();
$rekeningDeposito->cekSaldo();
?>
