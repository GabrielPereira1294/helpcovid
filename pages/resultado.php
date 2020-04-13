<?php
include_once '../config/config.php';

if($_GET["mens"]==2){
    $css = "result";
    $avatar = "<i class='fas fa-smile'></i>";
    $mensagem = "Você está bem!";
    $porcentagem = "12%";
}else if($_GET["mens"]==1){
    $css = "result-danger";
    $avatar = "<i class='fas fa-frown' style='color: white'></i>";
    $mensagem = "Você não está bem!";
    $porcentagem = "80% ou mais<br>Ligue para um médico e se isole";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0'">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?php echo TEMPLATE ?>img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo TEMPLATE ?>img/favicon.ico" type="image/x-icon">

    <!-- Fontes -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800,900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo TEMPLATE ?>css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE ?>css/newage.css">
    <link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE ?>css/style.css">
    <title>HelpCOVID</title>
</head>
<body class="<?php echo $css ?>">
    <div class="header header-top" style="margin-bottom: 20px;">
        <h1>Diagnóstico Diário</h1>
    </div>
    <div class="my-auto text-center result-info result-fine">
        <?php echo $avatar ?>
        <h4>
            <?php echo $mensagem ?>
        </h4>
        <p>De acordo com as respostas do seu Diagnóstico Diário, suas chances de contaminação é de </p>
        <h4>
            <?php echo $porcentagem ?>
        </h4>
        <a href="index.php">
            <button class="btn btn-blue" style="background: 0; box-shadow: none; background-color: var(--color02); margin-top: 20px; position: fixed; bottom: 20px; left: 5%; width: 90%">
                Finalizar
            </button>
        </a>
    </div>
<?php
    include_once '../footer.php';