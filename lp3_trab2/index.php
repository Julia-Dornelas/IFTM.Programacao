<?php
require_once "Pessoa.php";
require_once "Vendedor.php";
require_once "ItemPedido.php";
require_once "Cliente.php";
require_once "Data.php";
require_once "Produto.php";
require_once "Pedido.php";


//VENDEDOR
$vendedor = new Vendedor ("Julia", "12235", "Feminino", 12, 2, 2004, "1200", "200");

//CLIENTE
$cliente = new Cliente ("Gustavo", "129.233.456-40", "Masculino", 12, 04, 2006, "Não possui preferências");

//PRODUTO
$produto = new Produto ("123", "Coca-Cola", 2);

//PRODUTO
$produto2 = new Produto ("2", "Pizza", 5);

//FECHAR PEDIDO
$pedido = new Pedido ($cliente, $vendedor, $produto, 2 );

//ADICIONAR ITEM
$itemPedido = new ItemPedido($produto2, 3);
$pedido->adicionarItem($itemPedido);
$pedido->fecharPedido();

echo "<br> -----NOTA FISCAL----- <br>";
$pedido->imprimir();