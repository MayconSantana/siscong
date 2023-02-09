<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
	<title>Adoção</title>
	<link rel="stylesheet" type="text/css" href="attributes/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="attributes/css/custom.css">
</head>
<body>
	<?php 
		session_start();
		require 'methods/bdconect.php';

		// Atribui uma conexão PDO
		$conexao = conexao::getInstance();

		// Recebe os dados enviados pela submissão
		$acao  = (isset($_POST['acao'])) ? $_POST['acao'] : '';
		$id    = (isset($_POST['id'])) ? $_POST['id'] : '';
		$animal = (isset($_POST['adocao'])) ? $_POST['adocao'] : '';
		
		$query = 'SELECT * FROM animais where ani_status = 0';
		$stm = $conexao->prepare($query);
		$retorno = $stm->execute();
		$dados = $stm->fetchAll();

		// Buscar ID
		foreach($dados as $chave => $valor):
			$ani_id = $valor['ani_id'];
		endforeach;

		// Valida os dados recebidos
		
		if($animal == ''){
			$_SESSION['erro'] .= '<li style="text-align: center; color: red; margin-bottom: 10px;">Você não escolheu nenhum animalzinho :(</li>';
		}elseif($animal == 'n'){
			$_SESSION['erro'] .= '<li style="text-align: center; color: red; margin-bottom: 10px;">Não temos animais disponíveis no momento :(</li>';
		}

		if((($animal != "") && ($animal != "n")) && ($animal < 1)):
			$_SESSION['erro'] .= '<li style="text-align: center; color: red; margin-bottom: 15px;">Não faça isso.</li>';
		endif;

		if(isset($_SESSION['erro'])):
			header('Location: cadastro_adocao.php');
			exit();
		endif;
	 
		// Verifica se foi solicitada a inclusão de dados
		if ($acao == 'incluir'):

			$data_hoje = date("d/m/Y");

			$sql = 'INSERT INTO adocao (ado_data, usu_id, ani_id)VALUES(:ado_data, :usu_id, :codigo);
			UPDATE animais SET ani_status = 1 WHERE ani_id = :ani_id;';
			$stm = $conexao->prepare($sql);
			$stm->bindValue(':ado_data', $data_hoje);
			$stm->bindValue(':codigo', $animal);
			$stm->bindValue(':usu_id', $_SESSION['id']);
			$stm->bindValue(':ani_id', $animal);
			$retorno = $stm->execute();

			if ($retorno):
				$_SESSION['sucess'] = "<li style='text-align: center; color: #19ad17; margin: -15px 0 10px 0;'>Animal adotado com sucesso :)</li> ";
				header('Location: cadastro_adocao.php');
		    else:
		    	$_SESSION['erro'] = "<li style='text-align: center; color: red; margin: -15px 0 10px 0;'>Erro ao adotar animalzinho :(</li> ";
				header('Location: cadastro_adocao.php');
			endif;
		endif;
?>
</body>
</html>