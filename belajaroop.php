<?php
class handphone{

    var $pemilk;
    var $merk;
    var $ukuran_penyimpanan;

    function tampilkan_nama_pemilik() {
        return "pemilik handphone riko </br>";

    }

    function merk_handphone() {
        return "merk handphone samsung </br>";
    }

    function ukuran_penyimpanan() {
        return "ukuran penyimpanan 128 GB </br>";
    }

}

$handphone= new handphone();

echo $handphone->tampilkan_nama_pemilik();
echo $handphone->merk_handphone();
echo $handphone->ukuran_penyimpanan();

?>