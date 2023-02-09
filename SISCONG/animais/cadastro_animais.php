<?php
	//verificações
	require_once('../methods/verificarLogin.php');
	verificarLogin('../notlogin.php');
	verificarPermUser('../index.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro de Animais</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" href="../../images/logo_ong.png" type="image/x-icon">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../attributes/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../attributes/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../attributes/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../attributes/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../attributes/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../attributes/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../attributes/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../attributes/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../attributes/css/util.css">
	<link rel="stylesheet" type="text/css" href="../attributes/css/main.css">
<!--===============================================================================================-->

</head>
<body onload="load()">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="action_animais.php" method="POST">
					<span class="login100-form-title p-b-26">
						Cadastre o animal
					</span>

					<?php
						if(isset($_SESSION['erro'])){
							print $_SESSION['erro'];
							unset($_SESSION['erro']);
						}elseif(isset($_SESSION['sucess'])){
							print $_SESSION['sucess'];
							unset($_SESSION['sucess']);
						}elseif(isset($_SESSION['error'])){
							print $_SESSION['error'];
							unset($_SESSION['error']);
						}
						
						session_write_close();
					?>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" id="nome" name="nome">
						<span class="focus-input100" data-placeholder="Digite o nome aqui"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" id="especie" name="especie">
						<span class="focus-input100" data-placeholder="Digite a espécie aqui"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" id="raca" name="raca">
						<span class="focus-input100" data-placeholder="Digite a raça aqui"></span>
					</div>

					<div class="form-group">
						<label for="genero" style="color: rgba(0,0,0,0.8);">Gênero</label>
							<select class="form-control" name="genero" id="genero">
								<option value="">Selecione o Gênero</option>
								<option value="Macho">Macho</option>
								<option value="Fêmea">Fêmea</option>
							</select>
						<span class="msg-erro"></span>
			    	</div>

					<div class="form-group">
			     	 <label for="porte" style="color: rgba(0,0,0,0.8);">Porte</label>
			      		<select class="form-control" name="porte" id="porte">
				  			<option value="">Selecione o porte do animal</option>
				  			<option value="Pequeno">Pequeno</option>
							<option value="Médio">Médio</option>
							<option value="Grande">Grande</option>
				  		</select>
				  	<span class="msg-erro"></span>
			    	</div>

					<input type="hidden" name="acao" value="incluir">
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn" name="login">
								Cadastrar
							</button>
						</div>
					</div>
				</form>

				<div class="container-login100-form-btn">
					<a href="../../adm.php">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn" name="login">
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
	<script src="../attributes/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../attributes/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../attributes/vendor/bootstrap/js/popper.js"></script>
	<script src="../attributes/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../attributes/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../attributes/vendor/daterangepicker/moment.min.js"></script>
	<script src="../attributes/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../attributes/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../attributes/js/main.js"></script>
	<script type="text/javascript" src="../attributes/js/custom.js"></script>
	<script src="../attributes/js/classCadastro_animal.js"></script>

</body>
</html>