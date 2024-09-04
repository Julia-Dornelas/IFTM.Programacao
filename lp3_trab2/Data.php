<?php
require_once "Pessoa.php";
require_once "Vendedor.php";
require_once "ItemPedido.php";
require_once "Cliente.php";
require_once "Data.php";
require_once "Produto.php";
require_once "Pedido.php";

class Data
{
    // Atributos

    private int $dia;
    private int $mes;
    private int $ano;

    public function __construct($dia, $mes, $ano)
    {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
    }

    public function __toString()
    {
        return $this->dia . "/" . $this->mes . "/" . $this->ano;
    }
    public function Imprimir() {}


    //DIA
    public function getDia()
    {
        return $this->dia;
    }
    public function setDia($dia)
    {
        $this->dia = $dia;
    }
    //MES
    public function getMes()
    {
        return $this->mes;
    }
    public function setMes($mes)
    {
        $this->mes = $mes;
    }
    //ANO
    public function getAno()
    {
        return $this->ano;
    }
    public function setAno($ano)
    {
        $this->ano = $ano;
    }
}
