<?php
  session_start();
?>

<!DOCTYPE html>
<html class="wow-animation" lang="pt-br">
  <head>
    <title>Voluntários</title>
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
    <div class="page text-center">
      <!-- Page Head-->
      <header class="page-head slider-menu-position" data-preset='{"title":"Header with breadcrumbs","category":"header, breadcrumbs","reload":true,"id":"header-2"}'>
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar container rd-navbar-floated rd-navbar-dark" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
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
                <div class="rd-navbar-brand"><a href="home.php"><img style='border-radius: 10px;' width='45' height='45' src='images/animaisseabracando.png' alt=''/></a></div>
              </div>
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <!--Navbar Brand Mobile-->
                    <div class="rd-navbar-mobile-brand"><a href="home.php"><img width='80' height='80' src='images/animaisseabracando.png' alt=''/></a></div>
                    
                   <!-- RD Navbar Nav-->

                   <?php if(!isset($_SESSION['id'])): ?>

                    <ul class="rd-navbar-nav">
                      <li><a href="home.php"><span>Home</span></a></li>
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
                        <li><a href="home.php"><span>Home</span></a></li>
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
                          <li><a href="home.php"><span>Home</span></a></li>
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
                          <li><a href="home.php"><span>Home</span></a></li>
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
        <div class="context-dark">
          <!-- Modern Breadcrumbs-->
          <section>
            <div class="parallax-container breadcrumb-modern bg-gray-darkest" data-parallax-img="images/background-04-1920x750.jpg">
              <div class="parallax-content"> 
                <div class="container section-top-98 section-bottom-34 section-lg-bottom-66 section-lg-98 section-xl-top-110 section-xl-bottom-41">
                  <h2 class="d-none d-lg-block offset-top-30"><span class="big">Voluntários</span></h2>
                  <ul class="list-inline list-inline-dashed">
                    <li class="list-inline-item"><a href="home.php">Home</a></li>
                    <li class="list-inline-item">Voluntários
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
      </header>
      <!-- About-->
      <section class="section-98 section-md-110 novi-background" data-preset='{"title":"Content block 2","category":"content","reload":true,"id":"content-block-2"}'>
        <div class="container">
          <div class="row justify-content-sm-center">
            <div class="col-sm-10 col-md-5">
              <!-- Member block type 5-->
              <div class="member-block-type-5 inset-lg-right-20"><img src="images/malu.jpeg" width="250" height="450" alt="Malu"/>
                <div class="member-block-body"><a class="btn btn-block btn-danger" href="contato.php">Entrar em contato</a>
                  <address class="contact-info offset-top-20 offset-md-top-34">
                    <ul class="list-unstyled p">
                      <li><span class="novi-icon icon icon-xxs text-middle text-dark mdi mdi-phone"></span><a class="p big text-middle d-inline-block offset-top-0" href="tel:1832821308">(18) 3282-1308</a></li>
                    </ul>
                  </address>
                </div>
              </div>
            </div>

            <div class="col-sm-10 col-md-7 text-md-left">
              <div>
                <h1 class="text-darker">Maria Luiza (Malu)</h1>
              </div>
              <p class="text-muted offset-top-4">Voluntária / Documentação</p>
              <hr class="divider bg-blue hr-md-left-0">
              <p class="offset-top-50 text-left">Voluntária desde 2018.</p>
              <div class="offset-top-30 text-center">
                <p>
                </p>
              </div>
              <div class="offset-top-30">
                <p class="text-left">"É um prazer ajudar a ONG com o que posso, eu amo animais e adoro ver o sorriso deles ao receberem carinho". </p>
              </div>
			      </div>

      </section>

      <section class="section-98 section-md-110 novi-background" style="margin-top: -180px;" data-preset='{"title":"Content block 2","category":"content","reload":true,"id":"content-block-2"}'>
        <div class="container">
          <div class="row justify-content-sm-center">
            <div class="col-sm-10 col-md-5">
              <!-- Member block type 5-->
              <div class="member-block-type-5 inset-lg-right-20"><img src="images/lucas.jpeg" width="250" height="450" alt="Lucas"/>
                <div class="member-block-body"><a class="btn btn-block btn-danger" href="contato.php">Entrar em contato</a>
                  <address class="contact-info offset-top-20 offset-md-top-34">
                    <ul class="list-unstyled p">
                      <li><span class="novi-icon icon icon-xxs text-middle text-dark mdi mdi-phone"></span><a class="p big text-middle d-inline-block offset-top-0" href="tel:1832821308">(18) 3282-1308</a></li>
                    </ul>
                  </address>
                </div>
              </div>
            </div>

            <div class="col-sm-10 col-md-7 text-md-left">
              <div>
                <h1 class="text-darker">Lucas Almeida</h1>
              </div>
              <p class="text-muted offset-top-4">Documentação</p>
              <hr class="divider bg-blue hr-md-left-0">
              <p class="offset-top-50 text-left">Integrante desde 2022.</p>
              <div class="offset-top-30 text-center">
                <p>
                </p>
              </div>
              <div class="offset-top-30">
                <p class="text-left">"É um prazer ajudar a ONG com o que posso, eu amo animais e adoro ver o sorriso deles ao receberem carinho". </p>
              </div>
			      </div>

      </section>


      <section class="section-98 section-md-110 novi-background" style="margin-top: -180px;" data-preset='{"title":"Content block 2","category":"content","reload":true,"id":"content-block-2"}'>
        <div class="container">
          <div class="row justify-content-sm-center">
            <div class="col-sm-10 col-md-5">
              <!-- Member block type 5-->
              <div class="member-block-type-5 inset-lg-right-20"><img src="images/maycon.jpeg" width="250" height="450" alt="Maycon"/>
                <div class="member-block-body"><a class="btn btn-block btn-danger" href="contato.php">Entrar em contato</a>
                  <address class="contact-info offset-top-20 offset-md-top-34">
                    <ul class="list-unstyled p">
                      <li><span class="novi-icon icon icon-xxs text-middle text-dark mdi mdi-phone"></span><a class="p big text-middle d-inline-block offset-top-0" href="tel:1832821308">(18) 3282-1308</a></li>
                    </ul>
                  </address>
                </div>
              </div>
            </div>

            <div class="col-sm-10 col-md-7 text-md-left">
              <div>
                <h1 class="text-darker">Maycon Santana</h1>
              </div>
              <p class="text-muted offset-top-4">Programador Back-end</p>
              <hr class="divider bg-blue hr-md-left-0">
              <p class="offset-top-50 text-left">Integrante desde 2022.</p>
              <div class="offset-top-30 text-center">
                <p>
                </p>
              </div>
              <div class="offset-top-30">
                <p class="text-left">"É um prazer ajudar a ONG com o que posso, eu amo animais e adoro ver o sorriso deles ao receberem carinho". </p>
              </div>
			      </div>

      </section>


      <section class="section-98 section-md-110 novi-background" style="margin-top: -180px;" data-preset='{"title":"Content block 2","category":"content","reload":true,"id":"content-block-2"}'>
        <div class="container">
          <div class="row justify-content-sm-center">
            <div class="col-sm-10 col-md-5">
              <!-- Member block type 5-->
              <div class="member-block-type-5 inset-lg-right-20"><img src="images/Marco.jpeg" width="250" height="450" alt="Marco"/>
                <div class="member-block-body"><a class="btn btn-block btn-danger" href="contato.php">Entrar em contato</a>
                  <address class="contact-info offset-top-20 offset-md-top-34">
                    <ul class="list-unstyled p">
                      <li><span class="novi-icon icon icon-xxs text-middle text-dark mdi mdi-phone"></span><a class="p big text-middle d-inline-block offset-top-0" href="tel:1832821308">(18) 3282-1308</a></li>
                    </ul>
                  </address>
                </div>
              </div>
            </div>

            <div class="col-sm-10 col-md-7 text-md-left">
              <div>
                <h1 class="text-darker">Marco Aurélio</h1>
              </div>
              <p class="text-muted offset-top-4">Programador Front-end</p>
              <hr class="divider bg-blue hr-md-left-0">
              <p class="offset-top-50 text-left">Integrante desde 2022.</p>
              <div class="offset-top-30 text-center">
                <p>
                </p>
              </div>
              <div class="offset-top-30">
                <p class="text-left">"É um prazer ajudar a ONG com o que posso, eu amo animais e adoro ver o sorriso deles ao receberem carinho". </p>
              </div>
			      </div>

      </section>

      <section class="section-98 section-md-110 novi-background" style="margin-top: -180px;" data-preset='{"title":"Content block 2","category":"content","reload":true,"id":"content-block-2"}'>
        <div class="container">
          <div class="row justify-content-sm-center">
            <div class="col-sm-10 col-md-5">
              <!-- Member block type 5-->
              <div class="member-block-type-5 inset-lg-right-20"><img src="images/Maria Eduarda.jpeg" width="250" height="450" alt="Maria Eduarda"/>
                <div class="member-block-body"><a class="btn btn-block btn-danger" href="contato.php">Entrar em contato</a>
                  <address class="contact-info offset-top-20 offset-md-top-34">
                    <ul class="list-unstyled p">
                      <li><span class="novi-icon icon icon-xxs text-middle text-dark mdi mdi-phone"></span><a class="p big text-middle d-inline-block offset-top-0" href="tel:1832821308">(18) 3282-1308</a></li>
                    </ul>
                  </address>
                </div>
              </div>
            </div>

            <div class="col-sm-10 col-md-7 text-md-left">
              <div>
                <h1 class="text-darker">Maria Eduarda</h1>
              </div>
              <p class="text-muted offset-top-4">Documentação</p>
              <hr class="divider bg-blue hr-md-left-0">
              <p class="offset-top-50 text-left">Integrante desde 2022.</p>
              <div class="offset-top-30 text-center">
                <p>
                </p>
              </div>
              <div class="offset-top-30">
                <p class="text-left">"É um prazer ajudar a ONG com o que posso, eu amo animais e adoro ver o sorriso deles ao receberem carinho". </p>
              </div>
			      </div>

      </section>


      <section class="section-98 section-md-110 novi-background" style="margin-top: -180px;" data-preset='{"title":"Content block 2","category":"content","reload":true,"id":"content-block-2"}'>
        <div class="container">
          <div class="row justify-content-sm-center">
            <div class="col-sm-10 col-md-5">
              <!-- Member block type 5-->
              <div class="member-block-type-5 inset-lg-right-20"><img src="images/tiago.jpeg" width="250" height="450" alt="Tiago"/>
                <div class="member-block-body"><a class="btn btn-block btn-danger" href="contato.php">Entrar em contato</a>
                  <address class="contact-info offset-top-20 offset-md-top-34">
                    <ul class="list-unstyled p">
                      <li><span class="novi-icon icon icon-xxs text-middle text-dark mdi mdi-phone"></span><a class="p big text-middle d-inline-block offset-top-0" href="tel:1832821308">(18) 3282-1308</a></li>
                    </ul>
                  </address>
                </div>
              </div>
            </div>

            <div class="col-sm-10 col-md-7 text-md-left">
              <div>
                <h1 class="text-darker">Tiago Pereira</h1>
              </div>
              <p class="text-muted offset-top-4">Analista de Sistema</p>
              <hr class="divider bg-blue hr-md-left-0">
              <p class="offset-top-50 text-left">Integrante desde 2022.</p>
              <div class="offset-top-30 text-center">
                <p>
                </p>
              </div>
              <div class="offset-top-30">
                <p class="text-left">"É um prazer ajudar a ONG com o que posso, eu amo animais e adoro ver o sorriso deles ao receberem carinho". </p>
              </div>
			      </div>

      </section>

      <!-- Offers-->
      <section class="section-bottom-66 section-xl-bottom-0" data-preset='{"title":"Carousel 2","category":"content, carousel","reload":true,"id":"carousel-2"}'>
        <div class="owl-carousel owl-carousel-default veil-lg-owl-dots veil-owl-nav reveal-lg-owl-nav" data-items="1" data-sm-items="2" data-lg-items="3" data-xl-items="4" data-nav="true" data-dots="true" data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]">
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/img-gato2-clube-do-gato.jpg" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title"></h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="sobre.php">Mais informações</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/chihuahua.jpg" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title"></h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="sobre.php">Mais informações</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/Lil-Bub.jpg" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title"></h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="sobre.php">Mais informações</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/cute-french-bulldog-with-cherry-eyes-laying-indoor-650x650.jpg" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title"></h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="sobre.php">Mais informações</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/imagenes-notas-web-Dic2019-01-600x600.png" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title"></h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="sobre.php">Mais informações</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/como_escolher_um_cachorro_no_canil_21320_600.jpg" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title"></h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="sobre.php">Mais informações</a>
              </figcaption>
            </figure>
          </div>
        </div>
      </section>
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