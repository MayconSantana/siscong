<?php
	session_start();

	if(isset($_SESSION['perm'])):
		if($_SESSION['perm'] < 1):
			session_destroy();
		endif;
	else:
		session_destroy();
	endif;
		

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Crie sua conta</title>
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
				<form class="login100-form validate-form" action="action_usuario.php" method="POST"> <!-- onload="load()" -->
					<span class="login100-form-title p-b-26">
						Crie sua conta
					</span>
					<a href="../home.php">
					<span class="login100-form-title p-b-48">
						<img style="border-radius: 25px; height:100px;"  src="attributes/css/img/ong.png" alt="ONG">
					</span>
					</a>

					<?php
						if(isset($_SESSION['sucess'])){
							print $_SESSION['sucess'];
							unset($_SESSION['sucess']);
						}elseif(isset($_SESSION['error'])){
							print $_SESSION['error'];
							unset($_SESSION['error']);
						}

						session_write_close();
					?>

					<div class="wrap-input100 validate-input" data-validate = "Campo Vazio">
						<input class="input100" type="text" id="nome" name="nome" value="<?php if(isset($_SESSION['nome--'])){echo $_SESSION['nome--'];}?>">
						<span class="focus-input100" data-placeholder="Digite seu nome aqui*"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Campo Vazio">
						<input class="input100" type="text" id="rg" name="rg" maxlength="16" value="<?php if(isset($_SESSION['rg--'])){echo $_SESSION['rg--'];}?>">
						<span class="focus-input100" data-placeholder="Digite seu RG aqui*"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Campo Vazio">
						<input class="input100" type="text" id="cpf" name="cpf" maxlength="14" value="<?php if(isset($_SESSION['cpf--'])){echo $_SESSION['cpf--'];}?>">
						<span class="focus-input100" data-placeholder="Digite seu CPF aqui*"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Campo Vazio">
						<label for="data" style="color: rgba(0,0,0,0.8);">Data de Nascimento:</label>
						<input class="input100" type="date" id="data_nascimento" name="data_nascimento" maxlength="8" value="<?php if(isset($_SESSION['dtnasc--'])){echo $_SESSION['dtnasc--'];}?>">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Campo Vazio">
						<input class="input100" type="text" id="celular" name="celular" maxlength="13" value="<?php if(isset($_SESSION['cel--'])){echo $_SESSION['cel--'];}?>">
						<span class="focus-input100" data-placeholder="Digite seu Celular aqui*"></span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" id="telefone" name="telefone" maxlength="12" value="<?php if(isset($_SESSION['tel--'])){echo $_SESSION['tel--'];}?>">
						<span class="focus-input100" data-placeholder="Digite seu Telefone aqui"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Campo Vazio">
						<input class="input100" type="text" id="endereco" name="endereco" value="<?php if(isset($_SESSION['endereco--'])){echo $_SESSION['endereco--'];}?>">
						<span class="focus-input100" data-placeholder="Digite seu Endereço aqui*"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Campo Vazio">
						<input class="input100" type="text" id="numero" name="numero" maxlength="8" value="<?php if(isset($_SESSION['numero--'])){echo $_SESSION['numero--'];}?>">
						<span class="focus-input100" data-placeholder=" Nº da Casa*"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Campo Vazio">
						<input class="input100" type="text" id="bairro" name="bairro" value="<?php if(isset($_SESSION['bairro--'])){echo $_SESSION['bairro--'];}?>">
						<span class="focus-input100" data-placeholder="Digite seu Bairro aqui"></span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" id="complemento" name="complemento" value="<?php if(isset($_SESSION['complemento--'])){echo $_SESSION['complemento--'];}?>">
						<span class="focus-input100" data-placeholder="Digite seu Complemento aqui"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Campo Vazio">
						<input class="input100" type="text" id="email" name="email" value="<?php if(isset($_SESSION['email--'])){echo $_SESSION['email--'];}?>">
						<span class="focus-input100" data-placeholder="Digite seu melhor E-mail aqui*"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Campo Vazio">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" id="senha" name="senha">
						<span class="focus-input100" data-placeholder="Digite sua senha aqui*"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Campo Vazio">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" id="confirmsenha" name="confirmsenha">
						<span class="focus-input100" data-placeholder="Confirme sua senha aqui*"></span>
					</div>

					<?php
					if(isset($_SESSION['id'])){
						if($_SESSION['perm'] == 2){ ?>
					
						<div class="wrap-input100 validate-input">
							<h4 style="font-size: 20px; color: rgba(0,0,0,0.8); text-align: center; margin: 15% 0 10% 0;">Nível de acesso:</h4>
						
							<div style="display: flex; justify-content: space-between;">
								<label for="user" style="color: rgba(0,0,0,0.8);">Usuário
								<input type="radio" id="user" name="perm" value="0">
								</label>

								<label for="func" style="color: rgba(0,0,0,0.8);">Funcionário
								<input type="radio" id="func" name="perm" value="1">
								</label>

								<label for="adm" style="color: rgba(0,0,0,0.8);">ADM
								<input type="radio" id="adm" name="perm" value="2">
								</label>
								<span class='msg-erro'></span>
							</div>

						</div>

					<?php }} ?>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn" name="login">
								Cadastre-se
							</button>
						</div>
					</div>
				</form>

				<div class="container-login100-form-btn">
					<a href="logar.php">
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
	<script src="attributes/js/classCadastro.js"></script>

</body>
</html>