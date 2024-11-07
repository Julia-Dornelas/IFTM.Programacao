<?php
if(isset($_GET['id']) && !empty($_GET['id'])) {
    require_once '../../controllers/CategoriaController.php';
    $CategoriaController = new CategoriaController();
    $rs = $CategoriaController->remove($_GET['id']);

    if($rs) {
        header("location: ./");
        exit();
    }
}