<?php
$gaji_pokok=5000000;
$tunjangan_transportasi=500000;
$tunjangan_makan=300000;
$total_pajak=0.10;
$gaji_kotor=$gaji_pokok+$tunjangan_transportasi+$tunjangan_makan;
$pajak=$total_pajak*$gaji_kotor;
$gaji_bersih=$gaji_kotor-$pajak;
echo"gaji bersih yang diterima karyawan setelah dipotong pajak: Rp ". number_format($gaji_bersih, 0,',','.');
?>