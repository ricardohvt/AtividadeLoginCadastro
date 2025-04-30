<?php

require '../service/conexao.php';

class RecuperacaoCodigo {
    public function validarCodigo($codigo) {
        $conn = new usePDO();
        $instance = $conn->getInstance();

        try {
            $sql = "SELECT * FROM code WHERE code = :codigo AND lido = 0";
            $stmt = $instance->prepare($sql);
            $stmt->bindParam(':codigo', $codigo, PDO::PARAM_STR);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $sqlUpdate = "UPDATE code SET lido = 1 WHERE code = :codigo";
                $stmtUpdate = $instance->prepare($sqlUpdate);
                $stmtUpdate->bindParam(':codigo', $codigo, PDO::PARAM_STR);
                $stmtUpdate->execute();
                return true;
            }
            return false;
        } catch (PDOException $e) {
            die("Erro: " . $e->getMessage());
        }
    }
}