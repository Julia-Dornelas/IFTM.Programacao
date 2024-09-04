<?php
require_once "Pessoa.php";
require_once "Motor.php";

class Carro
{
    private string $raca;
    private Pessoa $motorista;
    private string $modelo;
    private string $placa;
    private Motor $motor;



    public function __construct($raca, $modelo, $placa, $modMotor, $potencia)
    {
        $this->raca = $raca;
        $this->modelo = $modelo;
        $this->placa = $placa;
        $this->motor = new Motor ($modMotor, $potencia);
    }


    //RACA
    public function getRaca()
    { 
        return $this->raca;
    }
    public function setRaca($raca)
    {
        $this->raca = $raca;
    }
    //MOTORISTA
    public function getMotorista()
    {
        return $this->motorista;
    }
    public function setMotorista($motorista)
    {
        $this->motorista = $motorista;
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
    //MODELO
    public function getPlaca()
    {
        return $this->placa;
    }
    public function setPlaca($placa)
    {
        $this->placa = $placa;
    }
    //MOTOR
    public function getMotor()
    {
        return $this->motor;
    }
    public function setMotor($motor)
    {
        $this->motor = $motor;
    }
    //MOTORISTA
}
