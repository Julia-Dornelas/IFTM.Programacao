
<?php

$receita = $_POST['campoReceita'];
$ingredientes = $_POST['campoIngredientes'];
$tipo = $_POST['campoTipo'];
$valor = $_POST['campoValor'];
$preparo = $_POST['campoPreparo'];
$porcao = $_POST['campoPorcao'];
$obs = $_POST['campoObs'];



include '../includes/conexao.php';

$sql = "insert into receitas (receita, ingredientes, tipo, valor, preparo, porcao, obs) 
        values ('$receita', '$ingredientes', '$tipo', '$valor', '$preparo', '$porcao', '$obs')";

$conexao->query($sql);

header("location: index.php"); 