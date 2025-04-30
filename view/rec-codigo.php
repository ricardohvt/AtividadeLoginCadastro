<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="Author" content="Ricardo Henrique Vieira Tomba">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="env">
        <form action="../controller/RecuperacaoCodigoController.php" method="POST">
            <div class="text">
                <h1>Recuperação de senha</h1>
            </div>
            <hr>
            <label for="number">
                <p>Coloque o Código para ir redefinir a senha:</p>
                <input required type="number" name="codigo" id="input-number" class="input-number" placeholder="Código" maxlength="4"><br>
            </label>
            <hr>
            <div class="button-main">
                <button class="button-submit">Prosseguir</button>
            </div>
        </form>
    </section>
    </body>
</html>