<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
	<title>Doação</title>
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
		$tipo_doacao  = (isset($_POST['tipo_doacao'])) ? $_POST['tipo_doacao'] : '';
		


		// Valida os dados recebidos
		$mensagem = '';
		
		// Valida os dados recebidos
		$mensagem = '';
		if ($acao == 'editar' && $id == ''):
		    $mensagem .= '<li>ID do registros desconhecido.</li>';
	    endif;

		 // Se for ação diferente de excluir valida os dados obrigatórios
	    if ($acao != 'excluir'):

            if ($tipo_doacao == ''): 
				$mensagem .= '<li>Escolha um tipo de doação.</li>';
		    endif;


			if ($mensagem != ''):
				$mensagem = '<ul>' . $mensagem . '</ul>';
				echo "<div class='alert alert-danger' role='alert'>".$mensagem."</div> ";
				exit;
			endif;

		endif;
		// Verifica se foi solicitada a inclusão de dados
		if ($acao == 'incluir'):

			$sql = 'INSERT INTO tipo_doacao (td_nome)VALUES(:td_nome)';
			$stm = $conexao->prepare($sql);
			$stm->bindValue(':td_nome', $tipo_doacao);
			$retorno = $stm->execute();

			if ($retorno):
				echo "<div class='alert alert-success' role='alert'>Registro inserido com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao inserir registro!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=action_tipo_doacao.php'>";
		endif;

		echo "<p id='mensagem'>".$mensagem."</p>";
?>
</body>
</html>