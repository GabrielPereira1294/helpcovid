<?php

class mapa_pessoa {
    private $idmapa_pessoa;
    private $localizacao;
    private $tipo;
    private $pessoa_idpessoa;
    
    function getIdmapa_pessoa() {
        return $this->idmapa_pessoa;
    }

    function getLocalizacao() {
        return $this->localizacao;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getPessoa_idpessoa() {
        return $this->pessoa_idpessoa;
    }

    function setIdmapa_pessoa($idmapa_pessoa) {
        $this->idmapa_pessoa = $idmapa_pessoa;
    }

    function setLocalizacao($localizacao) {
        $this->localizacao = $localizacao;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setPessoa_idpessoa($pessoa_idpessoa) {
        $this->pessoa_idpessoa = $pessoa_idpessoa;
    }


}
