<?php
// Pega id na URL
$id = $_GET['id'];
// Constroi string com código sql
$sql = "select * from produtos where id = '$id'; ";
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
                <h3>Lista de produtos</h3>
                <form action="edit.php" method="post">
                    <input type="hidden" name="campoId" value="<?php echo $id; ?>">

                    <div class="form-group ">
                        <label for="inputtext4">Nome:</label>
                        <input type="text" class="form-control" id="id-nome" value="<?php echo $item->nome; ?>" placeholder="" name="campoNome" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputEmail4">Categoria:</label>
                        <input type="text" class="form-control" id="id-categoria" value="<?php echo $item->categoria; ?>" placeholder="" name="campoCategoria" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputCpf">Preço:</label>
                        <input type="text" class="form-control" id="id-Preco" value="<?php echo $item->preco; ?>" placeholder="" name="campoPreco" required>
                    </div> <br>

                    <button type="submit" class="btn btn-success mb-3">Corrigir</button>
                    <a href="./" class="btn btn-secondary mb-3">Voltar</a>

                </form>

            </div>
        </div>


    </div>



    <?php include '../includes/js.php'; ?>
</body>

</html>