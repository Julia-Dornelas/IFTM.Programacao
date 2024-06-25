<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //EXERCICIO 01

    echo "1) Crie um vetor de 10 números. Mostre os números e o somatório destes na tela. <br> <br>";
        $vetor = [1,2,3,4,5,6,7,8,9,10];
        $soma = 0;
        for($i = 0; $i <= 10; $i++){
            echo $vetor[$i] . "<br>";
            $soma += $vetor[$i];
        }
        echo "A soma dos números é: " . $soma . "<br> <br>" ;

    //EXERCICIO 02

    echo "2) Crie um vetor com 5 nomes, exiba a  lista desses nomes na tela.<br> <br>";
    $vetor = ["Júlia", "Gustavo", "Marcos", "Maria Julia", "Gabriel"];
        for($i = 0; $i <= 10; $i++)
            echo ($vetor[$i] . "<br>");


    //EXERCICIO 03

    echo "3) Crie um vetor de 10 números. Monte outro vetor com os valores do primeiro multiplicados por 5. 
    Exiba os valores dos dois vetores na tela, simultaneamente, em  duas colunas (um em cada coluna), uma posição por linha.<br>";

    //EXERCICIO 04

    echo "4) Gerar um vetor com 20 números aleatórios compreendidos entre 0 e 100. Exibir o vetor.<br>" ;
    

    ?>
</body>
</html>