<?php 
/**
 * Creo una super classe primaria che contiene delle sottoclassi. Ha come variabili di istanza degli animali
 */
class Prodotto {
    private $categoria;
/**
 *Costrutto $categoria
 * @param [string] $categoria
 */
    public function __construct($categoria) {
        $this->categoria = $categoria;
    }

    /**
     *Funzione di ritorno
     * @return $categoria
     */
    public function getCategoria(){
        return $this->categoria;
    }
}