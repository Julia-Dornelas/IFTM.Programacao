<?php
// Pega id na URL
$id = $_GET['id'];
// Constroi string com código sql
$sql = "select * from atividades where id = '$id'; ";
// Inclui a conexão com o banco de dados
include '../includes/conexao.php';
// Executa string $sql no banco de dados
$resultado = $conexao->query($sql);
// Transforma dados em objeto
$item = mysqli_fetch_object($resultado);

?>
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
                <form action="edit.php" method="post">
                    <input type="hidden" name="campoId" value="<?php echo $id; ?>">

                    <div class="form-group ">
                        <label for="inputtext4">Nome:</label>
                        <input type="text" class="form-control" id="inputtext4" value="<?php echo $item->nome; ?>" placeholder="" name="campoNome" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputEmail4">Horário de ínicio:</label>
                        <input type="time" class="form-control" id="inputhora4" value="<?php echo $item->hora_inicio; ?>" placeholder="" name="campoInicio">
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputCpf">Horário de término:</label>
                        <input type="time" class="form-control" id="inputhora" value="<?php echo $item->hora_termino; ?>" placeholder="" name="campoTermino">
                    </div> <br>
                    <label for="idturo" class="form-label">Turno:</label>
                    <div class="input-group mb-3">

                        <select class="custom-select" id="inputGroupSelect02" name="campoTurno">
                            <option selected>Selecione um</option>
                            <option value="0" <?php if (!$item->turno) {
                                                    echo "selected";
                                                } ?>>Matutino</option>
                            <option value="1" <?php if ($item->turno == 1) {
                                                    echo "selected";
                                                } ?>>Vespertino</option>
                            <option value="2" <?php if ($item->turno == 2) {
                                                    echo "selected";
                                                } ?>>Noturno</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="idData" form-label>Quantidade máxima de pessoas:</label>
                        <input type="number" class="form-control" id="idData" value="<?php echo $item->numero; ?>" name="campoNumero">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" required>Descrição:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="campoDescricao" rows="2"> <?php echo $item->descricao; ?></textarea>
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