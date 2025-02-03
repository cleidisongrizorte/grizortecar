
<!-- // Exibir o header -->
<?php include 'header2.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/login.css">    
</head>
<body>
    <div class="login-body">
    <div class="login-wrapper">
        <div class="form-header">
            <div class="titles">
                <div class="title-login">Entrar</div>
                <div class="title-register">Registrar</div>
            </div>
        </div>

        <!-- codido de mensagem de erro -->
    <div class="error-message">
    <?php 
        if (isset($_GET['error']) && $_GET['error'] == 'invalid') {
            echo '<p style="color: red;">Senha ou email inválida. Tente novamente.</p>';
        }
    ?>
    </div>   
        <!-- LOGIN FORM -->
        <form action="busca.php" method='post' class="login-form" autocomplete="off">
            <div class="input-box">
                <input type="email" class="input-field" id="log-email" name="email" required>
                <label for="log-email" class="label">Email</label>
                <i class='bx bx-envelope icon'></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" id="log-pass" name="senha" required>
                <label for="log-pass" class="label">Senha</label>
                <i class='bx bx-lock-alt icon' ></i>
            </div>
            <div class="form-cols">
                <div class="col-1"></div>
                <div class="col-2">
                    <a href="#">Esqueci-me senha?</a>
                </div>
            </div>
            <div class="input-box">
                <button class="btn-submit" id="SignInBtn">Entrar <i class='bx bx-log-in' ></i></button>
            </div>
            <div class="switch-form">
                <span>Não tenho conta? <a href="#" onclick="registerFunction()">Registrar</a></span>
            </div>
        </form>

        <!-- REGISTER FORM -->
        <form action="dados.php" method='post' class="register-form" autocomplete="off">
            <div class="input-box">
                <input type="text" class="input-field" id="reg-name" name="nome" required>
                <label for="reg-name" class="label">Nome</label>
                <i class='bx bx-user icon' ></i>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" id="reg-email" name="email" required>
                <label for="reg-email" class="label">Email</label>
                <i class='bx bx-envelope icon'></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" id="reg-pass" name="senha" required>
                <label for="reg-pass" class="label">Senha</label>
                <i class='bx bx-lock-alt icon' ></i>
            </div>
            <div class="form-cols">
                <div class="col-1">
                    <input type="checkbox" id="agree">
                    <label for="agree"> Eu concordo com os termos e condições.</label>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="input-box">
                <button class="btn-submit" id="SignUpBtn">Cadastrar <i class='bx bx-user-plus' ></i></button>
            </div>
            <div class="switch-form">
                <span>Já tenho uma conta? <a href="#" onclick="loginFunction()">Entrar</a></span>
            </div>
        </form>
    </div>
    </div>

    
</body>
<script src="./assets/js/login2.js"></script>
</html>

<!-- // Exibir o footer -->
<?php include 'footer.php'; ?>


