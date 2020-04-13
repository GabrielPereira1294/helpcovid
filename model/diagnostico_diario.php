<?php
class diagnostico_diario {
    private $iddiagnostico_diario;
    private $data;
    private $examecovid;
    private $doresgar;
    private $tosse;
    private $coriza;
    private $dorescorpo;
    private $temp;
    private $difresp;
    private $contato;
    private $pessoa_idpessoa;
    
    function getIddiagnostico_diario() {
        return $this->iddiagnostico_diario;
    }

    function getData() {
        return $this->data;
    }

    function getExamecovid() {
        return $this->examecovid;
    }

    function getDoresgar() {
        return $this->doresgar;
    }

    function getTosse() {
        return $this->tosse;
    }

    function getCoriza() {
        return $this->coriza;
    }

    function getDorescorpo() {
        return $this->dorescorpo;
    }

    function getTemp() {
        return $this->temp;
    }

    function getDifresp() {
        return $this->difresp;
    }

    function getContato() {
        return $this->contato;
    }

    function getPessoa_idpessoa() {
        return $this->pessoa_idpessoa;
    }

    function setIddiagnostico_diario($iddiagnostico_diario) {
        $this->iddiagnostico_diario = $iddiagnostico_diario;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setExamecovid($examecovid) {
        $this->examecovid = $examecovid;
    }

    function setDoresgar($doresgar) {
        $this->doresgar = $doresgar;
    }

    function setTosse($tosse) {
        $this->tosse = $tosse;
    }

    function setCoriza($coriza) {
        $this->coriza = $coriza;
    }

    function setDorescorpo($dorescorpo) {
        $this->dorescorpo = $dorescorpo;
    }

    function setTemp($temp) {
        $this->temp = $temp;
    }

    function setDifresp($difresp) {
        $this->difresp = $difresp;
    }

    function setContato($contato) {
        $this->contato = $contato;
    }

    function setPessoa_idpessoa($pessoa_idpessoa) {
        $this->pessoa_idpessoa = $pessoa_idpessoa;
    }


}
