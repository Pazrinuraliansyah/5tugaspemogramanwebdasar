<?php
$produk=200000;
$hasil_pemilik=0.7;
$hasil_toko=0.3;
$terjual=150;
$total_hasil_pemilik=$produk*$hasil_pemilik*$terjual;
$total_hasil_toko=$produk*$hasil_toko*$terjual;
echo"total hasil bagi pemilik: Rp". number_format($total_hasil_pemilik,0,',','.')."<br>";
echo" total hasil bagi toko : Rp". number_format($total_hasil_toko,0,',','.');  
?>