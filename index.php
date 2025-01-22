<!DOCTYPE html>
<html lang="pt-BR">
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

    <!-- #HEADER -->
    <?php include 'header.php'; ?>

    <main>
      <article>
        
        <!-- 
        - #HERO
      -->

       <section
          class="hero has-bg-image"
          aria-label="home"
          style="background-image: url('./assets/images/hero-bg.jpg')"
        >
          <div class="container">
            <div class="hero-content">
              <p class="section-subtitle :dark">
                GrizorteCar
              </p>

              <h1 class="h1 section-title">
                A Sua Oficina Mecânica de Veículos.
              </h1>

              <p class="section-text">
                Serviço ágil, profissional e de confiança.
              </p>

              <a href="#" class="btn">
                <span class="span">Agendar sua Visita</span>

                <span class="material-symbols-rounded">arrow_forward</span>
              </a>
            </div>

            <figure class="hero-banner" style="--width: 1228; --height: 689">
              <img
                src="./assets/images/hero-banner.png"
                width="1228"
                height="689"
                alt="red motor vehicle"
                class="move-anim"
              />
            </figure>
          </div>
        </section>

        
        <!-- #Serviços -->
      

        <section
          class="section service has-bg-image"
          aria-labelledby="service-label"
          style="background-image: url('./assets/images/service-bg.jpg')"
        >
          <div class="container">
            <p class="section-subtitle :light" id="service-label">
              Nossos Serviços
            </p>

            <h2 class="h2 section-title">
              OFERECEMOS ÓTIMOS SERVIÇOS PARA SEU VEÍCULO.
            </h2>

            <ul class="service-list">
              <li>
                <div class="service-card">
                  <figure class="card-icon">
                    <img
                      src="./assets/images/services-1.png"
                      width="110"
                      height="110"
                      loading="lazy"
                      alt="Engine Repair"
                    />
                  </figure>

                  <h3 class="h3 card-title">Mecânica Geral</h3>

                  <p class="card-text">
                  É a estrutura geral do veículo, pela qual são desmembradas conforme lista abaixo
                  </p>

                  <a href="#" class="btn-link">Ver mais</a>
                </div>
              </li>

              <li>
                <div class="service-card">
                  <figure class="card-icon">
                    <img
                      src="./assets/images/services-2.png"
                      width="110"
                      height="110"
                      loading="lazy"
                      alt="Brake Repair"
                    />
                  </figure>

                  <h3 class="h3 card-title">Suspensão e Freio</h3>

                  <p class="card-text">
                  Se existe um grupo de peças de extrema importância no sistema automotivo,
                  
                  </p>

                  <a href="#" class="btn-link">Ver mais</a>
                </div>
              </li>

              <li>
                <div class="service-card">
                  <figure class="card-icon">
                    <img
                      src="./assets/images/services-3.png"
                      width="110"
                      height="110"
                      loading="lazy"
                      alt="Tire Repair"
                    />
                  </figure>

                  <h3 class="h3 card-title">Revisão Geral</h3>

                  <p class="card-text">
                  Todo veículo deve ser inspecionado regularmente.
                  A revisão geral tem como finalidade
                  </p>

                  <a href="#" class="btn-link">Ver mais</a>
                </div>
              </li>

              <li>
                <div class="service-card">
                  <figure class="card-icon">
                    <img
                      src="./assets/images/services-4.png"
                      width="110"
                      height="110"
                      loading="lazy"
                      alt="Battery Repair"
                    />
                  </figure>

                  <h3 class="h3 card-title">Regulagem Eletrônica</h3>

                  <p class="card-text">
                    A função da injeção eletrônica é fazer a mistura de ar e combustível na dosagem
                  </p>

                  <a href="#" class="btn-link">Ver mais</a>
                </div>
              </li>

              <li class="service-banner">
                <img
                  src="./assets/images/services-5.png"
                  width="646"
                  height="380"
                  loading="lazy"
                  alt="Red Car"
                  class="move-anim"
                />
              </li>

              <li>
                <div class="service-card">
                  <figure class="card-icon">
                    <img
                      src="./assets/images/services-6.png"
                      width="110"
                      height="110"
                      loading="lazy"
                      alt="Steering Repair"
                    />
                  </figure>

                  <h3 class="h3 card-title">Serviços Hidráulico</h3>

                  <p class="card-text">
                    A direção hidráulica é o sistema que utiliza da mecânica dos fluidos
                  </p>

                  <a href="#" class="btn-link">Ver mais</a>
                </div>
              </li>
            </ul>

            <a href="#" class="btn">
              <span class="span">Ver todos serviços</span>

              <span class="material-symbols-rounded">arrow_forward</span>
            </a>
          </div>
        </section>

        
        <!-- #Sobre Nos -->
      

        <section class="section about has-before" aria-labelledby="about-label" id="sobre">
          <div class="container">
            <figure class="about-banner">
              <img
                src="./assets/images/about-banner.png"
                width="540"
                height="540"
                loading="lazy"
                alt="vehicle repire equipments"
                class="w-100"
              />
            </figure>

            <div class="about-content">
              <p class="section-subtitle :dark">Sobre Nós</p>

              <h2 class="h2 section-title">
                ESTAMOS COMPROMETIDOS COM A QUALIDADE
              </h2>

              <p class="section-text">
                A GrizorteCar, é uma oficina mecânica especializada na manutenção de veículos nacionais,
                 importados e premium.
              </p>

              <p class="section-text">
               Referência em serviços automotivos em Goiânia desde 2022, com conceito inovador
                que oferece diversas vantagens para seus clientes: o melhor atendimento, 
                conforto, conveniência, os melhores equipamentos e a qualidade de serviços
                 executados por profissionais treinados.
              </p>

              <ul class="about-list">
                <li class="about-item">
                  <p>
                    <strong class="display-1 strong">8K+</strong>Clientes Felizes
                  </p>
                </li>

                <li class="about-item">
                  <p>
                    <strong class="display-1 strong">22+</strong> Equipamentos
                  </p>
                </li>

                <li class="about-item">
                  <p>
                    <strong class="display-1 strong">4+</strong> Anos de mercado
                  </p>
                </li>

                <li class="about-item">
                  <p>
                    <strong class="display-1 strong">99%</strong> Projetos
                    completo
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </section>

        <!-- 
        - #WORK
      -->

        <section class="section work" aria-labelledby="work-label">
          <div class="container">
            <p class="section-subtitle :light" id="work-label">Artigos e Novidades</p>

            <h2 class="h2 section-title">Algunhas Dicas</h2>

            <ul class="has-scrollbar">
              <li class="scrollbar-item">
                <div class="work-card">
                  <figure
                    class="card-banner img-holder"
                    style="--width: 350; --height: 406"
                  >
                    <img
                      src="./assets/images/work-1.jpg"
                      width="350"
                      height="406"
                      loading="lazy"
                      alt="Engine Repair"
                      class="img-cover"
                    />
                  </figure>

                  <div class="card-content">
                    <p class="card-subtitle">Dica 01</p>

                    <h3 class="h3 card-title">Dica 01</h3>

                    <a href="#" class="card-btn">
                      <span class="material-symbols-rounded"
                        >arrow_forward</span
                      >
                    </a>
                  </div>
                </div>
              </li>

              <li class="scrollbar-item">
                <div class="work-card">
                  <figure
                    class="card-banner img-holder"
                    style="--width: 350; --height: 406"
                  >
                    <img
                      src="./assets/images/work-2.jpg"
                      width="350"
                      height="406"
                      loading="lazy"
                      alt="Car Tyre change"
                      class="img-cover"
                    />
                  </figure>

                  <div class="card-content">
                    <p class="card-subtitle">Dica 01</p>

                    <h3 class="h3 card-title">Dica 01</h3>

                    <a href="#" class="card-btn">
                      <span class="material-symbols-rounded"
                        >arrow_forward</span
                      >
                    </a>
                  </div>
                </div>
              </li>

              <li class="scrollbar-item">
                <div class="work-card">
                  <figure
                    class="card-banner img-holder"
                    style="--width: 350; --height: 406"
                  >
                    <img
                      src="./assets/images/work-3.jpg"
                      width="350"
                      height="406"
                      loading="lazy"
                      alt="Battery Adjust"
                      class="img-cover"
                    />
                  </figure>

                  <div class="card-content">
                    <p class="card-subtitle">Dica 01</p>

                    <h3 class="h3 card-title">Dica 01</h3>

                    <a href="#" class="card-btn">
                      <span class="material-symbols-rounded"
                        >arrow_forward</span
                      >
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
      </article>
    </main>

    <!-- #FOOTER -->
    <?php include 'footer.php'; ?>

    <!-- 
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>
  </body>
</html>
