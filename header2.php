<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- 
    - primeira meta tags
  -->
    <title>GrizorteCar - A sua Oficina Mecânica de veículos</title>
    <meta name="title" content="GrizorteCar - A sua Oficina Mecânica de veículos nacionais e importados." />
    <meta
      name="description"
      content="Oficina Mecânica de veículos nacionais e importados."
    />

    
    <!-- - favicon -->
  
    <link rel="shortcut icon" href="./favicon.ico" type="image/svg+xml" />

    
    <!-- - link google font -->
  
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;600;700&family=Mulish&display=swap"
      rel="stylesheet"
    />

    
    <!-- - material icon font -->
  
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,600,0,0"
    />

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
<body>
        <header class="header" id="header">
      <div class="container">
        <a href="#" class="logo">
          <img
            src="./assets/images/logo.png"
            width="128"
            height="63"
            alt="autofix home"
          />
        </a>

        <nav class="navbar" data-navbar>
          <ul class="navbar-list">
            <li>
              <a href="#" class="navbar-link">Home</a>
            </li>

            <li>
              <a href="#" class="navbar-link">Serviços</a>
            </li>

            <li>
              <a href="#" class="navbar-link">Agendamento</a>
            </li>

            <li>
              <a href="#" class="navbar-link">Sobre Nós</a>
            </li>

            <li>
              <a href="#" class="navbar-link">Contato</a>
            </li>
          </ul>
        </nav>

        <a href="#" class="btn btn-primary">
          <span class="span">Login/Criar Conta</span>

          <span class="material-symbols-rounded">arrow_forward</span>
        </a>

        <button
          class="nav-toggle-btn"
          aria-label="toggle menu"
          data-nav-toggler
        >
          <span class="nav-toggle-icon icon-1"></span>
          <span class="nav-toggle-icon icon-2"></span>
          <span class="nav-toggle-icon icon-3"></span>
        </button>
      </div>
    </header>

    <!-- Banner da header -->
    
       <section
          class="bannerheader has-bg-image"
          aria-label="home"
          style="background-image: url('./assets/images/bannerheader.jpg')">
          <div class="container">
            <div class="hero-content">
              <p class="section-subtitle :dark">
                GrizorteCar
              </p>
            </div>
          </div>
        </section>

</body>
</html>