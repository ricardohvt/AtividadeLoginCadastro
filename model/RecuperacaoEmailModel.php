<?php

require '../service/conexao.php';

class Usuario {
    public function login($email){
        $conn = new usePDO();
        $instance = $conn->getInstance();    
        try {
            $sql = "SELECT * FROM user WHERE email = :email";
            $stmt = $instance->prepare($sql);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();


 
        } catch(PDOException $e){
            die("Erro: ". $e->getMessage());
        }
    }
}