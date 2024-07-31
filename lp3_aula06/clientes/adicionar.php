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
                <h3>Lista de clientes</h3>
                <form action="add.php" method="post">

                    <div class="form-group ">
                        <label for="inputtext4">Nome:</label>
                        <input type="text" class="form-control" id="inputtext4" placeholder="Nome" name="campoNome" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputEmail4">Email:</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="campoEmail" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputCpf">CPF:</label>
                        <input type="text" class="form-control" id="inputCpf" placeholder="12345678910" name="campoCPF" required>
                    </div> <br>

                    <div class="mb-3">
                        <label for="idData" form-label>Data de nascimento</label>
                        <input type="date" class="form-control" id="idData" name="campoData" placeholder="11/11/2024" required>
                    </div>

                    <div>
                        <label for="exampleFormControlSelect1" name="campoSexo">Sexo</Em>?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="exampleRadios1" value="0" checked name="campoSexo">
                            <label class="form-check-label" for="exampleRadios1">Masculino</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="exampleRadios2" value="1" name="campoSexo">
                            <label class="form-check-label" for="exampleRadios2">Feminino</label>

                        </div> <br>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" required>Obs</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="campoObs" rows="2"></textarea>
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