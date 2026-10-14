<?php
class Buku {
    // Property
    public $kodeBuku;
    public $judul;
    public $penulis;
    public $tahunTerbit;

    // Method
    public function tampilkanData() {
        echo "<div style='border:1px solid #333; padding:10px; margin:10px; width:300px;'>";
        echo "<h3>DATA BUKU PERPUSTAKAAN</h3>";
        echo "Kode Buku: " . $this->kodeBuku . "<br>";
        echo "Judul: " . $this->judul . "<br>";
        echo "Penulis: " . $this->penulis . "<br>";
        echo "Tahun Terbit: " . $this->tahunTerbit . "<br>";
        echo "</div>";
    }
}

// object pertama ($buku1)
$buku1 = new Buku();
$buku1->kodeBuku = "BK001";
$buku1->judul = "Pemrograman PHP";
$buku1->penulis = "Ahmad";
$buku1->tahunTerbit = 2024;

// object kedua ($buku2)
$buku2 = new Buku();
$buku2->kodeBuku = "BK002";
$buku2->judul = "Dasar Sistem Informasi";
$buku2->penulis = "Budi";
$buku2->tahunTerbit = 2023;

// Memanggil method
$buku1->tampilkanData();
$buku2->tampilkanData();
?>