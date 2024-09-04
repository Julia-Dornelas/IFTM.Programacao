<?php
$conexao = mysqli_connect("denislima.com.br","denis342_userlp3","1FtW#Lp3t2023","denis342_lp3");

if(!$conexao){
    echo "Ocorreu um erro!";
    echo "Erro nº:" . mysqli_connect_errno() .PHP_EOL; 
    echo "Erro" . mysqli_connect_error() . PHP_EOL;
}
