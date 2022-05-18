<?php

$titulo = filter_input(INPUT_POST,"titulo",FILTER_SANITIZE_SPECIAL_CHARS);
$corpo = filter_input(INPUT_POST,"corpo");
$qtdRepeticoes = filter_input(INPUT_POST,"qtdRepeticoes");
$corFundo = filter_input(INPUT_POST,"corFundo");
$imagem = filter_input(INPUT_POST,"imagem");
$fonte = filter_input(INPUT_POST,"fonte");
$corTexto = filter_input(INPUT_POST,"corTexto");

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
    <title>Questão 1</title>
</head>
<body>
<div class="container">
    <h1><?php echo $titulo?></h1>
    <hr>

    <?php
    for ($i = 0;$i<$qtdRepeticoes;$i++){
        echo "<p>$corpo</p>";
    }
    ?>


    <p><a href="<?php echo $fonte?>"><?php echo $fonte?></a></p>

    <style>
        body{
            background-color: <?= $corFundo?>;
            color: <?= $corTexto?>;
        }
    </style>
</div>
</body>
</html>
