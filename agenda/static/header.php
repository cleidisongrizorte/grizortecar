<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  

    <title>GrizorteCar - A sua Oficina Mecânica de veículos</title>  

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= BASE_URL ?>/agenda/static/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>/agenda/static/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= BASE_URL ?>/agenda/static/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= BASE_URL ?>/agenda/static/css/style.css" rel="stylesheet">

   <!-- - favicon -->  
  <link rel="shortcut icon" href="<?= BASE_URL ?>/agenda/favicon.ico" type="image/svg+xml">
</head>

<body>
    <header>
        <!-- Topbar Start -->
        <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-body pr-3" href="tel:62999999999"><i class="fa fa-phone-alt mr-2"></i>62 9999-9999</a>
                        <span class="text-body">|</span>
                        <a class="text-body px-3" href="mailto:contato@grizortecar.com.br"><i class="fa fa-envelope mr-2"></i>contato@grizortecar.com.br</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-body px-3" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="text-body px-3" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="text-body px-3" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="text-body px-3" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="text-body pl-3" href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->
                 <!-- Navbar Start -->
        <div class="container-fluid position-relative nav-bar p-0">
            <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                    <a href="<?= BASE_URL ?>/agenda/" class="navbar-brand">
                        <img src="<?= BASE_URL ?>/agenda/static/img/logo.png" width="128" height="63" alt="Logo da GrizorteCar">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                        <div class="navbar-nav ml-auto py-0">                        
                        <a href="<?= BASE_URL ?>/agenda" class="nav-item nav-link active">Home</a>
                        <a href="<?= BASE_URL ?>/agenda/admin" class="nav-item nav-link">Administração</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
    </header>
</br>
</body>
</html>
