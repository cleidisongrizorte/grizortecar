<!DOCTYPE html>
<html lang="pt-br">

<!-- Exibir o header -->
<?php include_once 'header.php'; ?>


    <!-- Carousel Start -->
    <div class="container-fluid p-0" style="margin-bottom: 90px;">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">GrizorteCar</h4>
                            <h1 class="display-1 text-white mb-md-4">A sua Oficina Mecânica.</h1>
                            <a href="./agenda/" class="btn btn-primary py-md-3 px-md-5 mt-2">Agenda Agora</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">GrizorteCar</h4>
                            <h1 class="display-1 text-white mb-md-4">Serviço ágil, profissional e de confiança.</h1>
                            <a href="./agenda/" class="btn btn-primary py-md-3 px-md-5 mt-2">Agenda sua Visita</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <!-- <h1 class="display-1 text-primary text-center">01</h1> -->
            <h1 class="display-4 text-uppercase text-center mb-5">Bem Vindo a <span class="text-primary">GrizorteCar</span></h1>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <img class="w-75 mb-4" src="img/about.png" alt="">
                    <p>
                  Referência em serviços automotivos em Goiânia desde 2012, com conceito inovador
             que oferece diversas vantagens para seus clientes: o melhor atendimento, 
             conforto, conveniência, os melhores equipamentos e a qualidade de serviços
              executados por profissionais treinados.
                    </p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-headset text-secondary"></i>
                        </div>
                        <h4 class="text-uppercase m-0">24/7 Suporte ao Seu Carro</h4>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-secondary p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-car text-secondary"></i>
                        </div>
                        <h4 class="text-light text-uppercase m-0">Temos Carro Reserva</h4>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-map-marker-alt text-secondary"></i>
                        </div>
                        <h4 class="text-uppercase m-0">Estamos em ótima Localização</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <!-- <h1 class="display-1 text-primary text-center">02</h1> -->
            <h1 class="display-4 text-uppercase text-center mb-5">Nossos Serviços</h1>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-taxi text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">01</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Revisão Geral</h4>
                        <p class="m-0">Todo veículo deve ser inspecionado regularmente. A revisão geral tem como finalidade</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item active d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-truck-monster text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">02</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Balanceamento de Rodas</h4>
                        <p class="m-0">Comumente confundido com o alinhamento, este serviço visa deixar as rodas do seu veículo em perfeito equilíbrio.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-car text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">03</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Suspensão e Direção</h4>
                        <p class="m-0">Manter a suspensão e direção do seu carro sempre em ordem é uma das especialidades da nossa oficina. Realizamos completa checagem dos diversos itens e componentes</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-cogs text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">04</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Mecânica Geral</h4>
                        <p class="m-0">É a estrutura geral do veículo, pela qual são desmembradas...</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-spray-can text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">05</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Pintura</h4>
                        <p class="m-0">A pintura é uma parte importante da estética do carro, mas com o passar do tempo é normal que ela apresente sinais de desgaste.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-pump-soap text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">06</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Troca de Óleo</h4>
                        <p class="m-0">Este serviço deve ser feito em média a cada 10.000 km de acordo com o fabricante, tipo de óleo e uso do veículo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-banner py-5 px-4 text-center">
                <div class="py-5">
                    <h1 class="display-1 text-uppercase text-primary mb-4">20% OFF</h1>
                    <h1 class="text-uppercase text-light mb-4">Com Cartão Fidelidade</h1>
                    <p class="mb-4">Faça o seu cartão no ato do cadastro.</p>
                    <a class="btn btn-primary mt-2 py-3 px-5" href="./agenda/">Agendar Agora</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0">
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                        <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="img/banner-left.jpg" alt="">
                        <div class="text-right">
                            <h3 class="text-uppercase text-light mb-3">Oficina Mecânica</h3>
                            <p class="mb-4"><li>Equipe técnica profissional</li>
                            <li>Máquinas e equipamentos atualizados</li>                            
                            <li>Fácil localização</li>
                            </p>
                            <a class="btn btn-primary py-2 px-4" href="./agenda/">Agendar Visita</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                        <div class="text-left">
                            <h3 class="text-uppercase text-light mb-3">Nossos Diferenciais</h3>
                            <p class="mb-4"><li>Atendimento especializado em veículos nacionais e importados</li>
                            <li>Transparência no orçamento (fotos e vídeos para melhor entendimento)</li>                            
                           
                            </p>
                            <a class="btn btn-primary py-2 px-4" href="./agenda/">Fazer Orçamento</a>
                        </div>
                        <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="img/banner-right.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">            
            <h1 class="display-4 text-uppercase text-center mb-5">O que dizem nossos clientes</h1>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <img class="img-fluid ml-n4" src="img/testimonial-1.jpg" alt="">
                        <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                    </div>
                    <h4 class="text-uppercase mb-2">Daniel MB</h4>
                    <i class="mb-2">Cliente</i>
                    <p class="m-0">Possuem um ótimo atendimento e serviço, bem completo e explicativo! Indico para quem quer comprar seu carro sem “surpresinhas” desagradáveis! Vale a pena o</p>
                </div>
                <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <img class="img-fluid ml-n4" src="img/testimonial-2.jpg" alt="">
                        <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                    </div>
                    <h4 class="text-uppercase mb-2">Beatriz Paula</h4>
                    <i class="mb-2">Cliente</i>
                    <p class="m-0">Ótimo lugar, me atendeu super bem.. e resolveu meu problema.. super indico</p>
                </div>
                <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <img class="img-fluid ml-n4" src="img/testimonial-3.jpg" alt="">
                        <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                    </div>
                    <h4 class="text-uppercase mb-2">Ademir</h4>
                    <i class="mb-2">Cliente</i>
                    <p class="m-0">Está oficina é uma das melhores que já vi, rápido, transparente, preço justo e um excelente atendimento.</p>
                </div>
                <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <img class="img-fluid ml-n4" src="img/testimonial-4.jpg" alt="">
                        <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                    </div>
                    <h4 class="text-uppercase mb-2">Raimunda</h4>
                    <i class="mb-2">Cliente</i>
                    <p class="m-0">Muito rapido o atendimento eo conserto no meu carro.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">            
            <h1 class="display-4 text-uppercase text-center mb-5">Entre em Contato</h1>
            <div class="row">
                <div class="col-lg-7 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                        <form>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control p-4" placeholder="Nome" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="email" class="form-control p-4" placeholder="Email" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control p-4" placeholder="Objetivo da mensagem" required="required">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control py-3 px-4" rows="5" placeholder="Mensagem" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 mb-2">
                    <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 435px;">
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Nosso Endereço</h5>
                                <p>Rua 75, 46, Central - Goiânia, Goiás</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-headset text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">62 3999-9999</h5>
                                <p>Fale Conosco</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Nosso Email</h5>
                                <p>contato@grizortecar.com.br</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="img/vendor-1.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-2.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-3.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-4.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-5.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-6.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-7.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-8.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

    <!-- Exibir o footer -->
<?php include_once 'footer.php'; ?>


    