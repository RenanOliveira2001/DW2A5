<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Formulário Aula 3a</title>
</head>
<body>
<div class="container">

    <h1>Formulário Questão 1</h1>
    <hr>

    <div class="row my-2">
        <form action="questao1.php" method ="POST">
            <div class="col-sm-7">
                <label for="titulo">Título da Página:</label>
                <input type = "text" name="titulo" id="titulo" required>
                <br><br>
            </div>

            <div class="col-sm-7">
                <label for="corpo">Corpo:</label>
                <textarea name="corpo" id="corpo" rows="10" cols="40" maxlength="10000" required></textarea>
                <br><br>
            </div>

            <div class="col-sm-7">
                <label for="repetirCorpo">Repetir o Corpo?:</label>
                <select name="qtdRepeticoes" id="qtdRepeticoes">
                    <option value="1">Não Repetir</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">5</option>
                    <option value="5">4</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
                <br><br>
            </div>

            <div class="col-sm-7">
                <label for="corTexto">Cor Texto:</label>
                <input type = "color" name="corTexto" id="corTexto" required>
                <label for="corFundo">Cor Fundo:</label>
                <input type = "color" name="corFundo" id="corFundo" required>
                <br><br>
            </div>

            <div class="col-sm-7">
                <label for="fonte">Url de Um Link:</label>
                <input type = "fonte" name="fonte" id="fonte" required>
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