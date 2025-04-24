<?php

require '../service/conexao.php';

function register($email, $fullname, $username, $password){
    $conn = new usePDO();
    $instance = $conn->getInstance();
    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO pessoa (full_name) VALUES (?)";
    $stmt = $instance->prepare($sql);
    $stmt->execute([$fullname]);
    
    
    $idPessoa = $instance->lastInsertId();
    $sql = "INSERT INTO user (username, email, password_main, pessoaID) VALUES (?, ?, ?, ?)";
    $stmt = $instance->prepare($sql);
    $stmt->execute([$username, $email, $hashed_password, $idPessoa]);
    
    $result = $stmt->rowCount();
    
    return $idPessoa;
    }