<?php

require_once "Pessoa.php";

class Aluno extends Pessoa {
    // Atributos
    private $matricula;
    private $nota1;
    private $nota2;
    private $nota3;

    public function __construct($nome, $cpf, $dataNascimento, $sexo, $matricula, $nota1, $nota2, $nota3)
    {
        parent::__construct($nome, $cpf, $dataNascimento, $sexo);
        $this->matricula = $matricula;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
    }
    public function Imprimir(){}
    // Métodos
    public function mediaNotas()
    {
        $media = ($this->nota1 + $this->nota2 +  $this->nota3) / 3 ;
        echo $this->getNome() . ", possui " . $media . " de média <br>";
        $this->situacao($media);
    }

    private function situacao($media){
        if($media > 7){
            echo "Aluno aprovado. <br> <br>";
        }
        else{
            echo "Aluno reprovado. <br> <br>";
        }
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function getNota1(){
        return $this->nota1;
    }

    public function setNota1($nota1){
        $this->nota1 = $nota1;
    }
    public function getNota2(){
        return $this->nota2;
    }

    public function setNota2($nota2){
        $this->nota2 = $nota2;
    }
    public function getNota3(){
        return $this->nota3;
    }

    public function setNota3($nota3){
        $this->nota3 = $nota3;
    }




    //quantidadeNotas
}

