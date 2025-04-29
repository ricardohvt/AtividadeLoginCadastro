<?php
require '../service/conexao.php';

function change_password($email, $code, $password, $confirmpassword) {
    $conn = new usePDO();
    $db  = $conn->getInstance();


    if ($password !== $confirmpassword) {
        header('Location: ../view/rec.php');
        exit;
    }


    $sql = "SELECT codeID 
            FROM code 
            WHERE email = ? 
              AND code = ?
            LIMIT 1";
    $stmt = $db->prepare($sql);
    $stmt->execute([$email, $code]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {

        header('Location: ../view/rec.php?error=invalidcode');
        exit;
    }

    $hashed = password_hash($password, PASSWORD_DEFAULT);

    // atualiza a tabela do passoword
    $sql = "UPDATE user 
            SET password_main = ?
            WHERE email = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$hashed, $email]);


    $sql = "DELETE FROM code WHERE codeID = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$row['codeID']]);


    header('Location: ../view/login.php?reset=success');
    exit;
}
