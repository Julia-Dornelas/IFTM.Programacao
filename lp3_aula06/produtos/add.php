
<?php

$nome = $_POST['campoNome'];
$categoria = $_POST['campoCategoria'];
$preco = $_POST['campoPreco'];


include '../includes/conexao.php';

$sql = "insert into produtos(nome, categoria, preco) 
        values ('$nome', '$categoria', '$preco')";

$conexao->query($sql);

header("location: ../produtos");
