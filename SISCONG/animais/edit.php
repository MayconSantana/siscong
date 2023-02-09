<?php
	//verificações
	require_once('../methods/verificarLogin.php');
	verificarLogin('../logar.php');
	verificarPermUser('../index.php');

    if(!empty($_GET['id'])){
        require '../methods/bdconect.php'; 
        // Atribui uma conexão PDO
        $conexao = conexao::getInstance();
        
        $id =  addslashes($_GET['id']);

        $select = "SELECT * FROM animais WHERE ani_id=$id";
        $stm = $conexao->prepare($select);
		$retorno = $stm->execute();
        $dados = $stm->fetchAll();

        if($dados > 0){
            foreach($dados as $chave => $valor){
                $_SESSION['nome_animal'] = $valor['ani_nome'];
                $_SESSION['especie'] = $valor['ani_especie'];
                $_SESSION['raca'] = $valor['ani_raca'];
                $_SESSION['genero'] = $valor['ani_genero'];
                $_SESSION['porte'] = $valor['ani_porte'];
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Edição de Animais</title>
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
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="saveEdit.php" method="POST">
					<span class="login100-form-title p-b-26">
						<?php echo $_SESSION['nome_animal']; ?>
					</span>

					<?php 
						if(isset($_SESSION['error'])){
							print $_SESSION['error'];
							unset($_SESSION['error']);
						}

						session_write_close();
					?>

					<div class="wrap-input100 validate-input" style="margin: 30px 0 70px 0;">
						<input type="text" id="nome" name="nome" value="<?php echo $_SESSION['nome_animal'] ?>">
						<span style="font-size: 18px; margin: -30px 0; color: blue;" class="focus-input100">Altere o nome</span>
					</div>

					<div class="wrap-input100 validate-input" style="margin: 70px 0;">
						<input type="text" id="especie" name="especie" value="<?php echo $_SESSION['especie'] ?>">
						<span style="font-size: 18px; margin: -30px 0; color: blue;" class="focus-input100">Altere a espécie</span>
					</div>

					<div class="wrap-input100 validate-input" style="margin-top: 70px;">
						<input type="text" id="raca" name="raca" value="<?php echo $_SESSION['raca'] ?>">
						<span style="font-size: 18px; margin: -30px 0; color: blue;" class="focus-input100">Altere a raça</span>
					</div>

					<div class="form-group">
						<label style="color: blue;" for="genero" style="color: rgba(0,0,0,0.8);">Altere o Gênero</label>
						<select class="form-control" name="genero" id="genero">

							<?php
								if($_SESSION['genero'] == "Macho"){
									echo "<option value=''>Selecione o Gênero</option>";
									echo "<option value='Macho' selected>Macho</option>";
									echo "<option value='Fêmea'>Fêmea</option>";
								}elseif($_SESSION['genero'] == "Fêmea"){
									echo "<option value=''>Selecione o Gênero</option>";
									echo "<option value='Macho'>Macho</option>";
									echo "<option value='Fêmea' selected>Fêmea</option>";
								}
							?>

						</select>
						<span class="msg-erro"></span>
			    	</div>

					<div class="form-group">
			     	 <label style="color: blue;" for="porte" style="color: rgba(0,0,0,0.8);">Altere o Porte</label>
			      		<select class="form-control" name="porte" id="porte">
				  		<?php

							if($_SESSION['porte'] == "Pequeno"){
								echo "<option value=''>Selecione o porte do animal</option>";
								echo "<option value='Pequeno' selected>Pequeno</option>";
								echo "<option value='Médio'>Médio</option>";
								echo "<option value='Grande'>Grande</option>";
							}elseif($_SESSION['porte'] == "Médio"){
								echo "<option value=''>Selecione o porte do animal</option>";
								echo "<option value='Pequeno'>Pequeno</option>";
								echo "<option value='Médio' selected>Médio</option>";
								echo "<option value='Grande'>Grande</option>";
							}elseif($_SESSION['porte'] == "Grande"){
								echo "<option value=''>Selecione o porte do animal</option>";
								echo "<option value='Pequeno'>Pequeno</option>";
								echo "<option value='Médio'>Médio</option>";
								echo "<option value='Grande' selected>Grande</option>";
							}
							?>

				 		</select>
				  	<span class="msg-erro"></span>
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