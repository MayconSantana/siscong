<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
	<title>Cadastro de Animal</title>
	<link rel="stylesheet" type="text/css" href="../attributes/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../attributes/css/custom.css">
</head>
<body>
	<?php 
		require '../methods/bdconect.php';

		//verificações
		require_once('../methods/verificarLogin.php');
		verificarLogin('../logar.php');
		verificarPermUser('../index.php');

		// Atribui uma conexão PDO
		$conexao = conexao::getInstance();

		// Recebe os dados enviados pela submissão
		$acao  = (isset($_POST['acao'])) ? $_POST['acao'] : '';
		$id    = (isset($_POST['id'])) ? $_POST['id'] : '';
		$nome  = (isset($_POST['nome'])) ? $_POST['nome'] : '';
		$especie = (isset($_POST['especie'])) ? $_POST['especie'] : '';
		$raca = (isset($_POST['raca'])) ? $_POST['raca'] : '';
		$genero = (isset($_POST['genero'])) ? $_POST['genero'] : '';
		$porte = (isset($_POST['porte'])) ? $_POST['porte'] : '';
	
			


            if ($nome == ''): 
				$_SESSION['erro'] .= '<li style="text-align: center; color: red; margin-bottom: 10px;">Você não preencheu o Nome.</li>';
			elseif(strlen($nome) > 100):
				$_SESSION['erro'] .= '<li style="text-align: center; color: red; margin-bottom: 10px;">Nome muito grande.</li>';
		    endif;


            if ($especie == ''): 
				$_SESSION['erro'] .= '<li style="text-align: center; color: red; margin-bottom: 10px;">Você não preencheu a espécie.</li>';
			elseif(strlen($especie) > 40 || strlen($especie) <= 1):
				$_SESSION['erro'] .= '<li style="text-align: center; color: red; margin-bottom: 10px;">Espécie Inválida.</li>';
			elseif(is_numeric($especie) == true):
				$_SESSION['erro'] .= '<li style="text-align: center; color: red; margin-bottom: 10px;">Espécie Inválida.</li>';
		    endif;


			if ($raca == ''):
				$_SESSION['erro'] .= '<li style="text-align: center; color: red; margin-bottom: 10px;">Você não preencheu a Raça.</li>';
		    elseif(strlen($raca) > 40 || strlen($raca) <= 1):
				$_SESSION['erro'] .= '<li style="text-align: center; color: red; margin-bottom: 10px;">Raça inválida.</li>';
			elseif(is_numeric($raca) == true):
				$_SESSION['erro'] .= '<li style="text-align: center; color: red; margin-bottom: 10px;">Raça Inválida.</li>';
		    endif;


            if ($genero == ''): 		
				$_SESSION['erro'] .= '<li style="text-align: center; color: red; margin-bottom: 10px;">Você não preencheu o Gênero.</li>';
			endif;


            if ($porte == ''):
				$_SESSION['erro'] .= '<li style="text-align: center; color: red; margin-bottom: 10px;">Você não preencheu o Porte.</li>';
			endif;


			if(isset($_SESSION['erro'])):
				header('Location: cadastro_animais.php');
				exit();
			endif;
	
		// Verifica se foi solicitada a inclusão de dados
		if ($acao == 'incluir'):

			$sql = 'INSERT INTO animais (ani_nome, ani_especie, ani_raca, ani_genero, ani_porte, ani_status)
			VALUES(:ani_nome, :ani_especie, :ani_raca, :ani_genero, :ani_porte, 0)';
			$stm = $conexao->prepare($sql);
			$stm->bindValue(':ani_nome', $nome);
            $stm->bindValue(':ani_especie', $especie);
			$stm->bindValue(':ani_raca', $raca);
			$stm->bindValue(':ani_genero', $genero);
			$stm->bindValue(':ani_porte', $porte);
			$retorno = $stm->execute();

			if ($retorno):
				$_SESSION['sucess'] = "<li style='text-align: center; color: #19ad17; margin-bottom: 10px;'>Animal cadastrado com sucesso!</li> ";
				header('Location: cadastro_animais.php');
		    else:
		    	$_SESSION['error'] = "<li style='text-align: center; color: red; margin-bottom: 10px;'>Erro ao cadastrar animal!</li> ";
				header('Location: cadastro_animais.php');
			endif;

		endif;
			
?>
</body>
</html>