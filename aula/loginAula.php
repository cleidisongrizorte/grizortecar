<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <!-- - primeira meta tags -->
  
    <title>GrizorteCar - A sua Oficina Mecânica de veículos</title>
    <meta name="title" content="GrizorteCar - A sua Oficina Mecânica de veículos nacionais e importados." />
    <meta
      name="description"
      content="Oficina Mecânica de veículos nacionais e importados."
    />

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.ico" type="image/svg+xml" />

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;600;700&family=Mulish&display=swap"
      rel="stylesheet"
    />

    <!-- 
    - material icon font
  -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,600,0,0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    

    <!-- 
    - preload images
  -->
    <link rel="preload" as="image" href="./assets/images/hero-banner.png" />
    <link rel="preload" as="image" href="./assets/images/hero-bg.jpg" />
  </head>
      <!-- #HEADER -->
    <?php include 'header2.php'; ?>
<body>
    <div class="telalogin2">
        <div class="telalogin" id="telalogin">

          <!-- aqui e tela de cadastro -->
        <div class="form-container sign-up">
            <form action="dados.php" method='post'>
                <h1 class="h2 section-title">Crie sua conta</h1>
                <span>Prenche os dados abaixo</span>
                <input type="nome" placeholder="Nome" name="nome">
                <input type="email" placeholder="Email" name="email">
                <input type="senha" placeholder="Senha" name="senha">
                <button>Criar Conta</button>
            </form>
        </div>
        <!-- fim tela de cadastro -->

        <div class="form-container sign-in">
            <form action="dados.php" method='post'>
                <h1 class="h2 section-title">Entrar</h1>
                <span>Entra com seu email e senha</span>
                <input type="email" placeholder="Email">
                <input type="senha" placeholder="Senha">
                <a href="#">Esqueceu a sua senha?</a>
                <button>Entrar</button>
            </form>
        </div>
        
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bem Vindo de Volta!</h1>
                    <p>Já tem conta? Clique em Entrar.</p>
                    <button class="hidden" id="login">Entrar</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Olá, Amigo!</h1>
                    <p>Não tem conta? Clique em Criar Conta.</p>
                    <button class="hidden" id="register">Criar Conta</button>
                </div>
            </div>
        </div>
    </div>
    </div>  
    
</body>
    <!-- #FOOTER -->
    <?php include 'footer.php'; ?>

    <script src="./assets/js/script.js"></script>
</html>

 