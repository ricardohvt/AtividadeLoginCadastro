<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="Author" content="Ricardo Henrique Vieira Tomba">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="env">
        <form action="indefinido">
            <div class="text">
                <h1>Cadastro</h1>
            </div>
            <hr>
            <label for="email">
                <p>Seu E-mail para cadastro:</p>
                <input required type="email" name="email" id="input-email" class="input-email" placeholder="E-mail"><br>
            </label>
            <label for="usuario">
                <p>Seu nome de Usuário:</p>
                <input required type="text" name="" id="input-user" placeholder="Nome de usuário"><br>
            </label>
            <label for="nome">
                <p>Seu nome completo:</p>
                <input required type="text" name="" id="input-name" placeholder="Nome completo"><br>
            </label>
            <label for="password">
                <p>Sua senha:</p>
                <input required type="password" name="password" id="input-password" class="input-password" placeholder="Senha"><br>
            </label>
            <hr>
            <!-- <input type="button" value="Cadastrar" placeholder="Cadastrar" onclick="redirect()"> -->
            <a href="login.php" class="button">Cadastrar</a>
        </form>
    </section>
</body>
</html>