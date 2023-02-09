<?php
  session_start();

  if(isset($_SESSION['nome'])):

  $nome = Explode(" ", $_SESSION['nome']);
  $primeiro_nome = $nome[0];

  endif;
?>

<!DOCTYPE html>
<html class="wow-animation" lang="pt-br">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="images/logo_ong.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu:400,400italic,500,700,700italic">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <!-- IE Panel-->
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="page-loader page-loader-variant-1">
      <div><img style='border-radius: 15px;' width='500' height='500' src='images/animaisseabracando.png' alt=''/>
        <div class="offset-top-41 text-center">
          <div class="spinner"></div>
        </div>
      </div>
    </div>
    <!-- Page-->
    <div class="page text-center"><a class="section section-banner text-center d-none d-xl-block" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" style="background-image: url(images/banner/background-04-1920x60.jpg); background-image: -webkit-image-set( url(images/banner/background-04-1920x60.jpg) 1x, url(images/banner/background-04-3840x120.jpg) 2x);"></a>
	<!-- Page Head -->
      <header class="page-head data-preset='{"title":"Header with slider","category":"header, slider","reload":true,"id":"header-1"}'>
        <!-- RD Navbar Transparent-->
        <div style="background-color:#191919;" class="rd-navbar-wrap">
          <nav style="background-color:#191919;" class="rd-navbar container rd-navbar-floated rd-navbar-dark" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Top Panel-->
              <div class="rd-navbar-top-panel context-dark color-blue">
                <div class="left-side">
                  <address class="contact-info text-left"><a href="tel:#"><span class="icon mdi mdi-cellphone-android novi-icon"></span><span class="text-middle">(18) 3282-1308</span></a></address>
                </div>
                <div class="center">
                  <address class="contact-info text-left"><a href="https://www.google.com.br/maps/@-22.531064,-52.166725,15.58z"><span class="icon mdi mdi-map-marker-radius novi-icon"></span><span class="text-middle">Teodoro Sampaio - SP, CEP 19280-000</span></a></address>
                </div>
                <div class="right-side">
                  <ul class="list-inline list-inline-sm">
                    <li class="list-inline-item"><a class="novi-icon fa fa-facebook" href="https://www.facebook.com/ONGPATASEPELOS"></a></li>
                    <li class="list-inline-item"><a class="novi-icon fa fa-instagram" href="https://www.instagram.com/ong_patas_e_pelos/?next=%2F"></a></li>
                  </ul>
                </div>
              </div>
              <!-- RD Navbar Panel -->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" style="background: #fff; border-radius:50%;" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Top Panel Toggle-->
                <button class="rd-navbar-top-panel-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel"><span></span></button>
                <!--Navbar Brand-->
                <div class="rd-navbar-brand"><h2 style="color: #fff; font-size: 22px; position: absolute; bottom: 30px;"><?php if(isset($primeiro_nome)): ?><span>Olá, <?php print($primeiro_nome);?>! </h2></span><?php else: ?><div class="rd-navbar-brand"><a href="home.php"><img width='45' height='45' style="border-radius: 10px;" src='images/animaisseabracando.png' alt='Logo'/></a></div> <?php endif; ?></span></div>
              </div>
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <!--Navbar Brand Mobile-->
                    <div class="rd-navbar-mobile-brand"><a href="home.php"><img width='150' height='150' src='images/animaisseabracando.png' alt='Logo'/></a></div>

                    
                    <!-- RD Navbar Nav-->

                    <?php if(!isset($_SESSION['id'])): ?>

                    <ul class="rd-navbar-nav">
                      <li class="active"><a href="home.php"><span>Home</span></a></li>
                      <li><a href="sobre.php"><span>Sobre</span></a></li>
                      <li><a href="SISCONG/cadastro_adocao.php"><span>Adote</span></a></li>
                      <li><a href="SISCONG/cadastro_doacao.php"><span>Faça uma doação</span></a></li>
                      <li><a href="contato.php"><span>Contate-nos</span></a></li>
					            <li><a href="SISCONG/logar.php"><span>Login</span></a></li>

                    </ul>
                       
                      <?php

                        endif;

                        if(isset($_SESSION['perm'])):

                        if($_SESSION['perm'] < 1):
                       
                      ?>

                      <ul class="rd-navbar-nav">
                        <li class="active"><a href="home.php"><span>Home</span></a></li>
                        <li><a href="sobre.php"><span>Sobre</span></a></li>
                        <li><a href="SISCONG/cadastro_adocao.php"><span>Adote</span></a></li>
                        <li><a href="SISCONG/cadastro_doacao.php"><span>Faça uma doação</span></a></li>
                        <li><a href="contato.php"><span>Contate-nos</span></a></li>
                        <li><a href="SISCONG/methods/logout.php"><span>Sair</span></a></li>
                      </ul>
                        
                      <?php
                      
                      else:
                      
                      if($_SESSION['perm'] == 1):
                      
                      ?>

                        <ul class="rd-navbar-nav">
                          <li class="active"><a href="home.php"><span>Home</span></a></li>
                          <li><a href="sobre.php"><span>Sobre</span></a></li>
                          <li><a href="SISCONG/cadastro_adocao.php"><span>Adote</span></a></li>
                          <li><a href="SISCONG/cadastro_doacao.php"><span>Faça uma doação</span></a></li>
                          <li><a href="contato.php"><span>Contate-nos</span></a></li>
                          <li><a href="adm.php"><span>Área do Funcionário</span></a></li>
                          <li><a href="SISCONG/methods/logout.php"><span>Sair</span></a></li>
                        </ul>

                      <?php

                      else:

                      if($_SESSION['perm'] > 1):

                      ?>

                        <ul class="rd-navbar-nav">
                          <li class="active"><a href="home.php"><span>Home</span></a></li>
                          <li><a href="sobre.php"><span>Sobre</span></a></li>
                          <li><a href="SISCONG/cadastro_adocao.php"><span>Adote</span></a></li>
                          <li><a href="SISCONG/cadastro_doacao.php"><span>Faça uma doação</span></a></li>
                          <li><a href="contato.php"><span>Contate-nos</span></a></li>
                          <li><a href="adm.php"><span>Área do ADM</span></a></li>
                          <li><a href="SISCONG/methods/logout.php"><span>Sair</span></a></li>
                        </ul>

                    <?php endif; endif; endif; endif; ?>


                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
        <!--Swiper-->
        <div class="swiper-container swiper-slider" data-loop="false" data-autoplay="5500" data-dragable="false">
          <div class="swiper-wrapper text-center">
            <div class="swiper-slide" data-slide-bg="images/imagem.jpg" data-preview-bg="images/imagem.jpg">
              <div class="swiper-caption swiper-parallax" data-speed="0.5" data-fade="true">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="row justify-content-xl-center">
                      <div class="col-xl-12">
                        <div class="text-extra-big font-weight-bold font-italic text-uppercase" data-caption-animate="fadeInUp" data-caption-delay="300">AQUI VOCÊ ENCONTRA O QUE PROCURA!</div>
					            </div>
                      <div class="col-xl-8 offset-top-10">
                        <h5 class="hidden d-sm-block text-light" data-caption-animate="fadeInUp" data-caption-delay="500">
                          Somos pessoas empenhadas em ajudar e socorrer todo e qualquer tipo de animal que estiver em situação de abandono e/ou maus tratos. Quando você adota um animal, não só está dando um lar a ele, mas sim, uma nova chance de ser feliz! E ficamos felizes com isso também.
                        </h5>
                        <div class="offset-top-20 offset-sm-top-50"><a class="btn btn-danger btn-anis-effect" href="sobre.php" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800"><span class="btn-text">Saiba Mais</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/imagem2.jpg" data-preview-bg="images/imagem2.jpg">
              <div class="swiper-caption swiper-parallax" data-speed="0.5" data-fade="true">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="row justify-content-xl-center">
                      <div class="col-xl-12">
                        <div class="text-extra-big font-weight-bold font-italic text-uppercase black" data-caption-animate="fadeInUp" data-caption-delay="300">DÊ UM LAR A UM ANIMALZINHO!</div>
                      </div>
                      <div class="col-xl-8 offset-top-10">
                        <h5 class="hidden d-sm-block text-light" style="color: #000;" data-caption-animate="fadeInUp" data-caption-delay="500">Se está a procura de um companheiro, venha até a Patas e Pelos e seja feliz na sua escolha.</h5>
                        <div class="offset-top-20 offset-sm-top-50"><a class="btn btn-danger btn-anis-effect" href="sobre.php" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800"><span class="btn-text">Saiba Mais</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/gatin.jpg" data-preview-bg="images/gatin.jpg">
              <div class="swiper-caption swiper-parallax" data-speed="0.5" data-fade="true">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="row justify-content-xl-center">
                      <div class="col-xl-12">
                        <div class="text-extra-big font-weight-bold font-italic text-uppercase" data-caption-animate="fadeInUp" data-caption-delay="300">SOMOS UMA INSTITUIÇÃO SEM FINS LUCRATIVOS!</div>
                      </div>
                      <div class="col-xl-8 offset-top-10">
                        <h5 class="hidden d-sm-block text-light" data-caption-animate="fadeInUp" data-caption-delay="500">Estamos aqui para garantir que nossos bichinhos sejam tratados da melhor forma possível e que sejam entregues em boas mãos.</h5>
                        <div class="offset-top-20 offset-sm-top-50"><a class="btn btn-danger btn-anis-effect" href="sobre.php" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800"><span class="btn-text">Saiba Mais</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button swiper-button-prev swiper-parallax mdi mdi-chevron-left"></div>
          <div class="swiper-button swiper-button-next swiper-parallax mdi mdi-chevron-right"></div>
          <div class="swiper-pagination"></div>
        </div>
      </header>
      <!--Welcome-->
      <section class="section-98 section-md-110 novi-background" data-preset='{"title":"Content block 1","category":"content","id":"content-block-1"}'>
        <div class="container">
          <h1>BEM-VINDO</h1>
          <hr class="divider">
          <div class="row justify-content-sm-center offset-top-66">
            <div class="col-xl-8">
              <p>Bem-vindo a patas e pelos! Estamos felizes de tê-lo aqui conosco. Aqui estão algumas das melhores opções que você procura: </p>
            </div>
          </div>
          <div class="row justify-content-center grid-group-lg offset-top-98">
            <div class="col-md-8 col-lg-4">
              <!-- Icon Box Type 5-->
              <div class="box-icon box-icon-bordered"><span class="novi-icon icon icon-outlined icon-sm icon-dark-filled mdi mdi-bone"></span>
                <h4 class="text-danger offset-top-20">CACHORROS</h4>
                <p>Cachorros tratados e bem cuidados com todo tratamento especial, prontos para serem adotados.</p>
              </div>
            </div>
            <div class="col-md-8 col-lg-4">
              <!-- Icon Box Type 5-->
              <div class="box-icon box-icon-bordered"><span class="novi-icon icon icon-outlined icon-xs icon-dark-filled mdi mdi-cat"></span>
                <h4 class="text-danger offset-top-20">GATOS</h4>
                <p>Felinos bem dóceis, com amor e carinho de sobra para entegar a você.</p>
              </div>
            </div>
            <div class="col-md-8 col-lg-4">
              <!-- Icon Box Type 5-->
              <div class="box-icon box-icon-bordered"><span class="novi-icon icon icon-outlined icon-sm icon-dark-filled mdi mdi-dots-horizontal"></span>
                <h4 class="text-danger offset-top-20">OUTROS</h4>
                <p>Se não estiver à procura de nenhum dos animais aqui apresentados, veja aqui opções com mais detalhes.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Offers-->
      <section data-preset='{"title":"Carousel 1","category":"content, carousel","reload":true,"id":"carousel-1"}'>
        <div class="owl-carousel owl-carousel-default d-lg-none-owl-dots veil-owl-nav d-lg-owl-nav" data-items="1" data-sm-items="2" data-lg-items="3" data-xl-items="4" data-nav="true" data-dots="true" data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]">
          <div>
           
          </div>

          <div style="margin-right: 15px;">
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/0ccf3ec686c91a6dbbac733442ae1962.jpg" alt="Cachorros"/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">ADOÇÃO</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="SISCONG/cadastro_adocao.php">AJUDE-NOS</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <!-- Thumbnail Terry-->
            <div style="margin-left: 15px;">
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/arranhadorgato500.png" alt="Gato"/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">DOE</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="SISCONG/cadastro_doacao.php">AJUDE-NOS</a>
              </figcaption>
            </figure>
          </div>
        </div>
          <div>

          </div>
      </section>
      <!-- Coaches-->
      <section class="section-98 section-md-110 novi-background" data-preset='{"title":"Team","category":"content, team","reload":false,"id":"team"}'>
        <div class="container">
          <h1>VOLUNTÁRIOS</h1>
          <hr class="divider">
          <div class="row justify-content-sm-center offset-top-66">
            <div class="col-md-10 col-xl-12">
              <div class="row">
                <div class="col-md-6 col-xl-3">
                  <!-- Box Member-->
                  <div class="box-member"><img class="img-fluid" src="images/voluntariado.jpeg" alt=""/>
                    <h5 class="font-weight-bold offset-top-20"><a href="voluntarios.php">Voluntário</a> <br><small class="text-danger">Estudante</small>
                    </h5>
                    <div class="box-member-caption">
                      <div class="box-member-caption-inner">
                        <ul class="list-inline list-inline-xs">
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-facebook icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-twitter icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-google-plus icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <p class="offset-xl-top-0 text-muted"></p>
                </div>
                <div class="col-md-6 col-xl-3 offset-top-66 offset-md-top-0 offset-xl-top-0">
                  <!-- Box Member-->
                  <div class="box-member"><img class="img-fluid" src="images/2.jpg" alt=""/>
                    <h5 class="font-weight-bold offset-top-20"><a href="voluntarios.php">Voluntário</a> <br><small class="text-danger">Estudante</small>
                    </h5>
                    <div class="box-member-caption">
                      <div class="box-member-caption-inner">
                        <ul class="list-inline list-inline-xs">
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-facebook icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-twitter icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-google-plus icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <p class="offset-xl-top-0 text-muted"></p>
                </div>
                <div class="col-md-6 col-xl-3 offset-top-66 offset-md-top-0 offset-xl-top-0">
                  <!-- Box Member-->
                  <div class="box-member"><img class="img-fluid" src="images/3.jpg" alt=""/>
                    <h5 class="font-weight-bold offset-top-20"><a href="voluntarios.php">Voluntário</a> <br><small class="text-danger">Estudante</small>
                    </h5>
                    <div class="box-member-caption">
                      <div class="box-member-caption-inner">
                        <ul class="list-inline list-inline-xs">
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-facebook icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-twitter icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-google-plus icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <p class="offset-xl-top-0 text-muted"></p>
                </div>
                <div class="col-md-6 col-xl-3 offset-top-66 offset-md-top-0 offset-xl-top-0">
                  <!-- Box Member-->
                  <div class="box-member"><img class="img-fluid" src="images/4.jpg" alt=""/>
                    <h5 class="font-weight-bold offset-top-20"><a href="voluntarios.php">Voluntário</a> <br><small class="text-danger">Estudante</small>
                    </h5>
                    <div class="box-member-caption">
                      <div class="box-member-caption-inner">
                        <ul class="list-inline list-inline-xs">
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-facebook icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-twitter icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-google-plus icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <p class="offset-xl-top-0 text-muted"></p>
                </div>
                <div class="col-md-6 col-xl-3 offset-top-66 offset-md-top-0 offset-xl-top-0">
                </div>
              </div><a style='background: #2C6BDF;' class="offset-top-66 btn btn-danger" href="voluntarios.php">VER TODOS OS VULUNTÁRIOS</a>
            </div>
          </div>
        </div>
      </section>
      <!-- Testimonials-->
      <section data-preset='{"title":"Testimonials","category":"content, testimonials, parallax","reload":true,"id":"testimonials"}'>
        <div class="parallax-container" data-parallax-img="images/20658.jpg">
          <div class="parallax-content">
            <div class="bg-overlay-gray-darkest context-dark">
              <div class="container section-98 section-md-110">
                <h1>FEEDBACKS</h1>
                <hr class="divider bg-white">
                <div class="row justify-content-sm-center">
                  <div class="col-md-8">
                    <!-- Testimonials Slider v.3-->
                    <div class="owl-carousel owl-carousel-testimonials-2" data-items="1" data-nav="true" data-dots="false" data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]">
                      <div>
                        <blockquote class="quote quote-slider-3">
                          <p class="quote-body">“A organização e cuidado com cada animal, tudo muito limpinho, todos com casinha, cobertor, água, sem palavras... trabalho incrível o de vocês"</p>
                          <p class="font-weight-bold quote-author">
                            <cite class="text-normal">Alice Wilson</cite>
                          </p>
                          <p class="quote-desc text-gray">Colaboradora Regular</p>
                        </blockquote>
                      </div>
                      <div>
                        <blockquote class="quote quote-slider-3">
                          <p class="quote-body">"Trabalho maravilhoso e gratificante que enche o coração quando ajudamos”</p>
                          <p class="font-weight-bold quote-author">
                            <cite class="text-normal">Julie Smith</cite>
                          </p>
                          <p class="quote-desc text-gray">Colaboradora Regular</p>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <footer class="rodape">
          <ul class="list-inline list-inline-xs">
            <li class="list-inline-item"><a class="novi-icon icon fa fa-facebook icon-xs icon-circle icon-darkest-filled" href="https://www.facebook.com/ONGPATASEPELOS"></a></li>
            <li class="list-inline-item"><a class="novi-icon icon fa fa-instagram icon-xs icon-circle icon-darkest-filled icone-ig" href="https://www.instagram.com/ong_patas_e_pelos/?next=%2F"></a></li>
          </ul>

          <p class="offset-top-20">Patas e Pelos&copy; <span id="copyright-year"></span> |
              ETEC Prof.ª Nair Luccas Ribeiro&nbsp;&nbsp;
          </p>
      </footer>

    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Java script-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>