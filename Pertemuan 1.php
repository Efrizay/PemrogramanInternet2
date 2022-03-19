<?php

class Property {

    public $nama, $jenis, $type, $harga;

    public function __construct( $nama = "nama", $jenis = "jenis", $type = "type",  $harga = 0) {

        $this->nama =$nama;
        $this->jenis =$jenis;
        $this->type =$type;
        $this->harga =$harga;

    }

    public function getlabel() {

        return "$this->jenis, $this->type";
    }

    public function getInfoProperty() {

        $str = "{$this->nama} | {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class Handphone {

    public $nama, $merk, $baterai, $harga;

    public function __construct( $nama = "nama", $merk = "merk", $baterai = "baterai", $harga = 0) {

        $this->nama =$nama;
        $this->merk =$merk;
        $this->baterai =$baterai;
        $this->harga =$harga;

    }

    public function getlabel() {

        return "$this->merk, $this->baterai";
    }

    public function getInfoElektronik() {

        $str = "{$this->nama} | {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class Rumah extends Property {

    public function getInfoProperty () {
        $str = "Rumah = {$this->nama}, {$this->getlabel()}, {$this->type}, {$this->harga} ";
        return $str;

    }

}

class Apartment extends Property {

    public function getInfoProperty () {
        $str = "Apartment = {$this->nama}, {$this->getlabel()}, {$this->type}, {$this->harga} ";
        return $str;

    }

}

class Samsung extends Handphone {

    public function getInfoHandphone () {
        $str = "Samsung = {$this->nama}, {$this->getlabel()}, {$this->merk}, {$this->harga} ";
        return $str;

    }

}

class Iphone extends Handphone {

    public function getInfoHandphone () {
        $str = "Iphone = {$this->nama}, {$this->getlabel()}, {$this->merk}, {$this->harga} ";
        return $str;

    }

}

$Property1 = new Rumah("Labiesta", "Cluster", "1 lantai", "Rp.473.500.000");
$Property2 = new Rumah("Dream Land", "Ruko", "2 lantai", "Rp.1.878.000.000");
$Property3 = new Apartment("Puri Imperium", "2 Bedroom", "Rp.3.400.000.000");
$Property4 = new Apartment("Pavilion", "1 Bedroom", "Rp.1.034.000.000");
$handphone1 = new Samsung("Samsung", "Galaxy A12", "5000 mAh", "224000");
$handphone2 = new Samsung("Samsung", "Galaxy A52S", "4500 mAh", "5609000");
$handphone3 = new Iphone ("Iphone", "8", "1821 mAh", "3368000");
$handphone4 = new Iphone ("Iphone", "Xr", "2942 mAh", "7654321");

echo $Property1->getInfoProperty();
echo "<br>";
echo $Property2->getInfoProperty();
echo "<br>";
echo $Property3->getInfoProperty();
echo "<br>";
echo $Property4->getInfoProperty();
echo "<hr>";
echo $handphone1->getInfoHandphone();
echo "<br>";
echo $handphone2->getInfoHandphone();
echo "<br>";
echo $handphone3->getInfoHandphone();
echo "<br>";
echo $handphone4->getInfoHandphone();
echo "<hr>";

?>