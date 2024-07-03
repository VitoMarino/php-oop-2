<?php 
require_once __DIR__ . ("/Prodotto.php");

/**
 * Cibo è una sottoclasse di Prodotto
 * 
 */
class Cibo extends Prodotto{
    /**
     *Varibili di istanza
     */
    private $prezzo;
    private $peso;
    private $ingredienti;

    /**
     *Costrutto
     * @param [string] $categoria
     * @param [string] $prezzo
     * @param [string] $peso
     * @param [string] $ingredienti
     */
    public function __construct($categoria, $prezzo, $peso, $ingredienti){
        /**
         * Ereditarietà del parent $categoria
         */
        parent::__construct($categoria);
        $this->prezzo = $prezzo;
        $this->peso = $peso;
        $this->ingredienti = $ingredienti;
    }
    public function getPrezzo(){
        return $this->prezzo;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function getIngredienti(){
        return $this->ingredienti;
    }

}





?>