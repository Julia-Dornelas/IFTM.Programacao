<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>
    <div class="conteiner">

        <h1>HTML + CSS + PHP</h1>

        <?php for ($i = 1; $i < 4; $i++) { ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">CARD <?php echo $i; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Subtitulo do card</h6>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <a href="#" class="card-link">Link do card</a>
                    <a href="#" class="card-link">Outro link</a>
                </div>
            </div>
        <?php } ?>

        <?php
        $cod = $_GET['cod'];
            $cor = ["primary", "success", "danger", "warning"];
            $msg = [
                        "Isso é uma informação!",
                        "Gravado com sucesso!",
                        "Ocorreu um erro!",
                        "Pode haver algum erro!"
                    ];
        ?>

        <div class="alert alert-<?php echo $cor[$cod];?>" role="alert">
            <?php echo $msg[$cod]; ?>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>