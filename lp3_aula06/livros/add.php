
<?php

$titulo = $_POST['campoTitulo'];
$autor = $_POST['campoAutor'];
$numero_paginas = $_POST['campoPaginas'];
$data_lancamento = $_POST['campoData'];
$sintese = $_POST['campoSintese'];

include '../includes/conexao.php';

$sql = "insert into livros(titulo, autor, numero_paginas, data_lancamento, sintese) 
        values ('$titulo', '$autor', '$numero_paginas', '$data_lancamento', '$sintese')";

$conexao->query($sql);

header("location: index.php"); 