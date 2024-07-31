<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../includes/head.php'; ?>
</head>

<body class="corzinha">
    <h1 class="text-center corzinha text-white ">Receitas Dornelas</h1>
    <div class="container-fluid">
        <div class="row">
            <?php include '../includes/menu.php'; ?>
            <div class="col-9 dados">
                <h3>Lista de receitas</h3>
                <form action="add.php" method="post">

                    <!--Receita-->

                    <div class="form-group ">
                        <label for="inputtext4">Receita:</label>
                        <input type="text" class="form-control" id="inputtext4" placeholder="Nome da receita" name="campoReceita" required>
                    </div>

                    <!--Ingredientes-->

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" required>Ingredientes:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Ingredientes" name="campoIngredientes" rows="1"></textarea>
                    </div>

                    <!--Tipo-->

                    <div>
                        <label for="exampleFormControlSelect1" name="campoTipo">Tipo</Em>?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="exampleRadios1" value="0" checked name="campoTipo">
                            <label class="form-check-label" for="exampleRadios1">Salgado</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="exampleRadios2" value="1" name="campoTipo">
                            <label class="form-check-label" for="exampleRadios2">Doce</label>
                        </div>
                    </div>

                    <!--Valor-->

                    <br>
                    <div class="form-group ">
                        <label for="inputCpf">Valor:</label>
                        <input type="text" class="form-control" id="inputCpf" placeholder="R$0,00" name="campoValor" required>
                    </div>

                    <!--Preparo-->

                    <div class="form-group ">
                        <label for="inputCpf">Modo de preparo:</label>
                        <input type="text" class="form-control" id="inputCpf" placeholder="Modo de preparo" name="campoPreparo" required>
                    </div>

                    <!--Porção-->

                    <div class="form-group ">
                        <label for="inputCpf">Porção:</label>
                        <input type="number" class="form-control" id="inputCpf" placeholder="Serve quantas porções?" name="campoPorcao" required>
                    </div>

                    <!--Obs-->

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" required>Obs:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="campoObs" rows="2"></textarea>
                    </div>

                    <button type="submit" class="btn btn-info mb-3">Gravar</button>
                    <a href="./" class="btn btn-secondary mb-3">Voltar</a>
                </form>

            </div>
        </div>


    </div>



    <?php include '../includes/js.php'; ?>
</body>

</html>