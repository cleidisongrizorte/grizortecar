<?php
// Verifica se o ID do cliente foi passado na URL
if (isset($_GET['id'])) {
    // Inclui a classe de conexão com o banco de dados
    include_once __DIR__ . '/../database/Database.php';
    
    // Conecta ao banco de dados
    $db = new Database();
    $conn = $db->connect();
    
    // Recupera o ID do cliente
    $id_cliente = $_GET['id'];
    
    // Busca os dados do cliente com base no ID
    $stmt = $conn->prepare("SELECT * FROM cliente WHERE id = ?");
    $stmt->bind_param("i", $id_cliente);
    $stmt->execute();
    $resultado = $stmt->get_result();
    
    // Verifica se o cliente foi encontrado
    if ($resultado->num_rows > 0) {
        // Pega os dados do cliente
        $cliente = $resultado->fetch_assoc();
    } else {
        echo "Cliente não encontrado.";
        exit;
    }

    $stmt->close();
    $db->closeConnection();
} else {
    echo "ID do cliente não informado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cliente</title>
</head>
<body>
    <h1>Atualizar Cliente</h1>

    <form action="update.php?id=<?php echo $cliente['id']; ?>" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $cliente['nome']; ?>" required><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" value="<?php echo $cliente['telefone']; ?>" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" value="<?php echo $cliente['email']; ?>" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" value="<?php echo $cliente['senha']; ?>" required><br><br>

        <button type="submit" name="atualizar">Atualizar</button>
    </form>

</body>
</html>
