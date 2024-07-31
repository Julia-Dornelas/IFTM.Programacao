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
                <h3>Lista de atividades</h3>
                <form action="add.php" method="post">

                    <div class="form-group ">
                        <label for="inputtext4">Nome:</label>
                        <input type="text" class="form-control" id="inputtext4" placeholder="Nome" name="campoNome" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputEmail4">Horário de ínicio:</label>
                        <input type="time" class="form-control" id="inputEmail4" placeholder="Horário de ínicio" name="campoInicio" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputCpf">Horário de término:</label>
                        <input type="time" class="form-control" id="inputCpf" placeholder="Horário de término" name="campoTermino" required>
                    </div> <br>

                    <label for="idturo" class="form-label">Turno:</label>
                    <div class="input-group mb-3">
                    <select class="custom-select" id="inputGroupSelect02" name="campoTurno">
                        <option selected>Selecione um</option>
                        <option value="Matutino">Matutino</option>
                        <option value="Vespertino">Vespertino</option>
                        <option value="Noturno">Noturno</option>
                    </select></div>

                    <div class="mb-3">
                        <label for="idData" form-label>Quantidade máxima de pessoas:</label>
                        <input type="number" class="form-control" id="idData" name="campoNumero" placeholder="" required>
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