<?php

require_once "Pessoa.php";

class Funcionario extends Pessoa{
    // Atributos

    private $salarioBruto;
    private $imposto;
    private $beneficio;
    private $cargo;

    public function __construct($nome, $cpf, $dataNascimento, $sexo, $salarioBruto, $imposto, $beneficio, $cargo)
    {
        parent::__construct($nome, $cpf, $dataNascimento, $sexo);
        $this->salarioBruto = $salarioBruto;
        $this->imposto = $imposto;
        $this->beneficio = $beneficio;
        $this->cargo = $cargo;
    }

    public function Imprimir(){}
    // Métodos

    public function SalarioLiquido()
    {
        $salarioLiquido = $this->salarioBruto - $this->beneficio - $this->imposto ;
        echo $this->getNome() . ", possui " . $salarioLiquido . " de salário líquido <br>";
    }

 
    public function getSalarioBruto(){
        return $this->salarioBruto;
    }
    public function setSalarioBruto($salarioBruto){
        $this->salarioBruto = $salarioBruto;
    }
    public function getImposto(){
        return $this->imposto;
    }

    public function setImposto($imposto){
        $this->imposto = $imposto;
    }
    public function getBeneficio(){
        return $this->beneficio;
    }

    public function setBeneficio($beneficio){
        $this->beneficio = $beneficio;
    }
    public function getCargo(){
        return $this->cargo;
    }

    public function setCargo($cargo){
        $this->cargo = $cargo;
    }

}

