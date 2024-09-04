<?php

class Mamifero{
    // Atributos
    private $nome;
    private $raca;
    private $peso;
    private $cor;
    private $porte;
    private $especie;

    // Métodos
    public function acordar(){}
    public function dormir(){}
    public function locomover(){}

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getRaca(){
        return $this->raca;
    }

    public function setRaca($raca){
        $this->raca = $raca;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }

    public function getPorte(){
        return $this->porte;
    }

    public function setPorte($porte){
        $this->porte = $porte;
    }

    public function getEspecie(){
        return $this->especie;
    }

    public function setEspecie($especie){
        $this->especie = $especie;
    }

}

