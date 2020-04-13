<?php
include_once '../config/config.php';
include_once '../config/conexao.class.php';
include_once '../lib/diagnosticoDAO.class.php';
include_once '../model/diagnostico_diario.php';
include_once '../functions/redirecpag.class.php';

$idpessoa = $_SESSION['idpessoa'];

if ($_POST) {
    
    for($i=1;$i<9;$i++){
        if($_POST["resp0".$i]==s){
            $cont++;
        }
    }
    if($_POST['resp01']=="s" || $cont==6){
        $mensagem=1;
    }else{
        $mensagem=2;
    }
    
    $diagnostico= new diagnostico_diario();
    $data = new DateTime();
    $data = $data->format('Y-m-d H:i:s');
    $diagnostico->setIddiagnostico_diario(NULL);
    $diagnostico->setData($data);
    $diagnostico->setExamecovid($_POST['resp01']);
    $diagnostico->setDoresgar($_POST['resp02']);
    $diagnostico->setTosse($_POST['resp03']);
    $diagnostico->setCoriza($_POST['resp04']);
    $diagnostico->setDorescorpo($_POST['resp05']);
    $diagnostico->setTemp($_POST['resp06']);
    $diagnostico->setDifresp($_POST['resp07']);
    $diagnostico->setContato($_POST['resp08']);
    $diagnostico->setPessoa_idpessoa($idpessoa);

    $diagnosticoDAO = new diagnosticoDAO();

    if ($diagnosticoDAO->inserirDiag($diagnostico)) {
        $link = PATH . "pages/resultado.php?mens=$mensagem";
    } else {
        $link = PATH . "pages/resultado.php";
    }
} else {
    $link = PATH . "pages/resultado.php";
}
$redirec = new Redirecpag();
$redirec->redirectpag($link);