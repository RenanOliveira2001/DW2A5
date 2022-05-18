<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Formulário Questão 1</title>
</head>
<body>
<div class="container">

    <h1>Formulário Questão 1</h1>
    <hr>

    <div class="row my-2">
        <form action="questao2.php" method ="POST">
            <div class="col-sm-10">
                <label for="imagem">Url de Uma Imagem:</label>
                <input type = "url" name="imagem" id="imagem" required>

                <label for="repetirCorpo">Mostrar:</label>
                <select name="posicao" id="posicao">
                    <option value="inline">Inline</option>
                    <option value="background">Background</option>
                </select>
                <br><br>
            </div>

            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
