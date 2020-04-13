<?php

class login {

    const LOGAR = "SELECT * FROM pessoa WHERE email=? and senha=? ;";

    function logar($login, $senha) {
        $resultado = false;

        try {

            $conexao = new Conexao();
            $conn = $conexao->getConnect();
            $conn->beginTransaction();
            $pst = $conn->prepare(self::LOGAR);

            $pst->bindValue(1, $login, PDO::PARAM_STR);
            $pst->bindValue(2, $senha, PDO::PARAM_STR);

            $pst->Execute();
            $resultado = $pst->fetch(PDO::FETCH_OBJ);
            $conexao->closeConnect();
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $resultado;
    }

}

?>

