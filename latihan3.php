<?php
class produk{
  public $namaBarang="motor", 
          $merk="honda", 
            $harga=7000000;
            // membuat method
            public function cetakProduk(){
                return "Produknya adalah ...";
            }
}
$produk1 = new produk();
$produk2 = new produk();
$produk2->namaBarang="oli";
$produk2->merk="top one";
$produk2->harga=100000;

var_dump($produk1);
echo "<br>";
var_dump($produk2);
echo "<br>";
echo $produk1->cetakProduk();
echo "<br>";
echo $produk2->cetakProduk();
?>