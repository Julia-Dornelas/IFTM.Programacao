
<?php

$jogo = $_POST['campoJogo'];
$numero_integrantes = $_POST['campoIntegrantes'];
$regras = $_POST['campoRegras'];

include '../includes/conexao.php';

$sql = "insert into jogos (jogo, numero_integrantes, regras) 
        values ('$jogo', '$numero_integrantes', '$regras')";

$conexao->query($sql);

header("location: index.php"); 