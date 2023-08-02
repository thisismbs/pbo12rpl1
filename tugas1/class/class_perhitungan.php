<?php

class perhitungan{

    var $bil1;
    var $bil2;
    var $bil3;
    var $sisi_a;
    var $sisi_b;
    var $panjang;
    var $lebar;
    var $tinggi;
    var $alas;

    function luas_persegi($bil1, $bil2){
        $bil3=$bil1*$bil2;
        $sisi_a=$bil1;
        $sisi_b=$bil2;
        return "
        Sisi A : ".$sisi_a."<br>
        Sisi B : ".$sisi_b."<br>
        <b> Rumus Luas Persegi = Sisi x Sisi </b> <br>
        Hasil Luas Persegi : ".$bil3."<br>";
    }

    function luas_persegi_panjang($bil1, $bil2){
        $bil3=$bil1*$bil2;
        $panjang=$bil1;
        $lebar=$bil2;
        return "
        Panjang Persegi Panjang : ".$panjang."<br>
        Lebar Persegi Panjang : ".$lebar."<br>
        <b> Rumus Luas Persegi Panjang = Panjang x Lebar </b> <br>
        Hasil Luas Persegi Panjang : ".$bil3."<br>";
    }

    function luas_segitiga($bil1, $bil2){
        $bil3=0.5*$bil1*$bil2;
        $alas=$bil1;
        $tinggi=$bil2;
        return "
        Alas Segitiga : ".$alas."<br>
        Luas Segitiga : ".$tinggi."<br>
        <b> Rumus Luas Segitiga = 0.5 x Alas x Tinggi </b> <br>
        Hasil Luas Segitiga : ".$bil3."<br>";
    }
}