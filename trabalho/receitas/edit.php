<?php

$id = $_POST['campoId'];
$receita = $_POST['campoReceita'];
$ingredientes = $_POST['campoIngredientes'];
$tipo = $_POST['campoTipo'];
$valor = $_POST['campoValor'];
$preparo = $_POST['campoPreparo'];
$porcao = $_POST['campoPorcao'];
$obs = $_POST['campoObs'];

include '../includes/conexao.php';

$sql = "update receitas set receita='$receita', ingredientes='$ingredientes', tipo='$tipo', valor='$valor', preparo='$preparo', porcao='$porcao', obs='$obs'   where id = '$id'; ";

$conexao->query($sql);

header("location: ../receitas");   