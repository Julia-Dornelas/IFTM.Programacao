<?php
require_once "../../controllers/CategoriaController.php";
$CategoriaController = new CategoriaController();

$dado = "";

if(isset($_POST) && count ($_POST) > 0){
    $c = new Categoria();
    $c->setId(htmlspecialchars($_POST['campoId']));
    $c->setNome(htmlspecialchars($_POST['campoNome']));
    $c->setDescricao(htmlspecialchars($_POST['campoDescricao']));

    $rs = $CategoriaController->add($c);
    if($rs){
        header("location: ./");
        exit();
    }

}else if(isset($_GET['id']) && !empty($_GET['id'])){
    $dado = $CategoriaController->findId($_GET['id']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../includes/head.php"; ?>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <?php include "../includes/menu.php"; ?>
            <div class="col-9">
                <h3>Cadastro de categorias</h3>
                <form action="" method="post">
                    <input type="hidden" name="campoId" value="<?= $dado->getId(); ?>">
                    <div class="mb-3">
                        <label for="idNome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="campoNome" 
                            id="idNome" placeholder="Seu nome completo" value="<?= $dado->getNome(); ?>">
                    </div>
                    <div class="mt-3 mb-3">
                        <label for="idDescricao" class="form-label">Descrição</label>
                        <textarea class="form-control" id="idDescricao" name="campoDescricao"><?= $dado->getDescricao(); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Gravar</button>
                    <a href="./" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>

</html>