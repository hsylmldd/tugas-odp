<?php

// Kelas Product khusus untuk Store
class StoreProduct {
    // Properti dengan berbagai visibility
    public $name;
    protected $price;
    private $discount;

    public function __construct($name, $price, $discount) {
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
        echo "Ini adalah produk dari Store: $this->name\n";
    }

    // Metode public untuk mengakses informasi produk
    public function getInfo() {
        return "Nama Produk: $this->name, Harga: " . $this->getPrice() . "\n";
    }

    // Metode protected untuk menghitung harga setelah diskon
    protected function getPrice() {
        return $this->price - $this->getDiscount();
    }

    // Metode private untuk mengakses diskon
    private function getDiscount() {
        return $this->discount;
    }
}

// Kelas Product khusus untuk Warehouse
class WarehouseProduct {
    // Properti dengan berbagai visibility
    public $name;
    protected $stock;
    private $supplier;

    public function __construct($name, $stock, $supplier) {
        $this->name = $name;
        $this->stock = $stock;
        $this->supplier = $supplier;
        echo "Ini adalah produk dari Warehouse: $this->name\n";
    }

    // Metode public untuk mengakses informasi produk
    public function getInfo() {
        return "Nama Produk: $this->name, Stok: " . $this->getStockInfo() . "\n";
    }

    // Metode protected untuk menghitung stok yang tersedia
    protected function getStockInfo() {
        return $this->stock . " unit dari " . $this->getSupplier();
    }

    // Metode private untuk mengakses informasi pemasok
    private function getSupplier() {
        return $this->supplier;
    }
}

// Membuat objek dari kelas StoreProduct
$storeProduct = new StoreProduct("Laptop", 10000000, 1000000);
echo "<br>";
echo $storeProduct->getInfo();
echo "<br>";
// Membuat objek dari kelas WarehouseProduct
$warehouseProduct = new WarehouseProduct("Laptop", 50, "Supplier A");
echo "<br>";
echo $warehouseProduct->getInfo();

?>
