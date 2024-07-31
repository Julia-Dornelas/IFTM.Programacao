<?php

$id = $_POST['campoId'];
$nome = $_POST['campoNome'];
$email = $_POST['campoEmail'];
$cpf = $_POST['campoCPF'];
$telefone = $_POST['campoTelefone'];
$rua = $_POST['campoRua'];
$numero = $_POST['campoNumero'];
$bairro = $_POST['campoBairro'];
$cidade = $_POST['campoCidade'];
$cep = $_POST['campoCep'];
$complemento = $_POST['campoComplemento'];
$selecionado = $_POST['campoSelecionado'];

include '../includes/conexao.php';

$sql = "update participantes set nome='$nome', email='$email', cpf='$cpf', telefone='$telefone', rua='$rua', numero='$numero', bairro='$bairro', cidade='$cidade', cep='$cep', complemento='$complemento', selecionado='$selecionado' where id = '$id'; ";

$conexao->query($sql);

header("location: ../participantes");   