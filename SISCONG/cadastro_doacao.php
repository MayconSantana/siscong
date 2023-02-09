<?php
	require_once('methods/verificarLogin.php');
	verificarLogin('notlogin.php');

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
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="action_doacao.php" method="POST">
					<span class="login100-form-title p-b-26">
						O que você vai doar?
					</span>

					<?php
						if(isset($_SESSION['erro'])){
							print $_SESSION['erro'];
							unset($_SESSION['erro']);
						}elseif(isset($_SESSION['sucess'])){
							print $_SESSION['sucess'];
							unset($_SESSION['sucess']);
						}
						session_write_close();
					?>

					<div class="form-group">
                        <select class="form-control" name="tipo_doacao" id="tipo_doacao">
                            <option value="">Selecione</option>

                        <?php
                            if(count($dados) > 0){
                                
                            foreach($dados as $chave => $valor){
                            echo
                            "<option value=".$valor['td_id'].">".$valor['td_nome']."</option>";
                            }
                            }else{
                                echo "<p>Você não selecionou o que quer doar :(</p>";
                            }	
				        ?>

                  </select>
						<span class="msg-erro"></span>
			    	</div>

					<input type="hidden" name="acao" value="incluir">
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn" name="login">
								Continuar
							</button>
						</div>
					</div>
				</form>

				<div class="container-login100-form-btn">
					<a href="../home.php">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Voltar
							</button>
						</div>
					</a>
				</div>
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