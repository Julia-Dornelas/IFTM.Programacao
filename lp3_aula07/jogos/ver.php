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
    <h1 class="text-center titulo text-white">Dornelas Games</h1>
    <div class="container-fluid">
        <div class="row">
            <?php include '../includes/menu.php'; ?>
            <div class="col-9 dados">
                <h3 class="text-center">Lista de jogos</h3>

                <div class="form-group ">
                    <strong>Jogo: </strong><?php echo $item->jogo; ?>
                </div>

                <div class="form-group ">
                    <strong>Participantes: </strong><?php echo $item->numero_integrantes; ?>
                </div>

                <div class="mb-3">
                    <strong>Regras: </strong><?php echo $item->regras; ?>
                </div>


                <a href="./" class="btn btn-secondary mb-3 badge-pill">Voltar</a>

            </div>
        </div>


    </div>



    <?php include '../includes/js.php'; ?>
</body>

</html>