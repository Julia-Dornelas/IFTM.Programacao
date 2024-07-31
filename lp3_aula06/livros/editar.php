<?php
// Pega id na URL
$id = $_GET['id'];
// Constroi string com código sql
$sql = "select * from livros where id = '$id'; ";
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
                <h3>Lista de livros</h3>
                <form action="edit.php" method="post">
                    <input type="hidden" name="campoId" value="<?php echo $id; ?>">

                    <div class="form-group ">
                        <label for="inputtext4">Título:</label>
                        <input type="text" class="form-control" id="inputtext4"  value="<?php echo $item->titulo; ?>" placeholder="" name="campoTitulo" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputEmail4">Autor:</label>
                        <input type="text" class="form-control" id="inputAutor" placeholder=""  value="<?php echo $item->autor; ?>" name="campoAutor" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputCpf">Numero de páginas:</label>
                        <input type="number" class="form-control" id="inputPag" placeholder=""  value="<?php echo $item->numero_paginas; ?>"  name="campoPaginas" required>
                    </div> <br>

                    <div class="mb-3">
                        <label for="idData" form-label>Data de lançamento:</label>
                        <input type="date" class="form-control" id="idData" name="campoData" placeholder=""  value="<?php echo $item->data_lancamento; ?>" required>
                    </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" required>Síntese:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="campoSintese" rows="2"><?php echo $item->sintese; ?> </textarea>
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