<?php
// Pega id na URL
$id = $_GET['id'];
// Constroi string com código sql
$sql = "select * from jogos where id = '$id'; ";
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

<body class="corzinha">
    <h1 class="text-center corzinha text-white ">Dornelas Games</h1>
    <div class="container-fluid">
        <div class="row">
            <?php include '../includes/menu.php'; ?> <br>
            <div class="col-9 dados">
                <h3>Lista de jogos</h3>
                <form action="edit.php" method="post">
                <input type="hidden" name="campoId" value="<?php echo $id; ?>">

                    <!--Jogo-->

                    <div class="form-group ">
                        <label for="inputtext4">Jogo:</label>
                        <input type="text" class="form-control" id="inputtext4" value="<?php echo $item->jogo; ?>" placeholder="" name="campoJogo" required>
                    </div>

                    <!--Integrantes-->

                    <div class="form-group ">
                        <label for="inputCpf">Número de integrantes:</label>
                        <input type="text" class="form-control" id="inputCpf" value="<?php echo $item->numero_integrantes; ?> "placeholder="" name="campoIntegrantes" required>
                    </div>

                    <!--Regras-->

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" required>Regras:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="campoRegras" rows="2"><?php echo $item->regras;?></textarea>
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