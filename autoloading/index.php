<?php

require_once 'App/init.php';

$produk1 = new Komik("Naruto", "saya", "Gramedia", 5000, 100);

$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Playstation", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
