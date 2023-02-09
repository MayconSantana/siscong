<?php
	require_once('../methods/verificarLogin.php');
	verificarLogin('../logar.php');
	verificarPermFunc('../index.php');

    if(!empty($_GET['id'])){
        require '../methods/bdconect.php'; 
        // Atribui uma conexão PDO
        $conexao = conexao::getInstance();
        
        $id =  addslashes($_GET['id']);

        $select = "SELECT * FROM usuario WHERE usu_id=$id";
        $result = $conexao->query($select);
        $dados = $result->fetchAll();

        if($dados > 0){
            foreach($dados as $chave => $valor){
                $_SESSION['nome_usuario'] = $valor['usu_nome'];
                $_SESSION['rg'] = $valor['usu_rg'];
                $_SESSION['cpf'] = $valor['usu_cpf'];
                $_SESSION['data_nascimento'] = $valor['usu_dtnasc'];
                $_SESSION['celular'] = $valor['usu_celular'];
				$_SESSION['telefone'] = $valor['usu_telefone'];
				$_SESSION['endereco'] = $valor['usu_endereco'];
				$_SESSION['bairro'] = $valor['usu_bairro'];
				$_SESSION['numero'] = $valor['usu_numero'];	
				$_SESSION['complemento'] = $valor['usu_complemento'];	
				$_SESSION['email'] = $valor['usu_email'];	
				$_SESSION['senha'] = $valor['usu_senha'];	
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Edição de Usuário</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../attributes/css/img/ong.png"/>
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
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="saveEdit.php" method="POST">
					<span class="login100-form-title p-b-26">
						<?php echo $_SESSION['nome_usuario']; ?>
					</span>

					<?php 
						if(isset($_SESSION['error'])){
							print $_SESSION['error'];
							unset($_SESSION['error']);
						}

						session_write_close();
					?>

					<div class="wrap-input100 validate-input" style="margin: 30px 0 70px 0;">
						<input type="text" id="nome" name="nome" value="<?php echo $_SESSION['nome_usuario'] ?>">
						<span style="font-size: 18px; margin: -30px 0; color: blue;" class="focus-input100">Altere o nome</span>
					</div>

					<div class="wrap-input100 validate-input" style="margin: 70px 0;">
						<input type="text" id="rg" name="rg" maxlength="11" value="<?php echo $_SESSION['rg'] ?>">
						<span style="font-size: 18px; margin: -30px 0; color: blue;" class="focus-input100">Altere o RG</span>
					</div>

					<div class="wrap-input100 validate-input" style="margin-top: 70px;">
						<input type="text" id="cpf" name="cpf" maxlength="14" value="<?php echo $_SESSION['cpf'] ?>">
						<span style="font-size: 18px; margin: -30px 0; color: blue;" class="focus-input100">Altere o CPF</span>
					</div>

                    <div class="wrap-input100 validate-input" style="margin: 70px 0;">
						<input type="date" id="data_nascimento" maxlength="10" name="data_nascimento" value="<?php echo $_SESSION['data_nascimento'] ?>">
						<span style="font-size: 18px; margin: -30px 0; color: blue;" class="focus-input100">Altere a Data de Nascimento</span>
					</div>

                    <div class="wrap-input100 validate-input" style="margin-top: 70px;">
						<input type="text" id="celular" name="celular" maxlength="13" value="<?php echo $_SESSION['celular'] ?>">
						<span style="font-size: 18px; margin: -30px 0; color: blue;" class="focus-input100">Altere o Celular</span>
					</div>

                    <div class="wrap-input100" style="margin: 60px 0 70px 0;">
						<input type="text" id="telefone" name="telefone" maxlength="12" value="<?php echo $_SESSION['telefone'] ?>">
						<span style="font-size: 18px; margin: -30px 0; color: blue;" class="focus-input100">Altere o Telefone</span>
					</div>

                    <div class="wrap-input100 validate-input" style="margin: 30px 0 70px 0;">
						<input type="text" id="endereco" name="endereco" value="<?php echo $_SESSION['endereco'] ?>">
						<span style="font-size: 18px; margin: -30px 0; color: blue;" class="focus-input100">Altere o Endereço</span>
					</div>

                    <div class="wrap-input100 validate-input" style="margin: 30px 0 70px 0;">
						<input type="text" id="numero" name="numero" maxlength="8" value="<?php echo $_SESSION['numero'] ?>">
						<span style="font-size: 18px; margin: -30px 0; color: blue;" class="focus-input100">Altere o Nº</span>
					</div>

                    <div class="wrap-input100 validate-input" style="margin: 30px 0 70px 0;">
						<input type="text" id="bairro" name="bairro" value="<?php echo $_SESSION['bairro'] ?>">
						<span style="font-size: 18px; margin: -30px 0; color: blue;" class="focus-input100">Altere o Bairro</span>
					</div>

                    <div class="wrap-input100" style="margin: 30px 0 70px 0;">
						<input type="text" id="complemento" name="complemento" value="<?php echo $_SESSION['complemento'] ?>">
						<span style="font-size: 18px; margin: -30px 0; color: blue;" class="focus-input100">Altere o Complemento</span>
					</div>

                    <div class="wrap-input100 validate-input" style="margin: 30px 0 70px 0;">
						<input type="email" id="email" name="email" value="<?php echo $_SESSION['email'] ?>">
						<span style="font-size: 18px; margin: -30px 0; color: blue;" class="focus-input100">Altere o E-mail</span>
					</div>

                    <div class="wrap-input100 validate-input" style="margin: 30px 0 70px 0;">
                        <span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input type="password" id="senha" name="senha" value="<?php echo $_SESSION['senha'] ?>">
						<span style="font-size: 18px; margin: -30px 0; color: blue;" class="focus-input100">Altere a Senha</span>
					</div>

                    <div class="wrap-input100 validate-input" style="margin: 30px 0 70px 0;">
                        <span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input type="password" id="confirmsenha" name="confirmsenha" value="<?php echo $_SESSION['senha'] ?>">
						<span style="font-size: 18px; margin: -30px 0; color: blue;" class="focus-input100">Confirme a Senha</span>
					</div>


					<input type="hidden" name="acao" value="incluir">
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<input type="hidden" name="id" value="<?php echo $id ?>">
							<button type="submit" class="login100-form-btn" name="update">
								Salvar
							</button>
						</div>
					</div>
				</form>

				<div class="container-login100-form-btn">
					<a href="javascript:history.back();">
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

</body>
</html>