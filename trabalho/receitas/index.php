<?php
include '../includes/conexao.php';
$sql = "select * from receitas";

$resultado = $conexao->query($sql);
mysqli_close($conexao);
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
                <a href="adicionar.php" class="btn btn-info badge-pill btn-smv ">Adicionar</a> <br>
                <br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Receita</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Porção</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($item = mysqli_fetch_object($resultado)) { ?>
                            <tr>
                                <th scope="row"><?php echo $item->id; ?> </th>
                                <td><?php echo $item->receita; ?> </td>
                                <td><?php echo $item->valor; ?> </td>
                                <td><?php echo $item->porcao; ?> </td>
                                <td>
                                    <a href="ver.php?id=<?php echo $item->id; ?>" class="btn btn-primary badge-pill btn-sm">Visualizar</a>
                                    <a href="editar.php?id=<?php echo $item->id; ?>" class="btn btn-secondary badge-pill btn-sm">Editar</a>
                                    <a href="javascript:excluir(<?php echo $item->id; ?>)" class="btn btn-danger badge-pill btn-sm">Excluir</a>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>


    </div>



    <?php include '../includes/js.php'; ?>

    <!-- JS para excluir -->

    <script>
        function excluir(id) {
            if (confirm("Tem certeza que deseja excluir?")) {
                window.location.href = "del.php?id=" + id;
            }
        }
    </script>
</body>

</html>