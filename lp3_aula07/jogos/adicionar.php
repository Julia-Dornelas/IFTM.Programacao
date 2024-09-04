<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../includes/head.php'; ?>
</head>

<body class="corzinha">
    <h1 class="text-center corzinha text-white ">Dornelas Games</h1>
    <div class="container-fluid">
        <div class="row">
            <?php include '../includes/menu.php'; ?>
            <div class="col-9 dados">
                <h3>Lista de Jogos</h3>
                <form action="add.php" method="post">

                    <!--Jogo-->

                    <div class="form-group ">
                        <label for="inputtext4">Jogo:</label>
                        <input type="text" class="form-control" id="inputtext4" placeholder="Nome do jogo" name="campoJogo" required>
                    </div>


                    <!--Integrantes-->

                    <div class="form-group ">
                        <label for="inputCpf">Número de integrantes:</label>
                        <input type="text" class="form-control" id="inputCpf" placeholder="Número de integrantes" name="campoIntegrantes" required>
                    </div>

                    <!--Regras-->

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" required>Regras:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="campoRegras" rows="2"></textarea>
                    </div>

                    <button type="submit" class="btn btn-info mb-3">Gravar</button>
                    <a href="./" class="btn btn-secondary mb-3">Voltar</a>
                </form>

            </div>
        </div>


    </div>



    <?php include '../includes/js.php'; ?>
</body>

</html>