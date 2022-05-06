<?php

use Claudsonm\CepPromise\CepPromise;

require_once 'vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Formulário</title>
</head>
<body>
    <div class="container">
        <h1>Exemplo CEP com Composer</h1>
        <hr>

        <div class="row my-2">
            <form action="cep.php" method ="POST">
                <div class="col-sm-2">
                    <label for="cep">CEP:</label>
                    <br>
                    <input type = "text" name="cep" id="CEP" required>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar</button>
                </div>
            </form>
        </div>
        <?php
            $cep = filter_input(INPUT_POST,"cep");

            if ($cep != NULL){
                $endereco = CepPromise::fetch($cep);
                echo "<h1>CEP: $endereco->zipCode</h1>";
                echo "Rua: $endereco->street"."<br>"."<br>";
                echo "Bairro: $endereco->district"."<br>"."<br>";
                echo "Cidade: $endereco->city"."<br>"."<br>";
                echo "Estado: $endereco->state"."<br>"."<br>";
            }

        ?>
    </div>
</body>
</html>