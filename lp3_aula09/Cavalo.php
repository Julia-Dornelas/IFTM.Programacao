<?php
require_once "Mamifero.php";

class Cavalo extends Mamifero {
    // Atributos
    private $ferradura;

    // Métodos
    public function relinchar(){
        echo "Iihinnnnhoooooo";
    }
    public function getFerradura(){
        return $this->ferradura;
    }
    public function setFerradura($ferradura){
        $this->ferradura = $ferradura;
    }
}