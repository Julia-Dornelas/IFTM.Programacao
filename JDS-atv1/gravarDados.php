<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Enviado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="p-3 mb-2 bg-dark ">

    <div class="container shadow-lg p-3 mb-5 bg-white rounded border border-danger border-3 '">
        <h1 class="text-center text-danger mt-2 mb-2">Seu formulário foi enviado!</h1>

        <?php
        $nome = $_POST['campoNome'];
        $email = $_POST['campoEmail'];
        $celular = $_POST['campoCel'];
        $cidade = $_POST['campoCity'];
        $idade = $_POST['campoIdade'];
        $carro = $_POST['campoCarro'];
        $marca = $_POST['campoMarca'];
        $veiculo = $_POST['campoVeiculo'];


        echo "Nome: " .  $nome . "<br>" . "Email: " .  $email . "<br>" . "Celular: " .  $celular  . "<br>" . "Cidade e Estado: " .  $cidade  . "<br>" . "Idade: " .  $idade  . "<br>" . "Qual veiculo favorito?: " .  $carro  . "<br>" . "Marca favorita: " .  $marca  . "<br>" . "Possui algum veiculo?: " .  $veiculo;
        ?>

    </div>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>