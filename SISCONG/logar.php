<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
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
<body onload="load()">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="methods/login.php" method="POST">
					<span class="login100-form-title p-b-26">
						Bem vindo!
					</span>
					<a href="../home.php">
					<span class="login100-form-title p-b-48">
						<img style="border-radius: 25px; height:100px;"  src="attributes/css/img/ong.png" alt="ONG">
					</span>
					</a>

					<?php
						if(isset($_SESSION['erro'])){
							print $_SESSION['erro'];
							unset($_SESSION['erro']);
						}
						session_write_close();
					?>

					<div class="wrap-input100 validate-input" data-validate = "Email inválido">
						<input class="input100" type="text" id="email" name="email">
						<span class="focus-input100" data-placeholder="Digite seu email aqui"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Insira a senha">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" id="senha" name="senha">
						<span class="focus-input100" data-placeholder="Digite sua senha aqui"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn" name="login">
								Login
							</button>
						</div>
					</div>



					<div class="text-center m-t-40">
						<p>
							<a class="txt2" href="retomar_senha.php">
								Esqueceu sua senha?
							</a>
						</p>

						<span class="txt1">
							Não tem uma conta?
						</span>

						<a class="txt2" href="cadastro_user.php">
							Cadastre-se
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
	<script src="attributes/js/classLogin.js"></script>

</body>
</html>