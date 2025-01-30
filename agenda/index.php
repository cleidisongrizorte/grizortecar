<?php

// Exibir o header
include_once 'header.php';



// Acionar controlador

// Obter o controle e ação
$control = $_GET['control'] ?? 'index';
$action = $_GET['action'] ?? 'listar';

$controlClass = ucfirst($control) . 'Control';

function loadControl($control, $controlClass) {
    $file = __DIR__ . '/app/' . $control . '/' . $controlClass . '.php'; 
    if (file_exists($file)) {
        include_once $file;
    } else {
        echo 'Arquivo do controlador não encontrado'; 
        exit;
    }
}

loadControl($control, $controlClass);

if (class_exists($controlClass)) {
    $controller = new $controlClass();

    // Passar os parâmetros (POST e GET)
    $params = array_merge($_POST, $_GET);

    // Executar a ação
    $controller->handleRequest($action, $params);
}



?>

// Exibir o footer
<?php include 'footer.php'; ?>


