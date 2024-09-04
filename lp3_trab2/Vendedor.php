<?php

require_once "Pessoa.php";
require_once "Vendedor.php";
require_once "ItemPedido.php";
require_once "Cliente.php";
require_once "Data.php";
require_once "Produto.php";
require_once "Pedido.php";

class Vendedor extends Pessoa
{

    // Atributos

    private float $salario;
    private float $comissao;

    public function __construct($nome, $cpf, $sexo, $dia, $mes, $ano, $salario, $comissao)
    {
        parent::__construct($nome, $cpf, $sexo, $dia, $mes, $ano);
        $this->salario = $salario;
        $this->comissao = $comissao;
    }

    public function Imprimir() {
        parent::Imprimir();
        echo "O salario é: " .  $this->salario . "<br>";
        echo "A comissão é: " . $this->comissao . "<br>";
    }


    //SALARIO
    public function getSalario()
    {
        return $this->salario;
    }
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }
    //COMISSAO
    public function getComissao()
    {
        return $this->comissao;
    }
    public function setComissao($comissao)
    {
        $this->comissao = $comissao;
    }
}
