<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cadastro de Cliente</h1>
    <form action="aulaorient.php" method='post'>
        nome <input type="text" name="nome"> <br>
        telefone <input type="text" name="telefone"> <br>
        email <input type="text" name="email"> <br>
        senha <input type="password" name="senha"> <br>

        <input type="submit" value="Enviar">

    </form>
</body>

</html>

<?php

include_once __DIR__ . '/agenda/app/cliente/Cliente.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

    $cliente = new Cliente(null,$_POST['nome'],$_POST["telefone"],$_POST["email"],$_POST["senha"],);

    if ($cliente->cadastrar())
    {
        echo "Cliente cadastrado com sucesso!";
    }
    else {
        echo "Erro ao cadastrar o cliente!";
    }



}

?>