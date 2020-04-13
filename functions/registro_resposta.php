<?php
include_once '../config/config.php';
include_once '../config/conexao.class.php';
include_once '../lib/pessoaDAO.class.php';
include_once '../model/pessoa.class.php';
include_once '../functions/redirecpag.class.php';

if ($_POST) {
    $pessoa = new pessoa();
    $data = $_POST['data_n'];
    $data = date('Y-m-d', strtotime($data));
    $pessoa->setIdpessoa(NULL);
    $pessoa->setNome($_POST['nome_completo']);
    $pessoa->setTelefone($_POST['telefone']);
    $pessoa->setCep($_POST['cep']);
    $pessoa->setData_nascimento($data);
    $pessoa->setDoenca_pre($_POST['doencas']);
    $pessoa->setEmail($_POST['email']);
    $pessoa->setSenha(md5($_POST['senha']));
    $pessoa->setFoto("nn");

    $pessoaDAO = new pessoaDAO();

    if ($pessoaDAO->inserirPessoa($pessoa)) {
        $link = PATH . "index.php";
    } else {
        $link = PATH . "index.php?mens=14";
    }
} else {
    $link = PATH . "index.php?mens=14";
}
$redirec = new Redirecpag();
$redirec->redirectpag($link);
