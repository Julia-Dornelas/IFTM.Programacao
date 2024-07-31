<?php

$id = $_POST['campoId'];
$nome = $_POST['campoNome'];
$hora_inicio = $_POST['campoInicio'];
$hora_termino = $_POST['campoTermino'];
$turno = $_POST['campoTurno'];
$numero = $_POST['campoNumero'];
$descricao = $_POST['campoDescricao'];

include '../includes/conexao.php';

$sql = "update atividades set nome='$nome', hora_inicio='$hora_inicio', hora_termino='$hora_termino', turno='$turno', numero='$numero', descricao='$descricao'  where id = '$id'; ";

$conexao->query($sql);

header("location: ../atividades");