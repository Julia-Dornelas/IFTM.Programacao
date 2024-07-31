<?php
// Pega id na URL
$id = $_GET['id'];
// Constroi string com código sql
$sql = "select * from participantes where id = '$id'; ";
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
                <h3>Lista de participantes</h3>
                <form action="edit.php" method="post">
                    <input type="hidden" name="campoId" value="<?php echo $id; ?>">

                    <div class="form-group ">
                        <label for="inputtext4">Nome:</label>
                        <input type="text" class="form-control" id="inputtext4" value="<?php echo $item->nome; ?>" placeholder="" name="campoNome" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputEmail4">Email:</label>
                        <input type="email" class="form-control" id="inputEmail4" value="<?php echo $item->email; ?>" placeholder="" name="campoEmail" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputCpf">CPF:</label>
                        <input type="text" class="form-control" id="inputCpf" value="<?php echo $item->cpf; ?>" placeholder="" name="campoCPF" required>
                    </div> <br>

                    <div class="mb-3">
                        <label for="idCel" form-label>Telefone:</label>
                        <input type="text" class="form-control" id="idData" name="campoTelefone" value="<?php echo $item->telefone; ?>"placeholder="" required>
                    </div>

                    <div class="mb-3">
                        <label for="idCel" form-label>Rua:</label>
                        <input type="text" class="form-control" id="idData" name="campoRua" value="<?php echo $item->rua; ?>" placeholder="" required>
                    </div>

                    <div class="mb-3">
                        <label for="idCel" form-label>Número da residencia:</label>
                        <input type="text" class="form-control" id="idData" name="campoNumero" value="<?php echo $item->numero; ?>" placeholder="" required>
                    </div>

                    <div class="mb-3">
                        <label for="idCel" form-label>Bairro:</label>
                        <input type="text" class="form-control" id="idData" name="campoBairro" value="<?php echo $item->bairro; ?>" placeholder="" required>
                    </div>

                    <div class="mb-3">
                        <label for="idCel" form-label>Cidade:</label>
                        <input type="text" class="form-control" id="idData" name="campoCidade" value="<?php echo $item->cidade; ?>" placeholder="" required>
                    </div>

                    <div class="mb-3">
                        <label for="idCel" form-label>CEP:</label>
                        <input type="text" class="form-control" id="idData" name="campoCep" value="<?php echo $item->cep; ?>" placeholder="" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" required>Complemento:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="campoComplemento" rows="2"><?php echo $item->complemento; ?></textarea>
                    </div>

                    <div>
                        <label for="exampleFormControlCheckbox1" >Selecionado:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheckbox1" value="1" <?php if ($item->selecionado == 1) {echo "checked";} ?> name="campoSelecionado">
                            <label class="form-check-label" for="exampleCheckbox1">Sim</label>
                        </div> <br>
                    </div>

                    <button type="submit" class="btn btn-success mb-3">Corrigir</button>
                    <a href="./" class="btn btn-secondary mb-3">Voltar</a>
                </form>

            </div>
        </div>


    </div>



    <?php include '../includes/js.php'; ?>
</body>

</html>