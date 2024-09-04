<?php
require_once "Mamifero.php";

class Cachorro extends Mamifero {
    // Atributos
    private $numMotoCapturados;

    // Métodos
    public function latir(){
        echo "Au au au auuuu";
    }

    public function getNumMotoCapturados(){
        return $this->numMotoCapturados;
    }
    public function setNumMotoCapturados($numMotoCapturados){
        $this->numMotoCapturados = $numMotoCapturados;
    }
}