<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="Author" content="Ricardo Henrique Vieira Tomba">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="env">
        <form action="indefinido">
            <div class="text">
                <h1>Recuperação de senha</h1>
            </div>
            <hr>
            <!-- <input type="button" value="Tenho apenas o E-mail" onclick="change()"><br> -->
            <label for="password">
                <p>Digite a nova senha para redefinir:</p>
                <input required type="password" name="password" id="input-password" class="input-password" placeholder="Senha"><br>
            </label>
            <label for="password-confirm">
                <p>Digite novamente sua senha para confirmar:</p>
                <input required type="password" name="password-confirm" id="input-password-confirm" class="input-password-confirm" placeholder="Confirmar senha"><br>
            </label>
            <hr>
            <!-- <input type="button" value="Enviar E-mail de recuperação" placeholder="Cadastrar" onclick="redirect()"> -->
            <a href="login.php" class="button">Redefinir senha</a>
        </form>
    </section>
    <!-- <script>
        let check = true
        function change() {
            let EmailInput = document.getElementById("input-email")
            let UserInput = document.getElementById("input-user")
            if(check === true) {
                UserInput.style.display = "none"
                EmailInput.style.display = "block"
                check = false
            } else {
                UserInput.style.display = "block"
                EmailInput.style.display = "none"
                check = true
            }
        }

        function redirect(){
            window.location.href = "login.html";
        }
    </script> -->
</body>
</html>