<?php

require '../model/CadastroModel.php';
if($_POST){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirm_password'];

    $result = register($email, $fullname, $username, $password);

    echo $result;

    if($result){
        echo "Cadastro realizado com sucesso!";
    }else {
        echo "Não foi possível realizar o cadastro.";
    }

} 
