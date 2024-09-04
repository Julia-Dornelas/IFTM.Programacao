<?php
require_once "Mamifero.php";

class Cavalo extends Mamifero {
    // Atributos
    private $numVidas;

    // Métodos
    public function miar(){
        echo "Miau miau miau miauuuu";
    }

    public function getNumVidas(){
        return $this->numVidas;
    }
    public function setNumVidas($numVidas){
        $this->numVidas = $numVidas;
    }
}