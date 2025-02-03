<?php 
include_once "config.php"; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    
    // Usando Prepared Statements para segurança
    $sql = "INSERT INTO cliente (nome, email, senha) VALUES (?, ?, ?)";
    
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "sss", $nome, $email, $senha);
        
        if (mysqli_stmt_execute($stmt)) {
            header("Location: login.php");
            exit();
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

