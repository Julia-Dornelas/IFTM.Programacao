<?php

$id = $_POST['campoId'];
$jogo = $_POST['campoJogo'];
$numero_integrantes = $_POST['campoIntegrantes'];
$regras = $_POST['campoRegras'];

include '../includes/conexao.php';

$sql = "update jogos set jogo='$jogo', numero_integrantes='$numero_integrantes', regras='$regras' where id = '$id'; ";

$conexao->query($sql);

header("location: ../jogos");   