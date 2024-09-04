<?php
require_once "Pessoa.php";
require_once "Carro.php";
require_once "Conta.php";
//require_once "Motor.php";

$pessoa = new Pessoa ("Júlia", "12/04/2006", 2);
$carro = new Carro ("RAM", "3500", "ABC-1234", "XYZ", "153");

$carro->setMotorista($pessoa);

echo $carro->getRaca() . '<br>';

echo $carro->getMotorista()->getNome() . '<br>';

echo $carro->getMotor()->getPotencia() . '<br>';

$conta = new Conta($pessoa, 190, 3246578);