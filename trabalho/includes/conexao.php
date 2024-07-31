<?php
$conexao = mysqli_connect("localhost","root","","trabalho");

if(!$conexao){
    echo "Ocorreu um erro!";
    echo "Erro nº:" . mysqli_connect_errno() .PHP_EOL; 
    echo "Erro" . mysqli_connect_error() . PHP_EOL;
}
