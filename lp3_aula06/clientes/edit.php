<?php

$id = $_POST['campoId'];
$nome = $_POST['campoNome'];
$email = $_POST['campoEmail'];
$cpf = $_POST['campoCPF'];
$data = $_POST['campoData'];
$sexo = $_POST['campoSexo'];
$obs = $_POST['campoObs'];

include '../includes/conexao.php';

$sql = "update clientes set nome='$nome', email='$email', cpf='$cpf', data='$data', sexo='$sexo', obs='$obs' where id = '$id'; ";

$conexao->query($sql);

header("location: ../clientes");  