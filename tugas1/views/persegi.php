<?php

require('../class/class_perhitungan.php');

// Object adalah instance dari class. Jika class secara umum mepresentasikan (template) 
// sebuah object, sebuah instance adalah representasi nyata dari class itu sendiri.
//instansiasi class persegi
$hitung = new perhitungan();

//memanggil method luas dari class persegi
echo $hitung->luas_persegi(3,3);

?>