<?php
session_start();
if (!defined('PATH')):
    define('PATH', 'http://' . $_SERVER['SERVER_NAME'] . '/helpcovid/');
endif;
/*
 * Criando uma global com o nome do template que vai ser usado
 */
$NomeTemplate = 'HelpCOVID';
if (!defined('TEMPLATE')):
    define('TEMPLATE', PATH . 'template/' . $NomeTemplate . '/');
endif;
