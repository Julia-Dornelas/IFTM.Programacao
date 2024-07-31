
<?php

$titulo = $_POST['campoTitulo'];
$autor = $_POST['campoAutor'];
$data = $_POST['campoData'];
$video = $_POST['campoVideo'];
$duracao = $_POST['campoDuracao'];
$descricao = $_POST['campoDescricao'];

include '../includes/conexao.php';

$sql = "insert into videos(titulo, autor, data, video, duracao, descricao) 
        values ('$titulo', '$autor', '$data', '$video', '$duracao', '$descricao')";

$conexao->query($sql);

header("location: index.php");  