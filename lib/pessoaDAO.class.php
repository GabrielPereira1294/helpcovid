<?php

class pessoaDAO {

    const INSERIR = "INSERT INTO pessoa (
        idpessoa, 
        nome, 
        telefone,
        cep,
        data_nascimento,
        doenca_pre,
        email,
        senha,
        foto) 
        VALUES (?,?,?,?,?,?,?,?,?);";
    const UPDATE_PESSOA = "UPDATE pessoa SET
        nome = ?, 
        telefone = ?,
        cep = ?,
        data_nascimento = ?,
        doenca_pre = ?,
        email = ?,
        senha = ?,
        foto = ?
        WHERE idpessoa = ? ";
    const SELECT = "SELECT *FROM pessoa WHERE idpessoa = ?";
    const REMOVER_ID = "DELETE FROM pessoa WHERE idpessoa = ?";

    function inserirPessoa(pessoa $pess) {
        $resultado = false;

        try {

            $conexao = new Conexao();
            $conn = $conexao->getConnect();
            $conn->beginTransaction();
            $pst = $conn->prepare(self::INSERIR);
            $pst->bindValue(1, $pess->getIdpessoa(), PDO::PARAM_INT);
            $pst->bindValue(2, $pess->getNome(), PDO::PARAM_STR);
            $pst->bindValue(3, $pess->getTelefone(), PDO::PARAM_STR);
            $pst->bindValue(4, $pess->getCep(), PDO::PARAM_STR);
            $pst->bindValue(5, $pess->getData_nascimento(), PDO::PARAM_STR);
            $pst->bindValue(6, $pess->getDoenca_pre(), PDO::PARAM_STR);
            $pst->bindValue(7, $pess->getEmail(), PDO::PARAM_STR);
            $pst->bindValue(8, $pess->getSenha(), PDO::PARAM_STR);
            $pst->bindValue(9, $pess->getFoto(), PDO::PARAM_STR);


            $resultado = $pst->execute();
            $resultado = $conn->lastInsertId();

            if (!$pst) {
                $conn->rollBack();
            }
            $conn->commit();
            $conexao->closeConnect();
        } catch (Exception $e) {
            $resultado = $e->getMessage();
        }

        return $resultado;
    }

    function updatePessoa(pessoa $pess) {
        $resultado = false;

        try {

            $conexao = new Conexao();
            $conn = $conexao->getConnect();
            $conn->beginTransaction();
            $pst = $conn->prepare(self::UPDATE_PESSOA);
            $pst->bindValue(1, $pess->getNome(), PDO::PARAM_STR);
            $pst->bindValue(2, $pess->getTelefone(), PDO::PARAM_STR);
            $pst->bindValue(3, $pess->getCep(), PDO::PARAM_STR);
            $pst->bindValue(4, $pess->getData_nascimento(), PDO::PARAM_STR);
            $pst->bindValue(5, $pess->getDoenca_pre(), PDO::PARAM_STR);
            $pst->bindValue(6, $pess->getEmail(), PDO::PARAM_STR);
            $pst->bindValue(7, $pess->getSenha(), PDO::PARAM_STR);
            $pst->bindValue(8, $pess->getFoto(), PDO::PARAM_STR);
            $pst->bindValue(9, $pess->getIdpessoa(), PDO::PARAM_INT);

            $resultado = $pst->execute();

            if (!$pst) {
                $conn->rollBack();
            }
            $conn->commit();
            $conexao->closeConnect();
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $resultado;
    }

    function selectIdPess($pess) {
        $resultado = null;

        try {

            $conexao = new Conexao();
            $conn = $conexao->getConnect();
            $conn->beginTransaction();
            $pst = $conn->prepare(self::SELECT);

            $pst->bindValue(1, $pess, PDO::PARAM_INT);

            $pst->Execute();
            $resultado = $pst->fetch(PDO::FETCH_OBJ);
            $conexao->closeConnect();
        } catch (Exception $e) {
            $conn->rollBack();
            echo 'Erro na operação:' . $e->getMessage();
        } catch (PDOException $e) {
            echo 'Erro PDO:' . $e->getMessage();
        }

        return $resultado;
    }


    function removerPess($pess) {
        try {

            $conexao = new Conexao();
            $conn = $conexao->getConnect();
            $conn->beginTransaction();
            $pst = $conn->prepare(self::REMOVER_ID);
            $pst->bindValue(1, $pess, PDO::PARAM_INT);

            $resultado = $pst->execute();
            $conn->commit();

            if (!$pst) {
                $conn->rollBack();
            }

            $conexao->closeConnect();
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $resultado;
    }

    function selectAll() {
        $lista = null;

        try {

            $conexao = new Conexao();
            $conn = $conexao->getConnect();
            $conn->beginTransaction();
            $pst = $conn->prepare(self::SELECT_ALL);

            $pst->Execute();

            while ($atc = $pst->fetch(PDO::FETCH_OBJ)) {
                $lista[] = $atc;
            }
        } catch (Exception $e) {
            $conn->rollBack();
            echo 'Erro na operação:' . $e->getMessage();
        } catch (PDOException $e) {
            echo 'Erro PDO:' . $e->getMessage();
        }

        return $lista;
    }

}
