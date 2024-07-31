<?php
include '../includes/conexao.php';
$sql = "select * from atividades";

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
                <h3 class="text-center">Lista de atividades</h3>
                <a href="adicionar.php" class="btn btn-success btn-smv ">Adicionar</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Horário</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($item = mysqli_fetch_object($resultado)) { ?>
                            <tr>
                                <th scope="row"><?php echo $item->id; ?> </th>
                                <td><?php echo $item->nome; ?> </td>
                                <td><?php echo $item->hora_inicio; ?> </td>
                                <td><?php echo $item->numero; ?> </td>

                                <!--BOTÕES-->
                                <td>
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