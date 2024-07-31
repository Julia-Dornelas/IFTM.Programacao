<?php

$id = $_POST['campoId'];
$titulo = $_POST['campoTitulo'];
$autor = $_POST['campoAutor'];
$numero_paginas = $_POST['campoPaginas'];
$data_lancamento = $_POST['campoData'];
$sintese = $_POST['campoSintese'];

include '../includes/conexao.php';

$sql = "update livros set titulo='$titulo', autor='$autor', numero_paginas='$numero_paginas', data_lancamento='$data_lancamento', sintese='$sintese' where id = '$id'; ";

$conexao->query($sql);

header("location: ../livros");  