
<?php

$nome = $_POST['campoNome'];
$hora_inicio = $_POST['campoInicio'];
$hora_termino = $_POST['campoTermino'];
$turno = $_POST['campoTurno'];
$numero = $_POST['campoNumero'];
$descricao = $_POST['campoDescricao'];

include '../includes/conexao.php';

$sql = "insert into atividades(nome, hora_inicio, hora_termino, turno, numero, descricao) 
        values ('$nome', '$hora_inicio', '$hora_termino', '$turno', '$numero', '$descricao')";

$conexao->query($sql);

header("location: index.php");
