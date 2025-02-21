
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

</head>

<body id="top">

  <main>
    <article>

      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
      </button>

      <!-- contato header -->

      <section class="contact" aria-label="contact" data-reveal="right">
        <div class="container">
          <ul class="contact-list">
            <li>
              <div class="contact-card">
                <div class="card-icon">
                  <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
                </div>
                <div>
                  <h3 class="h6">Telefone</h3>
                  <a href="tel:+62999999" class="card-subtitle">62 9999-9999</a>
                </div>
              </div>
            </li>

            <li>
              <div class="contact-card">
                <div class="card-icon">
                  <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
                </div>
                <div>
                  <h3 class="h6">E-mail</h3>
                  <a href="mailto:contato@grizortecar.com.br" class="card-subtitle">contato@grizortecar.com.br</a>
                </div>
              </div>
            </li>

            <li>
              <div class="contact-card">
                <div class="card-icon">
                  <ion-icon name="compass-outline" aria-hidden="true"></ion-icon>
                </div>
                <div>
                  <h3 class="h6">Nosso Endereço</h3>
                  <address class="card-subtitle">Rua 3, Goiânia</address>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </article>
  </main>

  <!-- footer -->
  <footer class="footer">
    <div class="container">

      <div class="footer-top section" data-reveal>

        <div class="newsletter-card">

          <div class="card-icon">
            <ion-icon name="mail-unread-outline" aria-hidden="true"></ion-icon>
          </div>

          <h3 class="h3 card-title">Inscreva-se para receber novidades</h3>

          <form action="#" class="newsletter-form">            

            <input type="email" name="email" id="email" placeholder="Endereço de e-mail" required class="email-field">

            <button type="submit" class="btn btn-primary">Inscrever-se</button>

          </form>

        </div>

        <div class="footer-list">

          <p class="h6 has-after">GrizorteCar</p>

          <p class="footer-text">
            A GrizorteCar, é uma oficina mecânica especializada na manutenção de veículos nacionais, importados e premium.
          </p>

          <a href="#" class="btn-outline">
            <span class="span">Fazer Agendamento</span>

            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
          </a>

        </div>

        <ul class="footer-list">

          <li>
            <p class="h6 has-after">Saiba mais sobre nós</p>
          </li>

          <li>
            <a href="#" class="footer-link">Inicio</a>
          </li>

          <li>
            <a href="#" class="footer-link">Quem Somos</a>
          </li>

          <li>
            <a href="#" class="footer-link">Nossos Serviços</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contato</a>
          </li>

          <li>
            <a href="#" class="footer-link">Blog</a>
          </li>



        </ul>

        <ul class="footer-list">

          <li>
            <p class="h6 has-after">Contato Rápido</p>
          </li>

          <li>
            <address class="footer-text">
              Rua 75, 46, Central - Goiânia, Goiás 
            </address>
          </li> </br>

          <li>
            <p class="footer-text">
              Se tiver alguma dúvida ou precisar de ajuda, entre em contato com nossa equipe.
            </p>
          </li>
          

          <li>
            <a href="tel:62999999" class="contact-link">(62)9999-9999</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <div>
          <ul class="footer-bottom-list">

            <li>
              <a href="#" class="footer-bottom-link">Onde nos encontrar</a>
            </li>

            <!-- <li>
              <a href="#" class="footer-bottom-link">Termos de pagamento</a>
            </li> -->

            <li>
              <a href="#" class="footer-bottom-link">Política de privacidade</a>
            </li>

          </ul>
          
          <p class="copyright">&copy; <?php echo date('Y'); ?> Cleidison Grizote</p>
        </div>

        <img src="./assets/images/logo_branco.png" width="100" height="63" loading="lazy" alt="grizortecar">

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin" aria-hidden="true"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </div>
  </footer>

  <!-- VOLTAR AO TOP -->
  <a href="#top" class="back-top-btn" aria-label="go to top" data-go-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>

</body>

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>