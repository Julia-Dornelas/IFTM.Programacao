<?php

$id = $_POST['campoId'];
$titulo = $_POST['campoTitulo'];
$autor = $_POST['campoAutor'];
$data = $_POST['campoData'];
$video = $_POST['campoVideo'];
$duracao = $_POST['campoDuracao'];
$descricao = $_POST['campoDescricao'];

include '../includes/conexao.php';

$sql = "update videos set titulo='$titulo', autor='$autor', data='$data', video='$video', duracao='$duracao', descricao='$descricao' where id = '$id'; ";

$conexao->query($sql);

header("location: ../videos");   