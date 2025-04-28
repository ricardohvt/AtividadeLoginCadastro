<?php

require '../service/conexao.php';

function register($email, $fullname, $username, $password, $confirmpassword){
    $conn = new usePDO();
    $instance = $conn->getInstance();
    if($password !== $confirmpassword){
        header('Location: ../view/cadastro.php');
        exit;
    }else{
        $code = mt_rand(0,999999); // o motivo do MT_RAND é pq pesquisei como usar o rand normal e vi em alguns lugares que falava sobre o mt_rand, achei que vinha do multithreading, mas vi que era mais seguro.
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO pessoa (full_name) VALUES (?)";
        $stmt = $instance->prepare($sql);
        $stmt->execute([$fullname]);
        
        
        $idPessoa = $instance->lastInsertId();
        $sql = "INSERT INTO user (username, email, password_main, pessoaID) VALUES (?, ?, ?, ?)";
        $stmt = $instance->prepare($sql);
        $stmt->execute([$username, $email, $hashed_password, $idPessoa]);
        
        $idPessoaCode = $instance->lastInsertId();
        $sql = "INSERT INTO code (username, code, email, codeID) VALUES (?, ?, ?, ?)";
        $stmt = $instance->prepare($sql);
        $stmt->execute([$username, $code, $email, $idPessoaCode]);
        

        $result = $stmt->rowCount();
        
        return $idPessoa;
    }
    }