<?php include_once "config.php"; ?>
<?php

    // Receber dados de forma segura
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

    // Utilizar uma consulta preparada (prepared statement) para evitar injeção de SQL
    $sql = "SELECT * FROM cliente WHERE email = ? AND senha = ?";
    $stmt = mysqli_prepare($conn, $sql);

    // Verificar se a preparação da consulta deu certo
    if ($stmt) {
        // Associar os parâmetros à consulta
        mysqli_stmt_bind_param($stmt, 'ss', $email, $senha);

        // Executar a consulta
        mysqli_stmt_execute($stmt);

        // Obter o resultado
        $resultado = mysqli_stmt_get_result($stmt);
        $linha = mysqli_fetch_array($resultado);

        if ($linha) {
            // Redirecionar para a página principal
            header("Location: index.php");
            exit;
        } else {
    // Senha inválida, redireciona de volta com a mensagem de erro
    header('Location: login.php?error=invalid');
    exit;
        }

        // Fechar a declaração
        mysqli_stmt_close($stmt);
    } else {
        // Caso a consulta não tenha sido preparada corretamente
        echo "Erro ao preparar a consulta: " . mysqli_error($conn);
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conn);
?>
