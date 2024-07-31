<?php
// Pega id na URL
$id = $_GET['id'];
// Constroi string com código sql
$sql = "select * from receitas where id = '$id'; ";
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
    <h1 class="text-center titulo text-white">Receitas Dornelas</h1>
    <div class="container-fluid">
        <div class="row">
            <?php include '../includes/menu.php'; ?>
            <div class="col-9 dados">
                <h3 class="text-center">Lista de receitas</h3>

                <div class="form-group ">
                    <strong>Receita: </strong><?php echo $item->receita; ?>
                </div>

                <div class="form-group ">
                    <strong>ingredientes: </strong><?php echo $item->ingredientes; ?>
                </div>

                <div class="mb-3">
                    <strong>Tipo: </strong><?php if (!$item->tipo) {echo "salgado";} else {echo "doce";}?>
                </div>


                <div class="mb-3">
                    <strong>Valor: </strong><?php echo $item->valor; ?>
                </div>

                <div class="mb-3">
                    <strong>Preparo: </strong><?php echo $item->preparo; ?>
                </div>

                <div class="mb-3">
                    <strong>Porção: </strong> <?php echo $item->porcao; ?>
                </div>
                <div class="mb-3">
                    <strong>Obs: </strong> <?php echo $item->obs; ?>
                </div>


                <a href="./" class="btn btn-secondary mb-3 badge-pill">Voltar</a>

            </div>
        </div>


    </div>



    <?php include '../includes/js.php'; ?>
</body>

</html>