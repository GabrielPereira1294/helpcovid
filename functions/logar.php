<?php

include_once '../config/config.php';
include_once '../config/conexao.class.php';
include_once './redirecpag.class.php';
include_once '../lib/login.class.php';

if ($_POST) {
    //print_r($_POST);
    $usuario = $_POST['username'];
    $senha = md5($_POST['password']);

    $login = new login();
    $sllogin = $login->logar($usuario, $senha);

    if ($sllogin) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        $_SESSION['idpessoa'] = $sllogin->idpessoa;
        //header('Location: ./index.php');
        $link = PATH . "pages/index.php";
    } else {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        unset($_SESSION['idpessoa']);
        //header("location:login.php?erro=1");
        $link = PATH . "index.php?mens=1";
    }
}else{
    $link = PATH . "index.php?mens=3";
}
$redirec = new Redirecpag();
$redirec->redirectpag($link);
