
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
<title>GrizorteCar - A sua Oficina Mecânica de veículos</title>
  <meta name="title" content="GrizorteCar - A sua Oficina Mecânica de veículos nacionais e importados.">
  <meta name="description" content="site da oficina GrizorteCar">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.ico" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - custom font link
  -->
  <link rel="stylesheet" href="./assets/font/font.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/loading.svg">
  <link rel="preload" as="image" href="./assets/images/loading-circle.svg">
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <!-- <div class=" preload-box" data-preloader>
    <img src="./assets/images/loading.svg" width="45" height="45" alt="loading">

    <img src="./assets/images/loading-circle.svg" width="75" height="75" alt="loading" class="preload-circle">
  </div> -->





  <!-- 
    - #HEADER
  -->

  <!-- <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo.svg" width="160" height="50" alt="volti home">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#" class="navbar-link">Home</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Services</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Gallery</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Blog</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Contact Us</a>
          </li>

        </ul>
      </nav>

      <div class="header-action">

        <a href="tel:+12312345678901" class="contact-number">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

          <span class="span">+(123) 1234-567-8901</span>
        </a>

        <a href="#" class="btn btn-primary">
          <span class="span">Get a quote</span>

          <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
        </a>

      </div>

      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="open"></ion-icon>
        <ion-icon name="close-outline" aria-hidden="true" class="close"></ion-icon>
      </button>

    </div>
  </header> -->

<!-- Exibir o header -->
<?php include_once 'header.php'; ?>



  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" aria-label="home">
        <div class="container">

          <div class="hero-content" data-reveal="left">

            <h1 class="h1 hero-title">
              GrizorteCar <span class="span">Sua Oficina </span> Mecânica.
            </h1>

            <ul class="hero-list">

              <li>
                <div class="hero-card">
                  <ion-icon name="compass-outline" aria-hidden="true"></ion-icon>

                  <p class="card-subtitle">400M²</p>

                  <p class="card-title">Espaço</p>
                </div>
              </li>

              <li>
                <div class="hero-card">
                  <ion-icon name="calendar-number-outline" aria-hidden="true"></ion-icon>

                  <p class="card-subtitle">+10</p>

                  <p class="card-title">Anos</p>
                </div>
              </li>

              <li>
                <div class="hero-card">
                  <ion-icon name="ribbon-outline" aria-hidden="true"></ion-icon>

                  <p class="card-subtitle">+10</p>

                  <p class="card-title">Prêmios</p>
                </div>
              </li>

            </ul>

            <a href="#" class="btn btn-primary">
              <span class="span">Agenda Sua Visita</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <figure class="hero-banner" data-reveal="right">
            <img src="./assets/images/hero-banner.png" width="1116" height="766" alt="Bike" class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-labelledby="about-label">
        <div class="container">

          <figure class="about-banner" data-reveal="left">
            <img src="./assets/images/about-banner-1.jpg" width="380" height="382" loading="lazy" alt="about banner"
              class="w-100 img-1">

            <img src="./assets/images/about-banner-2.jpg" width="347" height="349" loading="lazy" alt="about banner"
              class="w-100 img-2">
          </figure>

          <div class="about-content" data-reveal="right">

            <p class="section-subtitle has-before" id="about-label">Sobre Nós</p>

            <h2 class="h2 section-title">
              ESTAMOS COMPROMETIDOS COM A QUALIDADE
            </h2>

            <p class="section-text">
              Referência em serviços automotivos em Goiânia desde 2012, com conceito inovador
             que oferece diversas vantagens para seus clientes: o melhor atendimento, 
             conforto, conveniência, os melhores equipamentos e a qualidade de serviços
              executados por profissionais treinados.
            </p>

            <div class="about-wrapper">

              <div class="about-card">

                <div class="title-wrapper">
                  <ion-icon name="construct-outline"></ion-icon>

                  <h3 class="card-title">Equipe técnica especializada</h3>
                </div>

                <p class="card-text">
                  Nossos mecânicos são treinados com os mais elevados padrões técnicos exigidos por cada montadora.
                </p>

              </div>

              <div class="about-card">

                <div class="title-wrapper">
                  <ion-icon name="laptop-outline"></ion-icon>

                  <h3 class="card-title">Tecnologia de ponta</h3>
                </div>

                <p class="card-text">
                  Somos especialistas na manutenção de veículos e estamos preparados para lidar com com a tecnologia automotiva de última geração.
                </p>

              </div>

            </div>

            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                <span class="span">Aqui você encontra todos os serviços em um só lugar!</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                <span class="span">Melhor Oficina Mecânica de Goiânia.</span>
              </li>

            </ul>

            <a href="#" class="btn btn-primary">
              <span class="span">Agenda Sua visita</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

        </div>
      </section>





      <!-- 
        - #STATS
      -->

      <section class="section stats" aria-label="statistics">
        <div class="container">

          <ul class="stats-list" data-reveal>

            <li class="stats-card">
              <h3 class="h3 card-title">8K+</h3>

              <p class="card-text">
                Clientes Felizes
              </p>
            </li>

            <li class="stats-card">
              <h3 class="h3 card-title">22+</h3>

              <p class="card-text">
                Equipamentos
              </p>
            </li>

            <li class="stats-card">
              <h3 class="h3 card-title">99%</h3>

              <p class="card-text">
                Projetos completo
              </p>
            </li>

          </ul>

          <div class="stats-banner" data-reveal>
            <img src="./assets/images/stats-banner.jpg" width="1398" height="565" loading="lazy" alt="video banner"
              class="img-cover">

            <button class="play-btn" aria-label="play video">
              <ion-icon name="play" aria-hidden="true"></ion-icon>
            </button>
          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" aria-labelledby="service-label">
        <div class="container">

          <p class="section-subtitle has-before" id="service-label" data-reveal>NOSSOS SERVIÇOS</p>

          <h2 class="h2 section-title" data-reveal>
            Conheca um pouco dos nosso serviços
          </h2>

          <div class="wrapper">

            <ul class="service-list" data-reveal="left">

              <li class="service-item">
                <div>
                  <h3 class="h5 card-title">Suspensão e Freio</h3>

                  <p class="card-text">
                    Se existe um grupo de peças de extrema importância no sistema automotivo,
                  </p>
                </div>

                <div class="card-icon">
                  <ion-icon name="car-outline" aria-hidden="true"></ion-icon>
                </div>
              </li>

              <li class="service-item">
                <div>
                  <h3 class="h5 card-title">Mecânica Geral</h3>

                  <p class="card-text">
                   É a estrutura geral do veículo, pela qual são desmembradas...
                  </p>
                </div>

                <div class="card-icon">
                  <ion-icon name="construct-outline"></ion-icon>
                </div>
              </li>

              <li class="service-item">
                <div>
                  <h3 class="h5 card-title">Revisão Geral</h3>

                  <p class="card-text">
                    Todo veículo deve ser inspecionado regularmente. A revisão geral tem como finalidade
                  </p>
                </div>

                <div class="card-icon">
                  <ion-icon name="car-sport-outline"></ion-icon>
                </div>
              </li>

            </ul>

            <figure class="service-banner img-holder" style="--width: 805; --height: 510;">
              <img src="./assets/images/service-banner.png" width="805" height="510" loading="lazy" alt="service banner"
                class="img-cover">
            </figure>

            <ul class="service-list" data-reveal="right">

              <li class="service-item">
                <div class="card-icon">
                  <ion-icon name="car-outline" aria-hidden="true"></ion-icon>
                </div>

                <div>
                  <h3 class="h5 card-title">Regulagem Eletrônica</h3>

                  <p class="card-text">
                    A função da injeção eletrônica é fazer a mistura de ar e combustível na dosagem
                  </p>
                </div>
              </li>

              <li class="service-item">
                <div class="card-icon">
                  <ion-icon name="construct-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h5 card-title">Alinhamento de Direção</h3>

                  <p class="card-text">
                    O Alinhamento de Direção do seu veículo com sistema computadorizado de alta precisão
                  </p>
                </div>
              </li>

              <li class="service-item">
                <div class="card-icon">
                  <ion-icon name="car-sport-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h5 card-title">Serviços Hidráulico</h3>

                  <p class="card-text">
                    A direção hidráulica é o sistema que utiliza da mecânica dos fluidos
                  </p>
                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="cta">
        <div class="container">

          <div class="cta-card" data-reveal="left">

            <div>
              <h2 class="h1 card-title">Oficina Mecânica em Goiânia</h2>

              <p class="card-text">
                <ul>
                 <li>Ampla Infraestrutura</li>
                <li>Equipe técnica profissional</li>
                <li>Máquinas e equipamentos atualizados</li>
                <li>Fácil localização</li>
                </ul>

               
              </p>
            </div>

            <a href="#" class="btn btn-primary">
              <span class="span">Contato</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <figure class="cta-banner" data-reveal="right">
            <img src="./assets/images/cta-banner.jpg" width="330" height="206" loading="lazy" alt="cta banner"
              class="img-cover">
          </figure>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" aria-labelledby="blog-label">
        <div class="container">

          <div class="title-wrapper" data-reveal>

            <div>
              <p class="section-subtitle has-before" id="blog-label">Artigos e Novidades</p>

              <h2 class="h2 section-title">Veja Algunhas Dicas</h2>
            </div>

            <a href="#" class="btn btn-secondary">
              <span class="span">Ver Mais Blog</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <ul class="blog-list" data-reveal>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 770; --height: 550;">
                  <img src="./assets/images/blog-1.jpg" width="770" height="550" loading="lazy"
                    alt="Energy Star Certified Electric Vehicle Chargers" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="publish-date" datetime="2022-06-03">03 Jan 2025</time>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <span class="span">Admin</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="chatbubble-outline" aria-hidden="true"></ion-icon>

                      <span class="span">2 Comentários</span>
                    </li>

                  </ul>

                  <h3 class="h5">
                    <a href="#" class="card-title">
                      Carregadores de veículos elétricos
                    </a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 770; --height: 550;">
                  <img src="./assets/images/blog-2.jpg" width="770" height="550" loading="lazy"
                    alt="Charging Solution For Electric Car & Hybrid Car" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="publish-date" datetime="2025-01-04">04 Jan 2025</time>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <span class="span">Admin</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="chatbubble-outline" aria-hidden="true"></ion-icon>

                      <span class="span">3 Comentários</span>
                    </li>

                  </ul>

                  <h3 class="h5">
                    <a href="#" class="card-title">
                      Solução carregamento para carros
                    </a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 770; --height: 550;">
                  <img src="./assets/images/blog-3.jpg" width="770" height="550" loading="lazy"
                    alt="Home Charging Station For A Electric Vehicless" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="publish-date" datetime="2024-12-03">03 Dez 2024</time>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <span class="span">Admin</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="chatbubble-outline" aria-hidden="true"></ion-icon>

                      <span class="span">2 Comentários</span>
                    </li>

                  </ul>

                  <h3 class="h5">
                    <a href="#" class="card-title">
                      Estação carregamento residencial para veículos elétricos
                    </a>
                  </h3>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>
      <!-- Exibir o header -->
<?php include_once 'footer.php'; ?>


    </article>
</main>


  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>


