<?php
  require_once('SISCONG/methods/verificarLogin.php');
  verificarLogin('SISCONG/logar.php');
  verificarPermUser('home.php');
?>

<!DOCTYPE html>
<html class="wow-animation" lang="pt-br">
  <head>
    <title>Área ADM</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="images/logo_ong.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu:400,400italic,500,700,700italic">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;} .container-nav{width:100%; text-align: center;} .func-adm ul li{ list-style-type: none; font-size: 20px;} .func-adm ul li a{text-transform: uppercase;} .func-adm ul li a:hover{ color: blue; transition: all .3s;}</style>
  </head>
  <body>
    <!-- IE Panel-->
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="page-loader page-loader-variant-1">
      <div><img style='border-radius: 15px;' width='500' height='500' src='images/animaisseabracando.png' alt='Logo'/>
        <div class="offset-top-41 text-center">
          <div class="spinner"></div>
        </div>
      </div>
    </div>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
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
                <div class="rd-navbar-brand"><a href="home.php"><img style='border-radius: 10px;' width='45' height='45' src='images/animaisseabracando.png' alt='Logo'/></a></div>
              </div>
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <!--Navbar Brand Mobile-->
                    <div class="rd-navbar-mobile-brand"><a href="home.php"><img width='100' height='100' src='images/animaisseabracando.png' alt=''/></a></div>
            
                    <!-- RD Navbar Nav-->
                        
                      <?php

                      if(isset($_SESSION['perm'])):
                      
                      if($_SESSION['perm'] == 1):
                      
                      ?>

                        <ul class="rd-navbar-nav">
                          <li><a href="home.php"><span>Home</span></a></li>
                          <li><a href="sobre.php"><span>Sobre</span></a></li>
                          <li><a href="SISCONG/cadastro_adocao.php"><span>Adote</span></a></li>
                          <li><a href="SISCONG/cadastro_doacao.php"><span>Faça uma doação</span></a></li>
                          <li><a href="contato.php"><span>Contate-nos</span></a></li>
                          <li class="active"><a href="adm.php"><span>Área do Funcionário</span></a></li>
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
                          <li class="active"><a href="adm.php"><span>Área do ADM</span></a></li>
                          <li><a href="SISCONG/methods/logout.php"><span>Sair</span></a></li>
                        </ul>

                      <?php endif; endif; endif;  ?>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
        <div class="context-dark">
          <!-- Modern Breadcrumbs-->
          <section>
            <div class="parallax-container breadcrumb-modern bg-gray-darkest" data-parallax-img="images/.jpg">
              <div class="parallax-content"> 
                <div class="container section-top-98 section-bottom-34 section-lg-bottom-66 section-lg-98 section-xl-top-110 section-xl-bottom-41">
                      <h2 class="d-none d-lg-block offset-top-30"><span class="big"><?php if($_SESSION['perm'] == 1): ?> Área do Funcionário <?php else: ?> Área do ADM <?php endif; ?></span></h2>
                  <ul class="list-inline list-inline-dashed">
                    <li class="list-inline-item"><a href="home.php">Home</a></li>
                    <li class="list-inline-item"> <?php if($_SESSION['perm'] == 1): ?>Área do Funcionário <?php else: ?>  Área do ADM <?php endif; ?>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
      </header>
      <!-- Heading Style-->
                      <section class="section novi-background section-66 section-md-top-110">
        <div class="container">
          <h2>FUNÇÕES DISPONÍVEIS</h2>
          <hr class="divider">
              
              <div class="container-nav">
               
                <nav class="func-adm">

                  <?php

                    if($_SESSION['perm'] == 1):

                  ?>

                  <ul>
                    <li><a href="SISCONG/animais/cadastro_animais.php"><span>Cadastrar Animal</span></a></li>
                    <li><a href="SISCONG/animais/listagem_animais.php"><span>Lista de Animais</span></a></li>
                    <li><a href="SISCONG/listagem_adocao.php"><span>Lista de Adoções</span></a></li>
                    <li><a href="SISCONG/listagem_doacao.php"><span>Lista de Doações</span></a></li>
                  </ul>

                  <?php 
                    else:
                  ?>

                  <ul>
                    <li><a href="SISCONG/cadastro_user.php"><span>Cadastrar Usuário</span></a></li>
                    <li><a href="SISCONG/animais/cadastro_animais.php"><span>Cadastrar Animal</span></a></li>

                    <hr style="background: #d9d9d9;">

                    <li><a href="SISCONG/listagem_usuarios.php"><span>Lista de Usuários</span></a></li>
                    <li><a href="SISCONG/animais/listagem_animais.php"><span>Lista de Animais</span></a></li>
                    <li><a href="SISCONG/listagem_adocao.php"><span>Lista de Adoções</span></a></li>
                    <li><a href="SISCONG/listagem_doacao.php"><span>Lista de Doações</span></a></li>
                  </ul>
                </nav>

                  <?php
                    endif;
                  ?>
                  
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