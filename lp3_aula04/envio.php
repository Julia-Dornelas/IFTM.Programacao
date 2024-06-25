<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded w-50 p-3 ">
        <div class="text-center">
            <h1>Seu formulário foi enviado!</h1>
        </div>

        <?php
        $nome = $_POST['campoNome'];
        $email = $_POST['campoEmail'];
        $data = $_POST['campoData'];
        $sexo = $_POST['campoSexo'];
        $descricao = $_POST['campoDescricao'];

        echo $nome . "<br>" . $email . "<br>" . $data . "<br>" . $sexo . "<br>" . $descricao;
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>