
<!-- // Exibir o header -->
<?php include 'header2.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css" />
    <title>Cadastro</title>
</head>
<body>
    <div class="login-body">
    <div class="login-box">
        <div class="login-header">
            <header>Login</header>
        </div>
        <div class="input-box">
            <input type="email" class="input-field" placeholder="Email" autocomplete="off" required>
        </div>
        <div class="input-box">
            <input type="password" class="input-field" placeholder="Password" autocomplete="off" required>
        </div>
        <div class="forgot">
            <section>
                <input type="checkbox" id="check">
                <label for="check">Lembra-me</label>
            </section>
            <section>
                <a href="#">Esqueci Senha</a>
            </section>
        </div>
        <div class="input-submit">
            <button class="submit-btn" id="submit"></button>
            <label for="submit">Logar</label>
        </div>
        <div class="sign-up-link">
            <p>Não tem conta? <a href="#">Criar Conta</a></p>
        </div>
    </div>
    </div>
</body>
</html>






<!-- // Exibir o footer -->
<?php include 'footer.php'; ?>

<script src="./assets/js/script.js"></script>


