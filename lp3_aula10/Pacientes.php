<?php

class Pacientes extends Pessoa
{

    public function __construct($nome, $cpf, $dataNascimento, $sexo, $historico_consultas)
    {
        parent::__construct($nome, $cpf, $dataNascimento, $sexo);
        $this->historico_consultas = $historico_consultas;
    }

    //Atributo
    public $historico_consultas;

    //Add 
    public function AddConsulta($consulta){
        array_push($this->historico_consultas, $consulta);
    }
    //Mostarr
    public function MostrarConsulta(){
        echo "Historico de consultas: ";
        for($i = 0; $i < count($this->historico_consultas); $i++){
            echo $this->historico_consultas[$i] . "<br>"; 
        }
    
    }

    public function Imprimir(){
        echo "Imprimindo";
    }
}
 