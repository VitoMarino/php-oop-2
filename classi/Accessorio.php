<?php
require_once __DIR__ . ("/Prodotto.php");

/**
 * Accessorio è una sottoclasse di Prodotto
 * 
 */
class Accessorio extends Prodotto{
    /**
     *Varibili di istanza
     */
    private $prezzo;
    private $materiale;
    private $dimensioni;

    /**
     * Costrutto
     *
     * @param [string] $categoria
     * @param [string] $prezzo
     * @param [string] $materiale
     * @param [string] $dimensioni
     */
    public function __construct($categoria, $prezzo, $materiale, $dimensioni){
        parent::__construct($categoria);
        $this->prezzo = $prezzo;
        $this->materiale = $materiale;
        $this->dimensioni = $dimensioni;
    }

    public function getPrezzo(){
        return $this->prezzo;
    }

    public function getMateriale(){
        return $this->materiale;
    }

    public function getDimensioni(){
        return $this->dimensioni;
    }
}