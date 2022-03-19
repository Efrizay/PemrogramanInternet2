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

class Rumah extends Property {

    public function getInfoProperty () {
        $str = "Rumah = {$this->nama}, {$this->getlabel()}, {$this->harga} ";
        return $str;

    }

}

class Apartment extends Property {

    public function getInfoProperty () {
        $str = "Apartment = {$this->nama}, {$this->getlabel()}, {$this->harga} ";
        return $str;

    }

}

class SportCar {

    public $nama, $tahun, $type, $mesin, $harga;

    public function __construct( $nama = "nama", $tahun = "tahun", $type = "type", $mesin = "mesin", $harga = 0) {

        $this->nama =$nama;
        $this->tahun =$tahun;
        $this->type =$type;
        $this->mesin =$mesin;
        $this->harga =$harga;

    }

    public function getlabel() {

        return "$this->tahun, $this->type, $this->mesin";
    }

    public function getInfoSportCar() {

        $str = "{$this->nama} | {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }

}


class Ferrari extends SportCar {

    public function getInfoSportCar () {
        $str = "Ferrari = {$this->nama}, {$this->getlabel()}, {$this->harga} ";
        return $str;

    }

}

class AstonMartin extends SportCar {

    public function getInfoSportCar () {
        $str = "AstonMartin = {$this->nama}, {$this->getlabel()}, {$this->harga} ";
        return $str;

    }

}

$Property1 = new Rumah("Labiesta", "Cluster", "1 lantai", "473500000");
$Property2 = new Rumah("Dream Land", "Ruko", "2 lantai", "1878000000");
$Property3 = new Apartment("Puri Imperium", "Elite", "2 Bedroom", "3400000000");
$Property4 = new Apartment("Pavilion", "Junior", "1 Bedroom", "1034000000");
$SportCar1 = new Ferrari("488 Pista", "2020", "Coupe", "3.9L V8" , "14400000000");
$SportCar2 = new Ferrari("458 Italia", "2014", "Spider", "4.5L V8", "6400000000");
$SportCar3 = new AstonMartin("DBS Superleggera", "2021", "Coupe", "5.2L V12", "12000000000");
$SportCar4 = new AstonMartin("Vantage", "2019", "Coupe", "4.0L V8", "5500000000");

echo $Property1->getInfoProperty();
echo "<br>";
echo $Property2->getInfoProperty();
echo "<br>";
echo $Property3->getInfoProperty();
echo "<br>";
echo $Property4->getInfoProperty();
echo "<hr>";
echo $SportCar1->getInfoSportCar();
echo "<br>";
echo $SportCar2->getInfoSportCar();
echo "<br>";
echo $SportCar3->getInfoSportCar();
echo "<br>";
echo $SportCar4->getInfoSportCar();
echo "<hr>";

?>