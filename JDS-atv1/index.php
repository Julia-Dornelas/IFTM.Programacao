<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body class="p-3 mb-2 bg-dark ">
    <br> <br>  

    <div class="container shadow-lg p-3 mb-5 bg-white rounded border border-danger border-3">
        <h2 class="text-center text-danger mt-2 mb-2">Dornelas Veículos</h2>

        <form action="gravarDados.php" method="POST">

            <!-- TEXT -->


            <div class="form-group ">
                <label for="inputtext4">Nome:</label>
                <input type="text" class="form-control" id="inputtext4" placeholder="Nome" name="campoNome" required>
            </div> <br>

            <div class="form-group ">
                <label for="inputEmail4">Email:</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="campoEmail" required>
            </div> <br>

            <div class="form-group ">
                <label for="inputEmail4">Telefone:</label>
                <input type="tel" class="form-control" id="inputtel4" placeholder="(99) 99999-9999" name="campoCel" required>
            </div> <br>

            <div class="form-group ">
                <label for="inputCity">Cidade e estado:</label>
                <input type="text" class="form-control" id="inputCity" placeholder="Digite aqui" name="campoCity" required>
            </div> <br>

            <div>
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Qual sua idade?</label  required> <br>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="campoIdade">
                    <option selected></option>
                    <option value="Menor de 18">Menor de 18</option>
                    <option value="Entre 18 e 35">Entre 18 e 35</option>
                    <option value="Entre 35 e 60">Entre 35 e 60</option>
                    <option value="Mais de 60">Mais de 60</option>
                </select>
            </div> <br>
            <!-- RADIO -->
            <div>
                <label for="exampleFormControlSelect1" name="campoCarro">Qual veículo você prefere?</Em>?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio"id="exampleRadios1" value="Carro" checked name="campoCarro">
                    <label class="form-check-label" for="exampleRadios1">Carro</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio"id="exampleRadios2" value="Moto" name="campoCarro">
                    <label class="form-check-label" for="exampleRadios2">Moto</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="exampleRadios3" value="Ônibus" name="campoCarro">
                    <label class="form-check-label" for="exampleRadios3">Ônibus</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio"  id="exampleRadios4" value="Caminhão" name="campoCarro">
                    <label class="form-check-label" for="exampleRadios4">Caminhão</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio"  id="exampleRadios5" value="Bicicleta" name="campoCarro">
                    <label class="form-check-label" for="exampleRadios5">Bicicleta</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio"  id="exampleRadios6" value="Outro" name="campoCarro">
                    <label class="form-check-label" for="exampleRadios6">Outro</label>
                </div>


            </div> <br>

            <!-- SELECT -->

            <div class="form-group">
                <label for="exampleFormControlSelect1" required>Qual sua marca de carro favorito?</label>
                <select class="form-control" id="exampleFormControlSelect1" name="campoMarca" required>
                    <option value="Outro">Outro</option>
                    <option value="Audi">Audi</option>
                    <option value="Bmw">Bmw</option>
                    <option value="Fiat">Fiat</option>
                    <option value="Hyundai">Hyundai</option>
                    <option value="Chevrolet">Chevrolet</option>
                    <option value="Jeep">Jeep</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Renault">Renault</option>
                    <option value="Citroën">Citroën</option>
                    <option value="Volkswagen">Volkswagen</option>
                    <option value="Nissan">Nissan</option>
                    <option value="Peugeot">Peugeot</option>
                </select>
            </div> <br>

            <!-- TEXTAREA -->

            <div class="form-group">
                <label for="exampleFormControlTextarea1" required>Você possui um veículo? Se sim, qual?</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="campoVeiculo" rows="2"></textarea>
            </div>
            <br>

            <!-- CHECKBOX -->

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">Aceito todos os termos</label>
            </div> <br>

            <button type="submit" class="btn btn-outline-success">Enviar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>