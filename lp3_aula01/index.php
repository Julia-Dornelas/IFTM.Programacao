<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>22/02/24 - Aula 01</title>
</head>
<body>
    <?php
        for($i = 0; $i <= 50; $i++){
            if($i % 2 ==  0 )
                echo $i . " - Par" . "<br>";
 
            else
                echo $i. " - Ímpar" . "<br>";
        }
    ?>
</body>
</html>