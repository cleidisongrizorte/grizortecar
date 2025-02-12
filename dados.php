<?php
include_once "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

    // Consultando a senha hash armazenada no banco de dados
    $sql = "SELECT senha FROM cliente WHERE email = ?";
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $email);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_bind_result($stmt, $senhaHash);
            mysqli_stmt_fetch($stmt);

            // Verificando a senha fornecida com o hash armazenado
            if (password_verify($senha, $senhaHash)) {
                // Senha correta, autenticar o usuário
                echo "Login bem-sucedido!";
                // Redirecionar para a página protegida, por exemplo:
                // header("Location: dashboard.php");
                // exit();
            } else {
                echo "Email ou senha incorretos.";
            }
        } else {
            echo "Erro ao executar a query: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Erro ao preparar a query: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
