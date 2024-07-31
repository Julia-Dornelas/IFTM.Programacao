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
                <h3>Lista de produtos</h3>
                <form action="add.php" method="post">

                    <div class="form-group ">
                        <label for="inputtext4">Nome:</label>
                        <input type="text" class="form-control" id="inputtext4" placeholder="Nome" name="campoNome" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputEmail4">Categoria:</label>
                        <input type="text" class="form-control" id="inputCategoria" placeholder="Categoria" name="campoCategoria" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputCpf">Preço:</label>
                        <input type="text" class="form-control" id="inputPreco" placeholder="0,00" name="campoPreco" required>
                    </div> <br>

                    <button type="submit" class="btn btn-success mb-3">Gravar</button>
                    <a href="./" class="btn btn-secondary mb-3">Voltar</a>
                </form>

            </div>
        </div>


    </div>



    <?php include '../includes/js.php'; ?>
</body>

</html>