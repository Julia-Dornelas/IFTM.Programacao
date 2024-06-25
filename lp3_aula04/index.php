<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - formulários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>

    <div class="container">
        <h2>Formulário de dados</h2>

        <form action="envio.php" method="POST">
            <div class="mb-3">
                <label for="idNome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="idNome" placeholder="Seu nome completo" name="campoNome">
            </div>

            <div class="mb-3">
                <label for="idEmail" class="form-label">Email:</label>
                <input type="email" class="form-control" id="idEmail" placeholder="name@example.com" name="campoEmail">
            </div>

            <div class="mb-3">
                <label for="idData" class="form-label">Data de Nascimento:</label>
                <input type="date" class="form-control" id="idData" placeholder="" name="campoData">
            </div>

            <div class="mb-3">
                <label for="idSexo" class="form-label">Sexo:</label>
                <select class="form-select" aria-label="Default select example" name="campoSexo">
                    <option selected>Selecione um</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Prefiro não dizer">Prefiro não dizer</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="idDescricao" class="form-label">Insira uma breve descrição sobre você</label>
                <textarea class="form-control" id="idDescricao" rows="3" name="campoDescricao"></textarea>
            </div>

            <button type="submit" class="btn btn-outline-success">Enviar</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>