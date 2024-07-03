<?php 
/**
 * Creo una super classe primaria che contiene delle sottoclassi. Ha come variabili di istanza degli animali
 */
class Prodotto {
    private $cane;
    private $gatto;
    private $uccello;
    private $pesce;

    public function __construct($cane, $gatto, $uccello, $pesce) {
        $this->cane = $cane;
        $this->gatto = $gatto;
        $this->uccello = $uccello;
        $this->pesce = $pesce;
    }

    public function getCane(){
        return $this->cane;
    }

    public function getGatto(){
        return $this->gatto;
    }

    public function getUccello(){
        return $this->uccello;
    }

    public function getPesce(){
        return $this->pesce;
    }
}





?>