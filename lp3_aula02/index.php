<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>

    <h1>AULA DE VETOR</h1>

    <?php

        $vetor = array(85, 54, 76, 15, 3); 

        $outrovetor = [1,2,3,4,5];

        echo "Vetor <br>";
        for($i = 0; $i < 5; $i++)
            echo ($vetor[$i] . "<br>"); 
        
        echo "<br> Outro vetor <br>";

        $i=0;

        while($i < 5){
            echo ($outrovetor[$i] . "<br>"); 
            $i++;
        }
    ?>
</body>
</html>