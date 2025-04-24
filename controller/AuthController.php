<?php

require '../model/AuthModel.php';

if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $usuario = new Usuario();
    $result = $usuario->login($email, $password);

    if ($result) {
        header("Location: ../view/landing-page.php");
        exit; 
    } else {
        echo "Não foi possível realizar o login.";
    }
}
