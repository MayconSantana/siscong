<?php
	require_once('methods/verificarLogin.php');
	verificarLogin('logar.php');

	require 'methods/bdconect.php';
	// Atribui uma conexão PDO
	$conexao = conexao::getInstance();

	$query = 'SELECT * FROM tipo_doacao';
	$stm = $conexao->prepare($query);
	$retorno = $stm->execute();
	$dados = $stm->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Doação</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" href="../images/logo_ong.png" type="image/x-icon">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="attributes/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="attributes/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="attributes/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="attributes/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="attributes/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="attributes/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="attributes/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="attributes/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="attributes/css/util.css">
	<link rel="stylesheet" type="text/css" href="attributes/css/main.css">
<!--===============================================================================================-->

</head>
<body>

<?php

        // Recebe os dados enviados pela submissão
		$acao  = (isset($_POST['acao'])) ? $_POST['acao'] : '';
		$id    = (isset($_POST['id'])) ? $_POST['id'] : '';
		$tipo_doacao  = (isset($_POST['tipo_doacao'])) ? $_POST['tipo_doacao'] : '';

        // Atribui uma conexão PDO
        $conexao = conexao::getInstance();

		// Valida os dados recebidos
        
        if($tipo_doacao == ''):
            $_SESSION['erro'] .= '<li style="text-align: center; color: red; margin-bottom: 15px;">Você não selecionou nada :(</li>';
        endif;

		if(($tipo_doacao != "") && ($tipo_doacao < 1 || $tipo_doacao > 4)):
			$_SESSION['erro'] .= '<li style="text-align: center; color: red; margin-bottom: 15px;">Não faça isso.</li>';
		endif;

		if(isset($_SESSION['erro'])):
			header('Location: cadastro_doacao.php');
		endif;


    ?>

        <div class="limiter">
		    <div class="container-login100">
			    <div class="wrap-login100">
				    <form class="login100-form validate-form" action="action_dtd.php" method="POST">

					<span class="login100-form-title p-b-26">
					<?php
                        if($tipo_doacao == 1){
                            echo "Dinheiro";
                        }elseif($tipo_doacao == 2){
                            echo "Ração ";
                        }elseif($tipo_doacao == 3){
                            echo "Medicamentos";
                        }else{
							echo "Outros";
						}
                        ?>	
					</span>
	
				    <div class="form-group">

                    <div class="wrap-input100 validate-input" style="margin-bottom: -20px;">
						<input class="input100" type="text" id="valor" name="valor" required maxlength="60">

						<?php 
						if($tipo_doacao == 1){
                            echo "<span class='focus-input100' data-placeholder='Informe o valor a ser doado'></span>";
                        }elseif($tipo_doacao == 2){
                            echo "<span class='focus-input100' data-placeholder='Informe a quantidade a ser doada'></span>";
                        }elseif($tipo_doacao == 3){
                            echo "<span class='focus-input100' data-placeholder='Informe o nome e a quantidade'></span>";
                        }else{
							echo "<span class='focus-input100' data-placeholder='Informe o que você vai doar'></span>";
						}
                        ?>	

						
					</div>
						<span class='msg-erro msg-valor'></span>
                  
				   <?php
				  	if($tipo_doacao == 1):
				   ?>

				  <div style="text-align: center; margin: 50px 0 -20px 0;">
						<h3 style="font-size: 15px;"><b>Chave Pix:</b> CNPJ: 22.486.392/0001-83</h3>
				  </div>
                </div>
					
					<?php
						endif;
					?>

                <br>
				<input type="hidden" name="acao" value="incluir">
                <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
                            	<input type="hidden" name="tipo_doacao" value="<?php echo $tipo_doacao ?>"> <!-- CAMPO HIDDEN  -->
								<button type="submit" class="login100-form-btn" name="login">
									Doar
								</button>
                            
						</div>
						</div>

                    <div class="container-login100-form-btn">
					<a href="cadastro_doacao.php">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
								<span class="login100-form-btn">
								Voltar
								</span>
						</div>
					</a>
				</div>
	        </form>
		</div>
	</div>
</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="attributes/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="attributes/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="attributes/vendor/bootstrap/js/popper.js"></script>
	<script src="attributes/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="attributes/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="attributes/vendor/daterangepicker/moment.min.js"></script>
	<script src="attributes/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="attributes/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="attributes/js/main.js"></script>
	<script type="text/javascript" src="attributes/js/custom.js"></script>

</body>
</html>