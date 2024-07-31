<?php
$conexao = mysqli_connect("localhost","root","","lp3_aula06");

if(!$conexao){
    echo "Ocorreu um erro!";
    echo "Erro nº:" . mysqli_connect_errno() .PHP_EOL; 
    echo "Erro" . mysqli_connect_error() . PHP_EOL;
}
