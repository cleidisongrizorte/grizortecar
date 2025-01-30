<?php

//exibir o header
include_once './header.php';

// Aciona controlador

// Obeter o controle e ação
$control = $_GET['control'] ?? 'index';
$action = $_GET['action'] ?? 'listar';

$controlClass = ucfirst($control) . 'Control';


function loadControl($control,$controlClass){
    $file = __DIR__ . '/app/' . $control . '/' . $controlClass . 'php';
    if (file_exists($file)){
        include_once $file;
    } else {
        echo 'Arquivo do controlado não encontrado';
        exit;
    }
}
loadControl($control,$controlClass);

if (class_exists($controlClass)){
    $controller = new $controlClass();

    //Passa os parametros (POST e GET)
    $params = array_merge($_POST, $_GET);

    //Executar a ação
    $controller->handleRequest($action, $params);



}



// exibir o footer
include_once __DIR__ . './footer.php';