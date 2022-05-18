<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Questão 3</title>
</head>
<body>
<div class="container">

    <h1>Formulário Questão 3</h1>
    <hr>

    <div class="row my-2">
        <form action="questao3.php" method ="GET">
            <div class="col-sm-10">
                <label for="preco">Preço:</label>
                <input type = "text" name="preco" id="preco" required>
                <br><br>
            </div>

            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
                <br><br>
            </div>
        </form>
    </div>

    <?php
        $preco = filter_input(INPUT_GET, "preco");

        $precoAvista =  $preco - $preco * 0.05;

        $parcelas3x = number_format($preco / 3,2,',');

        $precoAcrecido5 = $preco + $preco * 0.05;

        $parcelas5x = number_format($precoAcrecido5 / 5,2,',');

        $precoAcrecido10 = $preco + $preco * 0.1;

        $parcelas12x = number_format($precoAcrecido10 /12,2,',');

        $precoAcrecido15 = $preco + $preco * 0.15;

        $parcelas18x = number_format($precoAcrecido15 /18,2,',');

        if ($preco !=NULL){
            echo "<p> O preço informado é  <b>R$ $preco</b> </p>";

            echo "<p> As condições de pagamento são: </p>";

            echo "<p> • à vista <b>R$ $precoAvista</b> <span style='color: green'>(5% de desconto)</span> </p>";

            echo "<p> • parcelado em 3x de <b>R$ $parcelas3x</b> totalizando <b> R$ $preco</b> </p>";

            echo "<p> • parcelado em 5x de <b>R$ $parcelas5x </b> totalizando <b>R$ $precoAcrecido5 </b> <span style='color: red'>(5% de acrecimo)</span> </p>";

            echo "<p> • parcelado em 12x de <b>R$ $parcelas12x </b> totalizando <b>R$ $precoAcrecido10 </b> <span style='color: red'>(10% de acrecimo)</span> </p>";

            echo "<p> • parcelado em 18x de <b>R$ $parcelas18x </b> totalizando <b>R$ $precoAcrecido15 </b> <span style='color: red'>(15% de acrecimo)</span> </p>";
        }

    ?>
</div>
</body>
</html>

