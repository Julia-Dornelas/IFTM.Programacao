<?php
require_once "Pessoa.php";
require_once "Vendedor.php";
require_once "ItemPedido.php";
require_once "Cliente.php";
require_once "Data.php";
require_once "Produto.php";
require_once "Pedido.php";

class ItemPedido
{
    // Atributos

    private Produto $item;
    private int $quantidade;
    private float $valorItem;

    public function __construct($item, $quantidade)
    {
        $this->item = $item;
        $this->quantidade = $quantidade;
        $this->valorItem = $this->item->getValor();
    }

    public function Imprimir() {}


    //ITEM
    public function getItem()
    {
        return $this->item;
    }
    public function setItem($item)
    {
        $this->item = $item;
    }
    //QUANTIDADE
    public function getQuantidade()
    {
        return $this->quantidade;
    }
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }
    //VALOR ITEM
    public function getValorItem()
    {
        return $this->valorItem;
    }
    public function setValorItem($valorItem)
    {
        $this->valorItem = $valorItem;
    }
}
