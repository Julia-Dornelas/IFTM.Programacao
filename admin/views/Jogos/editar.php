<?php
require_once "../../controllers/JogosController.php";
$JogosController = new JogosController();

$dado = "";

if(isset($_POST) && count ($_POST) > 0){
    $c = new Jogos();
    $c->setJogo(htmlspecialchars($_POST['campoJogo']));
    $c->setNumeroIntegrantes(htmlspecialchars($_POST['campoNumeroIntegrantes']));
    $c->setRegras(htmlspecialchars($_POST['campoRegras']));

    $rs = $JogosController->add($c);
    if($rs){
        header("location: ./");
        exit();
    }

}else if(isset($_GET['id']) && !empty($_GET['id'])){
    $dado = $JogosController->findId($_GET['id']);
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
                <h3>Cadastro de Jogos</h3>
                <form action="" method="post">
                    <input type="hidden" name="campoId" value="<?= $dado->getId(); ?>">
                    <div class="mb-3">
                        <label for="idJogos" class="form-label">Jogo</label>
                        <input type="text" class="form-control" name="campoJogos" 
                            id="idJogos" placeholder="Nome do jogo" value="<?= $dado->getJogo(); ?>">
                    </div>
                    <div class="mt-3 mb-3">
                        <label for="idNumeroIntegrantes" class="form-label">Numero de Integrantes</label>
                        <textarea class="form-control" id="idNumeroIntegrantes" name="campoNumeroIntegrantes"><?= $dado->getNumeroIntegrantes(); ?></textarea>
                    </div>
                    <div class="mt-3 mb-3">
                        <label for="idRegras" class="form-label">Regras</label>
                        <textarea class="form-control" id="idRegras" name="campoRegras"><?= $dado->getRegras(); ?></textarea>
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