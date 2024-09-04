<?php 

class Motor {
    private string $modelo;
    private int $potencia;

    public function __construct($modelo, $potencia)
    {
        $this->modelo = $modelo;
        $this->potencia = $potencia;
    }

    //MODELO
    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    //POTENCIA
    public function getPotencia()
    {
        return $this->potencia;
    }
    public function setPotencia($potencia)
    {
        $this->potencia = $potencia;
    }
}