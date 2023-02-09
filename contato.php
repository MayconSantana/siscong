<?php
  session_start();
?>

<!DOCTYPE html>
<html class="wow-animation" lang="pt-br">
  <head>
    <title>Contato</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="images/logo_ong.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu:400,400italic,500,700,700italic">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;} .btn-mandar:hover{background: #434343; color: #fff;}</style>
  </head>
  <body>
    <!-- IE Panel-->
  
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
      <header class="page-head slider-menu-position">
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
                    <div class="rd-navbar-mobile-brand"><a href="home.php"><img width='100' height='100' src='images/animaisseabracando.png' alt=''/></a></div>
                    
                    <!-- RD Navbar Nav-->
                    <?php if(!isset($_SESSION['id'])): ?>

                      <ul class="rd-navbar-nav">
                        <li><a href="home.php"><span>Home</span></a></li>
                        <li><a href="sobre.php"><span>Sobre</span></a></li>
                        <li><a href="SISCONG/cadastro_adocao.php"><span>Adote</span></a></li>
                        <li><a href="SISCONG/cadastro_doacao.php"><span>Faça uma doação</span></a></li>
                        <li class="active"><a href="contato.php"><span>Contate-nos</span></a></li>
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
                          <li class="active"><a href="contato.php"><span>Contate-nos</span></a></li>
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
                            <li class="active"><a href="contato.php"><span>Contate-nos</span></a></li>
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
                            <li class="active"><a href="contato.php"><span>Contate-nos</span></a></li>
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
            <div class="parallax-container breadcrumb-modern bg-gray-darkest" data-parallax-img="images/imagem.jsp">
              <div class="parallax-content"> 
                <div class="container section-top-98 section-bottom-34 section-lg-bottom-66 section-lg-98 section-xl-top-110 section-xl-bottom-41">
                  <h2 class="d-none d-lg-block offset-top-30"><span class="big">Contate-nos</span></h2>
                  <ul class="list-inline list-inline-dashed">
                    <li class="list-inline-item"><a href="home.php">Home</a></li>
                    <li class="list-inline-item">Contate-nos
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
      </header>
      <section class="section-110 text-xl-left novi-background" data-preset='{"title":"Contact form","category":"content, form","reload":true,"id":"form"}'>
        <div class="container">
          <div class="row justify-content-sm-center justify-content-sm-center">
            <div class="col-xl-4">
              <div class="inset-xl-right-80">
                <h3 class="font-weight-bold">Como nos encontrar</h3>
                <hr class="divider hr-xl-left-0">
                <p class="offset-top-41 offset-xl-top-50">Estamos localizados no centro da cidade e é fácil chegar até nós com qualquer tipo de transporte público. Use nosso mapa para encontrar.</p>
                <address class="contact-info offset-top-30 offset-xl-top-50">
                  <div class="h6 text-uppercase font-weight-bold text-danger letter-space-none offset-top-none">Teodoro Sampaio</div>
                  <p>Parque industrial, Teodoro Sampaio.</p>
                  <dl class="offset-top-0">
                    <dt>Telefone:</dt>
                    <dd><a href="tel:#">(18) 3282-1308.</a></dd>
                  </dl>
                  <dl>
                    <dt>E-mail:</dt>
                    <dd><a href="mailto:#">pataspelosong@gmail.com</a></dd>
                  </dl>
                </address>
               
              </div>
            </div>
            <div class="col-md-8 offset-top-66 offset-xl-top-0">
              <h3 class="font-weight-bold">Entrar em contato</h3>
              <hr class="divider hr-xl-left-0">
              <!-- RD Mailform-->
              <form class="rd-mailform text-left offset-top-50" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="row novi-excluded">
                  <div class="col-xl-6">
                    <div class="form-group">
                      <label class="form-label form-label-outside" for="contact-us-name">Nome Completo:</label>
                      <input class="form-control" id="contact-us-name" type="text" name="name" data-constraints="@Required">
                    </div>
                  </div>
                  <div class="col-xl-6 offset-top-20 offset-xl-top-0">
                    <div class="form-group">
                      <label class="form-label form-label-outside" for="contact-us-email">E-Mail:</label>
                      <input class="form-control" id="contact-us-email" type="email" name="email" data-constraints="@Required @Email">
                    </div>
                  </div>
                  <div class="col-xl-12 offset-top-20">
                    <div class="form-group">
                      <label class="form-label form-label-outside" for="contact-us-message">Mensagem:</label>
                      <textarea class="form-control" id="contact-us-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
                <div class="group-sm text-center text-xl-left offset-top-30">
                  <button class="btn btn-mandar btn-danger" type="submit">Mandar</button>
                  <button class="btn btn-default" type="reset">Redefinir</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- Page Footer-->
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