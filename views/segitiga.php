<?php

require('../class/class_perhitungan.php');

$hitung = new perhitungan();
 
//memanggil method luas dari class persegi
echo $hitung->luas_segitiga(2,3);

?>