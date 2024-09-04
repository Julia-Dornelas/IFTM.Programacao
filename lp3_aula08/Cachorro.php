<?php

class Cachorro{
    public $nome;
    public $raca;
    public $corPelo;
    public $porte;
    public $peso;

    public function dormir(){
        echo $this->nome . " está Zzzzzzz <br>hm";
    } 
    public function latir(){
        echo "Au Au Au Auuuu";
    }
    public function morder(){
        echo "Nhack!";
    }
}