<?php

include_once '../config/config.php';
include_once './redirecpag.class.php';
//session_start();
//setcookie("logado",0,time()-10800);
//session_destroy(); 
//header("Location:../index.php");
$link = PATH."index.php";

$redirec = new Redirecpag();
$redirec->redirectpag($link);
?>
