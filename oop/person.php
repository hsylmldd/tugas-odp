<?php
class Person{
    // properti
   var $nama;
   var $alamat;
   var $kota; 

//    method atau function
    function __construct($nama, $alamat, $kota){
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->kota = $kota;
    }
    function say(){
        echo "hello ";
    }
    function set_nama($nama){
        $this->nama = $nama;
    }
    function get_nama(){
        return $this->nama;
    }
}


?>