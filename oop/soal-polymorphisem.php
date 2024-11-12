<?php

// Kelas induk AlatMusik
class AlatMusik {
    public string $nama;

    public function __construct(string $nama) {
        $this->nama = $nama;
    }

    // Metode bunyi() default, dapat di-override di kelas turunan
    function bunyi() {
        return "Bunyi alat musik";
    }
}

// Kelas Gitar yang mewarisi AlatMusik dan mengimplementasikan metode bunyi()
class Gitar extends AlatMusik {
    function bunyi() {
        return "Jreng";
    }
}

// Kelas Drum yang mewarisi AlatMusik dan mengimplementasikan metode bunyi()
class Drum extends AlatMusik {
    function bunyi() {
        return "Dum dum";
    }
}

// Fungsi mainkanMusik yang menerima objek AlatMusik dan memanggil metode bunyi()
function mainkanMusik(AlatMusik $alat) {
    if ($alat instanceof Gitar) {
        echo "Memainkan Gitar dengan bunyi: " . $alat->bunyi() . "<br>";
    } elseif ($alat instanceof Drum) {
        echo "Memainkan Drum dengan bunyi: " . $alat->bunyi() . "<br>";
    } else {
        echo "Memainkan Alat Musik: " . $alat->bunyi() . "<br>";
    }
}

// Membuat objek Gitar dan Drum
$gitar = new Gitar("Gitar");
$drum = new Drum("Drum");

// Memanggil fungsi mainkanMusik untuk objek Gitar dan Drum
mainkanMusik($gitar);  // Outputs: Memainkan Gitar dengan bunyi: Jreng
mainkanMusik($drum);   // Outputs: Memainkan Drum dengan bunyi: Dum dum

?>
