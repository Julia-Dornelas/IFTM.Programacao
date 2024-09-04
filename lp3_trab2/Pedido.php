<?php
require_once "Pessoa.php";
require_once "Vendedor.php";
require_once "ItemPedido.php";
require_once "Cliente.php";
require_once "Data.php";
require_once "Produto.php";
require_once "Pedido.php";

class Pedido
{
    // Atributos

    private Data $data;
    /**
     * @var ItemPedido[]
     */
    private $listaItens;
    private Cliente $cliente;
    private Vendedor $vendedor;
    private float $valorTotal;

    public function __construct($cliente, $vendedor, $item, $quantidade)
    {
        $this->data = new Data(date('d'), date('m'), date('Y'));
        $this->listaItens = array(new ItemPedido($item, $quantidade));
        $this->cliente = $cliente;
        $this->vendedor = $vendedor;
        //$this->valorTotal = $valorTotal;
    }
//ADICIONAR ITEM
    public function adicionarItem($item)
    {
        $this->listaItens[] = $item;
    }

//CAUCULAR VALOR TOTAL
    private function calcularValorTotal()
    {
        $soma = 0;
        foreach($this->listaItens as $item)
            $soma += $item->getValorItem() * $item->getQuantidade();
        return $soma;
    }
 
    public function Imprimir() {
        echo "Lista de pedidos: " . "<br>";
        foreach($this->listaItens as $item){
            echo " ° " . $item->getItem()->getNomeProduto() . " - ";
            echo $item->getQuantidade() . " unidades. <br>";
        }
        echo "Valor total do pedido: R$" . $this->calcularValorTotal() . "<br>";
    }
    //DATA
    public function getdata()
    {
        return $this->data;
    }
    public function setData($data)
    {
        $this->data = $data;

    }
    //LISTAR ITEM
    public function getListaItens()
    {
        return $this->listaItens;
    }
    public function setListaItens($listaItens)
    {
        $this->listaItens = $listaItens;
    }
    //CLIENTE
    public function getCliente()
    {
        return $this->cliente;
    }
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }
    //VENDEDOR
    public function getVendedor()
    {
        return $this->vendedor;
    }
    public function setVendedor($vendedor)
    {
        $this->vendedor = $vendedor;
    }
    //VALOR TOTAL
    public function getValorTotal()
    {
        return $this->valorTotal;
    }
    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;
    }
    //ADICIONAR COMISSAO
    private function adicionarComissao()
    {
        $valorTotal = $this->calcularValorTotal();
        return $valorTotal + $valorTotal * ($this->vendedor->getComissao()/100);
    }
    //FECHAR PEDIDO
    public function fecharPedido(){
        echo "-----PEDIDO FECHADO!----- <br>";
        echo "Data de compra: " . $this->data->__toString() . "<br>";
        echo "Cliente: " . $this->cliente->getNome() . "<br>";
        echo "Vendedor: " . $this->vendedor->getNome() . "<br>";
        echo "Lista de pedidos: " . "<br>";
        foreach($this->listaItens as $item){
            echo " ° " . $item->getItem()->getNomeProduto() . " - ";
            echo $item->getQuantidade() . " unidades. <br>";
        }
        echo "Valor total do pedido: R$" . $this->calcularValorTotal() . "<br>";
        echo "A comissão será: R$" . $this->adicionarComissao() . "<br>";
    }


}
