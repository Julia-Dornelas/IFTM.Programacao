<?php 

require_once "Aluno.php";
require_once "Funcionarios.php";
require_once "Pessoa.php";
require_once "Pacientes.php";

// Objeto 01

$a1 = new Aluno("Julia", "1234567890", "12/12/1212", "Feminino", "123", "10", "2", "0");
$a1->mediaNotas();

echo "<pre>";
var_dump($a1);
echo "<br><br><br>"; 

$p1 = new Pacientes("Julia", "1234567890", "12/12/1212", "Feminino", ["12/12/12", "1/1/111"] );
$p1->AddConsulta("8/8/8");
$p1->MostrarConsulta();
$p1->Imprimir();

echo "<pre>";
var_dump($p1);
echo "<br><br><br>"; 

$p2 = new Pacientes("Denis", "1234567890", "5/512/85", "Feminino", ["42/74/4", "21/12/75"] );
$p2->AddConsulta("4/4/4");
$p2->MostrarConsulta();
$p2->Imprimir();

echo "<pre>";
var_dump($p2);
echo "<br><br><br>"; 









