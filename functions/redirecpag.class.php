<?php

class Redirecpag {

    function redirectpag($filename) {
        if (!headers_sent())
            header('Location: ' . $filename);
        else {
            echo '<script type="text/javascript">';
            echo 'window.location.href="' . $filename . '";';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="0;url=' . $filename . '" />';
            echo '</noscript>';
        }
    }

    function mensagem($mens) {
        switch ($mens) {
            case 1:
                $mens = "<div class='alert alert-danger alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <span class='alert-link'>Atenção! </span>Usuário e senha incorretos, tente novamente. 
                         </div>";
                break;
            case 2:
                $mens = "<div class='alert alert-warning alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            Dados Invalidos. 
                         </div>";
                break;
            case 3:
                $mens = "<div class='alert alert-warning alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            Dados obrigatórios não preenchidos.
                         </div>";
                break;
            case 4:
                $mens = "<div class='alert alert-success alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            Usuário Cadastrado com Sucesso.
                         </div>";
                break;
            case 5:
                $mens = "<div class='alert alert-success alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            Usuário Alterado com Sucesso.
                         </div>";
                break;
            case 6:
                $mens = "<div class='alert alert-success alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            Cliente Cadastrado com Sucesso.
                         </div>";
                break;
            case 7:
                $mens = "<div class='alert alert-success alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            Cliente Alterado com Sucesso.
                         </div>";
                break;
            case 8:
                $mens = "<div class='alert alert-info alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            Não é possível excluir Cliente. Existe Roda da Vida castrada no mesmo.
                         </div>";
                break;
            case 9:
                $mens = "<div class='alert alert-success alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            Rotina Cadastrada com Sucesso.
                         </div>";
                break;
            case 10:
                $mens = "<div class='alert alert-success alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            Rotina Alterada com Sucesso.
                         </div>";
                break;
            case 11:
                $mens = "<div class='alert alert-success alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            Roda da Vida Cadastrada com Sucesso.
                         </div>";
                break;
            case 12:
                $mens = "<div class='alert alert-success alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            Roda da Vida Alterada com Sucesso.
                         </div>";
                break;
            case 13:
                $mens = "<div class='alert alert-info alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            Dados não localizados
                         </div>";
                break;
            case 14:
                $mens = "<div class='alert alert-warning alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            Erro ao finalizar a operaçao
                         </div>";
                break;
            case 15:
                $mens = "<div class='alert alert-info alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            Selecione um registro para remove-lo
                         </div>";
                break;
            case 16:
                $mens = "<div class='alert alert-success alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            Nível de satisfação cadastrada com sucesso.
                         </div>";
                break;
            default:
                $mens = "<div class='alert alert-info alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            Nem uma mensagem encontrada
                         </div>";
        }
        return $mens;
    }

}
