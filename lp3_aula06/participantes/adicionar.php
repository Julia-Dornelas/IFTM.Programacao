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
                        <label for="inputtext4">Nome:</label>
                        <input type="text" class="form-control" id="inputtext4" placeholder="Nome" name="campoNome" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputEmail4">Email:</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="campoEmail" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputCpf">CPF:</label>
                        <input type="text" class="form-control" id="inputCpf" placeholder="123.456.789-10" name="campoCPF" required>
                    </div> <br>

                    <div class="mb-3">
                        <label for="idCel" form-label>Telefone:</label>
                        <input type="text" class="form-control" id="idData" name="campoTelefone" placeholder="(00) 9 1234-5678" required>
                    </div>

                    <div class="mb-3">
                        <label for="idCel" form-label>Rua:</label>
                        <input type="text" class="form-control" id="idData" name="campoRua" placeholder="Digite sua rua" required>
                    </div>

                    <div class="mb-3">
                        <label for="idCel" form-label>Número da residencia:</label>
                        <input type="text" class="form-control" id="idData" name="campoNumero" placeholder="0000" required>
                    </div>

                    <div class="mb-3">
                        <label for="idCel" form-label>Bairro:</label>
                        <input type="text" class="form-control" id="idData" name="campoBairro" placeholder="Digite seu bairro" required>
                    </div>

                    <div class="mb-3">
                        <label for="idCel" form-label>Cidade:</label>
                        <input type="text" class="form-control" id="idData" name="campoCidade" placeholder="Digite sua cidade" required>
                    </div>

                    <div class="mb-3">
                        <label for="idCel" form-label>CEP:</label>
                        <input type="text" class="form-control" id="idData" name="campoCep" placeholder="00000-000" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" required>Complemento:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="campoComplemento" rows="2"></textarea>
                    </div>

                    <div>
                        <label for="exampleFormControlSelect1" name="campoSelecionado">Selecionado:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="exampleRadios1" value="0" checked name="campoSexo">
                            <label class="form-check-label" for="exampleRadios1">Sim</label>
                        </div> <br>
                    </div>

                    <button type="submit" class="btn btn-success mb-3">Gravar</button>
                    <a href="./" class="btn btn-secondary mb-3">Voltar</a>
                </form>

            </div>
        </div>


    </div>



    <?php include '../includes/js.php'; ?>
</body>

</html>