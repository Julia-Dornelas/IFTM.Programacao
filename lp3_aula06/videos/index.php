<?php
include '../includes/conexao.php';
$sql = "select * from videos";

$resultado = $conexao->query($sql);
mysqli_close($conexao);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../includes/head.php'; ?>
</head>

<body class="bg-dark">
    <h1 class="text-center titulo text-white">Sistema de Cadastro</h1>
    <div class="container-fluid">
        <div class="row">
            <?php include '../includes/menu.php'; ?>
            <div class="col-9 dados">
                <h3 class="text-center">Lista de vídeos</h3>
                <a href="adicionar.php" class="btn btn-success btn-smv ">Adicionar</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Video</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($item = mysqli_fetch_object($resultado)) { ?>
                            <tr>
                                <th scope="row"><?php echo $item->id; ?> </th>
                                <td><?php echo $item->titulo; ?> </td>
                                <td><?php echo $item->autor; ?> </td>
                                <td>
                                    <img src="https://img.youtube.com/vi/<?php echo $item->video; ?>/0.jpg" width="100px" alt="">
                                </td>
                                <td>
                                    <a href="ver.php?id=<?php echo $item->id; ?>" class="btn btn-primary btn-sm">Visualizar</a>
                                    <a href="editar.php?id=<?php echo $item->id; ?>" class="btn btn-secondary btn-sm">Editar</a>
                                    <a href="javascript:excluir(<?php echo $item->id; ?>)" class="btn btn-danger btn-sm">Excluir</a>
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