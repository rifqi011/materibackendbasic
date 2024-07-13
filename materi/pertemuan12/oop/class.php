<?php
// nama class
class SuperHero {
    // property/atribut
    var $nama;
    var $organisasi;
    var $kekuatan;

    // method
    function setNama($nama) {
        $this->nama = $nama;
    }
    function setOrganisasi($organisasi) {
        $this->organisasi = $organisasi;
    }
    function setKekuatan($kekuatan) {
        $this->kekuatan = $kekuatan;
    }
    function display() {
        return $this->nama." ".$this->organisasi." ".$this->kekuatan;
    }
}

$ironMan = new SuperHero ();
$ironMan->setNama("Iron Man");
$ironMan->setOrganisasi("Avanger");
$ironMan->setKekuatan("Duidnya banyak");

echo $ironMan->display();