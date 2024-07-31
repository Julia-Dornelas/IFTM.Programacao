<?php
// Pega id na URL
$id = $_GET['id'];
// Constroi string com código sql
$sql = "select * from clientes where id = '$id'; ";
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
                <h3>Lista de clientes</h3>
                <form action="edit.php" method="post">
                    <input type="hidden" name="campoId" value="<?php echo $id; ?>">

                    <div class="form-group ">
                        <label for="inputtext4">Nome:</label>
                        <input type="text" class="form-control" id="inputtext4" value="<?php echo $item->nome; ?>" placeholder="" name="campoNome" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputEmail4">Email:</label>
                        <input type="email" class="form-control" id="inputEmail4" value="<?php echo $item->email; ?>" placeholder="" name="campoEmail" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputCpf">CPF:</label>
                        <input type="text" class="form-control" id="inputCpf" value="<?php echo $item->cpf; ?>" placeholder="" name="campoCPF" required>
                    </div> <br>

                    <div class="mb-3">
                        <label for="idData" form-label>Data de nascimento</label>
                        <input type="date" class="form-control" id="idData" name="campoData" value="<?php echo $item->data; ?>" placeholder="" required>
                    </div>

                    <div>
                        <label for="exampleFormControlSelect1" name="campoSexo">Sexo</Em>?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="exampleRadios1" value="0" <?php if (!$item->sexo) {
                                                                                                            echo "checked";
                                                                                                        } ?> name="campoSexo">
                            <label class="form-check-label" for="exampleRadios1">Masculino</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="exampleRadios2" value="1" <?php if ($item->sexo) {
                                                                                                            echo "checked";
                                                                                                        } ?> name="campoSexo">
                            <label class="form-check-label" for="exampleRadios2">Feminino</label>

                        </div> <br>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" required>Obs</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="campoObs" rows="2"><?php echo $item->obs; ?></textarea>
                        </div>
                        <br>

                        <button type="submit" class="btn btn-success mb-3">Corrigir</button>
                        <a href="./" class="btn btn-secondary mb-3">Voltar</a>
                </form>

            </div>
        </div>


    </div>



    <?php include '../includes/js.php'; ?>
</body>

</html>