<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="Author" content="Ricardo Henrique Vieira Tomba">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Oxygen&display=swap" rel="stylesheet">
</head>
<body>
    <section class="env">
        <form action="indefinido">
            <div class="text">
                <h1>Login</h1>
            </div>
            <hr>
            <label for="email">
                <p>Seu E-mail:</p>
                <input required type="email" name="email" id="input-email" class="input-email" placeholder="E-mail"><br>
            </label>
            <label for="password">
                <p>Sua senha:</p>
                <input required type="password" name="password" id="input-password" class="input-password" placeholder="Senha"><br>
            </label>
            <hr>
            <div class="links">
                <a href="rec-usuario.php">Esqueci minha senha</a><br>
                <a href="cadastro.php">Ainda não possui cadastro?</a><br>
            </div>
            <!-- <input type="button" value="Login" placeholder="Login" onclick="redirect()"> -->
            <a href="landing-page.php" class="button">Login</a>
        </form>
    </section>
</body>
</html>