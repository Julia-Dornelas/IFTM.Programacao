<?php
require_once "Pessoa.php";

class Conta
{
    private Pessoa $titular;
    private float  $saldo = 0;
    private int  $agencia;
    private int  $conta;


    public function __construct($pessoa, $agencia, $conta)
    {
        $this->titular = $pessoa;
        $this->agencia = $agencia;
        $this->conta = $conta;
    }

    //TITULAR
    public function getTitular()
    {
        return $this->titular;
    }
    public function setTitular($titular)
    {
        $this->titular = $titular;
    }
    //AGENCIA
    public function getAgencia()
    {
        return $this->agencia;
    }
    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;
    }
    //CONTA
    public function getConta()
    {
        return $this->conta;
    }
    public function setConta($conta)
    {
        $this->conta = $conta;
    }
}
