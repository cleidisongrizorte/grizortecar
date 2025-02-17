<?php
session_start();

// Verifique se o usuário já está logado
if (isset($_SESSION['usuario_id'])) {
    header("Location: dashboard.php"); // Redireciona para uma página segura
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe o email e a senha
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifique no banco de dados
   include_once __DIR__ . '/database/Database.php';

    $db = new Database();
    $conn = $db->connect();

    // Prepara a consulta para buscar o cliente pelo email
    $stmt = $conn->prepare("SELECT * FROM cliente WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifique se encontrou o cliente
    if ($result->num_rows > 0) {
        $cliente = $result->fetch_assoc();

        // Verifica se a senha informada bate com o hash
        if (password_verify($senha, $cliente['senha'])) {
            // Se a senha for válida, cria a sessão do usuário
            $_SESSION['usuario_id'] = $cliente['id'];
            $_SESSION['usuario_nome'] = $cliente['nome'];
            header("Location: index.php"); // Redireciona para o painel
            exit();
        } else {
            $erro = "Senha incorreta!";
        }
    } else {
        $erro = "Email não encontrado!";
    }

    $stmt->close();
    $db->closeConnection();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h2>Login</h2>

    <?php
    if (isset($erro)) {
        echo "<p style='color: red;'>$erro</p>";
    }
    ?>

    <form action="login.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form>

</body>
</html>
