<?php
if(isset($_GET['id']) && !empty($_GET['id'])) {
    require_once '../../controllers/JogosController.php';
    $JogosController = new JogosController();
    $rs = $JogosController->remove($_GET['id']);

    if($rs) {
        header("location: ./");
        exit();
    }
}