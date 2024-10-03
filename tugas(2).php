<?php
$tabungan=10000000;
$harga_laptop=7000000;
$harga_smartphone=3500000;
$diskon_smartphone=0.10;
$harga_smartphone_setelah_diskon=$harga_smartphone*(1-$diskon_smartphone);
$total_pengeluaran=$harga_laptop+$harga_smartphone_setelah_diskon;
$sisa_tabungan=$tabungan-$total_pengeluaran;
echo "sisa tabungan fajar adalah: Rp ". number_format($sisa_tabungan, 0,',','.');
?>
