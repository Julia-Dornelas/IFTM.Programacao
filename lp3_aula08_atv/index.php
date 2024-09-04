<?php

require_once "Produto.php";

// Objeto 1

$c1 = new Produto();

$c1->nome = "Arroz";
$c1->preco = "20";
$c1->estoque = "15";

$c1->valorTotal();
$c1->disponiblidade();

// Objeto 2

$c2 = new Produto();

$c2->nome = "Feijao";
$c2->preco = "14";
$c2->estoque = "21";

$c2->valorTotal();
$c2->disponiblidade();

// Objeto 3

$c3 = new Produto();

$c3->nome = "Água";
$c3->preco = "3.50";
$c3->estoque = "0";

$c3->valorTotal();
$c3->disponiblidade();



