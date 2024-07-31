<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../includes/head.php'; ?>
</head>

<body class="bg-dark">
    <h1 class="text-center bg-dark text-white ">Sistema de Cadastro</h1> <br>
    <div class="container-fluid">
        <div class="row">
            <?php include '../includes/menu.php'; ?>
            <div class="col-9 dados">
                <h3>Lista de participantes</h3>
                <form action="add.php" method="post">

                    <div class="form-group ">
                        <label for="inputtext4">Título:</label>
                        <input type="text" class="form-control" id="inputtext4" placeholder="Título" name="campoTitulo" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputEmail4">Autor:</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Autor" name="campoAutor" required>
                    </div> <br>

                    <div class="mb-3">
                        <label for="idData" form-label>Data:</label>
                        <input type="date" class="form-control" id="idData" name="campoData" placeholder="11/11/2024" required>
                    </div>

                    <div class="mb-3">
                        <label for="idData" form-label>Vídeo:</label>
                        <input type="text" class="form-control" id="idData" name="campoVideo" placeholder="" required>
                    </div>

                    <div class="mb-3">
                        <label for="idData" form-label>Duração:</label>
                        <input type="time" class="form-control" id="idData" name="campoDuracao" placeholder="11/11/2024" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" required>Descrição:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="campoDescricao" rows="2"></textarea>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-success mb-3">Gravar</button>
                    <a href="./" class="btn btn-secondary mb-3">Voltar</a>
                </form>

            </div>
        </div>


    </div>



    <?php include '../includes/js.php'; ?>
</body>

</html>