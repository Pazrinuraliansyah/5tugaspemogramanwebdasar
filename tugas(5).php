<?php
$usia=22;
$penghasilan=20000000;
$status_credit= "tidak macet";
if($usia>=21 && $usia<=60 && $penghasilan>=5000000&&$status_credit=="tidak macet") {
    echo "kredit layak";
}else {
    echo "kredit tidak layak";
}
?>