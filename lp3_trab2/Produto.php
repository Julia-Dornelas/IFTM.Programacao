<?php
require_once "Pessoa.php";
require_once "Vendedor.php";
require_once "ItemPedido.php";
require_once "Cliente.php";
require_once "Data.php";
require_once "Produto.php";
require_once "Pedido.php";

class Produto
{
    // Atributos

    private int $codigo;
    private string $nomeProduto;
    private float $valor;

    public function __construct($codigo, $nomeProduto, $valor)
    {
        $this->codigo = $codigo;
        $this->nomeProduto = $nomeProduto;
        $this->valor = $valor;
    }

    public function Imprimir() {
        echo "O código do produto é: " . $this->codigo . "<br>";
        echo "O nome do produto é: " . $this->nomeProduto . "<br>";
        echo "O valor do produto é: R$" . $this->valor . "<br>";
    }


    //CODIGO
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    //NOME PRODUTO
    public function getNomeProduto()
    {
        return $this->nomeProduto;
    }
    public function setNomeProduto($nomeProduto)
    {
        $this->nomeProduto = $nomeProduto;
    }
    //VALOR
    public function getValor()
    {
        return $this->valor;
    }
    public function setValor($valor)
    {
        $this->valor = $valor;
    }
}
