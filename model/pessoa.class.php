<?php
class pessoa {
    private $idpessoa;
    private $nome;
    private $telefone;
    private $cep;
    private $data_nascimento;
    private $doenca_pre;
    private $email;
    private $senha;
    private $foto;
    
    function getIdpessoa() {
        return $this->idpessoa;
    }

    function getNome() {
        return $this->nome;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getCep() {
        return $this->cep;
    }

    function getData_nascimento() {
        return $this->data_nascimento;
    }

    function getDoenca_pre() {
        return $this->doenca_pre;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getFoto() {
        return $this->foto;
    }

    function setIdpessoa($idpessoa) {
        $this->idpessoa = $idpessoa;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    function setDoenca_pre($doenca_pre) {
        $this->doenca_pre = $doenca_pre;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }


}
