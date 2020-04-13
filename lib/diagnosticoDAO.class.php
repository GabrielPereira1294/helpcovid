<?php

class diagnosticoDAO {

    const INSERIR = "INSERT INTO diagnostico_diario (
        iddiagnostico_diario , 
        data, 
        examecovid,
        doresgar,
        tosse,
        coriza,
        dorescorpo,
        temp,
        difresp,
        contato,
        pessoa_idpessoa) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?);";
    const UPDATE_DIAG = "UPDATE diagnostico_diario SET
        data = ?, 
        examecovid = ?,
        doresgar = ?,
        tosse = ?,
        coriza = ?,
        dorescorpo = ?,
        temp = ?,
        difresp = ?,
        contato = ?,
        pessoa_idpessoa = ?
        WHERE iddiagnostico_diario = ? ";
    const SELECT = "SELECT *FROM diagnostico_diario WHERE pessoa_idpessoa = ?";
    const REMOVER_ID = "DELETE FROM diagnostico_diario WHERE iddiagnostico_diario = ?";

    function inserirDiag(diagnostico_diario $diag) {
        $resultado = false;

        try {

            $conexao = new Conexao();
            $conn = $conexao->getConnect();
            $conn->beginTransaction();
            $pst = $conn->prepare(self::INSERIR);
            $pst->bindValue(1, $diag->getIddiagnostico_diario(), PDO::PARAM_INT);
            $pst->bindValue(2, $diag->getData(), PDO::PARAM_STR);
            $pst->bindValue(3, $diag->getExamecovid(), PDO::PARAM_STR);
            $pst->bindValue(4, $diag->getDoresgar(), PDO::PARAM_STR);
            $pst->bindValue(5, $diag->getTosse(), PDO::PARAM_STR);
            $pst->bindValue(6, $diag->getCoriza(), PDO::PARAM_STR);
            $pst->bindValue(7, $diag->getDorescorpo(), PDO::PARAM_STR);
            $pst->bindValue(8, $diag->getTemp(), PDO::PARAM_STR);
            $pst->bindValue(9, $diag->getDifresp(), PDO::PARAM_STR);
            $pst->bindValue(10, $diag->getContato(), PDO::PARAM_STR);
            $pst->bindValue(11, $diag->getPessoa_idpessoa(), PDO::PARAM_INT);


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

    function updateDiag(diagnostico_diario $diag) {
        $resultado = false;

        try {

            $conexao = new Conexao();
            $conn = $conexao->getConnect();
            $conn->beginTransaction();
            $pst = $conn->prepare(self::UPDATE_DIAG);
            $pst->bindValue(1, $diag->getData(), PDO::PARAM_STR);
            $pst->bindValue(2, $diag->getExamecovid(), PDO::PARAM_STR);
            $pst->bindValue(3, $diag->getDoresgar(), PDO::PARAM_STR);
            $pst->bindValue(4, $diag->getTosse(), PDO::PARAM_STR);
            $pst->bindValue(5, $diag->getCoriza(), PDO::PARAM_STR);
            $pst->bindValue(6, $diag->getDorescorpo(), PDO::PARAM_STR);
            $pst->bindValue(7, $diag->getTemp(), PDO::PARAM_STR);
            $pst->bindValue(8, $diag->getDifresp(), PDO::PARAM_STR);
            $pst->bindValue(9, $diag->getContato(), PDO::PARAM_STR);
            $pst->bindValue(10, $diag->getPessoa_idpessoa(), PDO::PARAM_INT);
            $pst->bindValue(11, $diag->getIddiagnostico_diario(), PDO::PARAM_INT);

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

    function selectIdDiag($diag) {
        $resultado = null;

        try {

            $conexao = new Conexao();
            $conn = $conexao->getConnect();
            $conn->beginTransaction();
            $pst = $conn->prepare(self::SELECT);

            $pst->bindValue(1, $diag, PDO::PARAM_INT);

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

    function removerDiag($Diag) {
        try {

            $conexao = new Conexao();
            $conn = $conexao->getConnect();
            $conn->beginTransaction();
            $pst = $conn->prepare(self::REMOVER_ID);
            $pst->bindValue(1, $Diag, PDO::PARAM_INT);

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
