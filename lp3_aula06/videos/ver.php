<?php
// Pega id na URL
$id = $_GET['id'];
// Constroi string com código sql
$sql = "select * from videos where id = '$id'; ";
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
                <h3>Lista de vídeos</h3>

                <div class="form-group ">
                    <strong>Título:</strong><?php echo $item->titulo; ?>
                </div>

                <div class="form-group ">
                    <strong>Autor:</strong><?php echo $item->autor; ?>
                </div>

                <div class="mb-3">
                    <strong>Data:</strong>
                    <?php echo $item->data; ?>
                </div>

                <div class="mb-3">
                    <strong>Vídeo:</strong> <?php echo $item->video; ?> <br> <br>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $item->video; ?>?si=NjcCHRW3mudFE-u2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <div class="mb-3">
                    <strong>Duração:</strong><?php echo $item->duracao; ?>
                </div>

                <div class="form-group">
                    <strong>Descrição:</strong><?php echo $item->descricao; ?>
                </div>

                <button type="submit" class="btn btn-success mb-3">Corrigir</button>
                <a href="./" class="btn btn-secondary mb-3">Voltar</a>

            </div>
        </div>


    </div>



    <?php include '../includes/js.php'; ?>
</body>

</html>