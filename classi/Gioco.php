<?php 
require_once __DIR__ . ("/Prodotto.php");

/**
 * Gioco è una sottoclasse di Prodotto
 * 
 */
class Gioco extends Prodotto{
    /**
     *Varibili di istanza
     */
    private $prezzo;
    private $caratteristiche;
    private $dimensioni;

    /**
     * Costrutto
     *
     * @param [string] $categoria
     * @param [string] $prezzo
     * @param [string] $caratteristiche
     * @param [string] $dimensioni
     */
    public function __construct($categoria, $prezzo, $caratteristiche, $dimensioni){
        /**
         * Ereditarietà del parent $categoria
         */
        parent::__construct($categoria);
        $this->prezzo = $prezzo;
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;
    }

    public function getPrezzo(){
        return $this->prezzo;
    }

    public function getCaratteristiche(){
        return $this->caratteristiche;
    }

    public function getDimensioni(){
        return $this->dimensioni;
    }
}
