<?php 

$id = $_GET['id'];

$sql = "delete from videos where id='$id'";

include '../includes/conexao.php';

$conexao->query($sql);

header("location: index.php");

