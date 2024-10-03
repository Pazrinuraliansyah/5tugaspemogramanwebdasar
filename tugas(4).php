<?php
$ujian_teori= 80; 
$ujian_praktik = 80; 
$nilai_lulus_teori= 70;
$nilai_lulus_praktik= 75;
if (($ujian_teori < 0 || $ujian_teori > 100) || ($ujian_praktik < 0 || $ujian_praktik > 100)) {
    echo "nilai tidak valid.";
} else 
if ($ujian_teori>=$nilai_lulus_teori&&$ujian_praktik>=$nilai_lulus_praktik) {
    echo "selamat anda lulus";
} else {
    echo "maaf anda tidak Lulus";
}
?>
