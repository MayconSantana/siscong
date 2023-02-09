<link rel="stylesheet" type="text/css" href="../attributes/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../attributes/css/custom.css">
<link rel="stylesheet" type="text/css" href="../attributes/css/edit.css">

<?php
	require_once('../methods/verificarLogin.php');
	verificarLogin('../logar.php');
	verificarPermFunc('../index.php');

	
    require '../methods/bdconect.php';
    // Atribui uma conexão PDO
    $conexao = conexao::getInstance();


    if(isset($_POST['update'])){
		// Recebe os dados enviados pela submissão
		$acao  = (isset($_POST['acao'])) ? $_POST['acao'] : '';
		$id    = (isset($_POST['id'])) ? $_POST['id'] : '';
		$nome  = (isset($_POST['nome'])) ? $_POST['nome'] : '';
		$rg		= (isset($_POST['rg'])) ? $_POST['rg'] : '';
		$cpf   = (isset($_POST['cpf'])) ? str_replace(array('.','-'), '', $_POST['cpf']): '';
		$data_nascimento  = (isset($_POST['data_nascimento'])) ? $_POST['data_nascimento'] : '';
		$data_hoje = date("Y/m/d");
		$celular = (isset($_POST['celular'])) ? str_replace(array('-', ' '), '', $_POST['celular']) : '';
		$telefone = (isset($_POST['telefone'])) ? str_replace(array('-', ' '), '', $_POST['telefone']) : '';
		$endereco = (isset($_POST['endereco'])) ? $_POST['endereco'] : '';
		$bairro = (isset($_POST['bairro'])) ? $_POST['bairro'] : '';
		$numero = (isset($_POST['numero'])) ? $_POST['numero'] : '';
		$complemento = (isset($_POST['complemento'])) ? $_POST['complemento'] : '';
		$email = (isset($_POST['email'])) ? $_POST['email'] : '';

		$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
		$confirmsenha = (isset($_POST['confirmsenha'])) ? $_POST['confirmsenha'] : '';

			
		// Valida os dados recebidos

		if ($nome == ''): 
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Favor preencher o Nome.</li>';
		elseif(strlen($nome) > 100):
			  $_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Nome muito grande!</li>';
		endif;


		if ($rg == ''): 
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Favor preencher o RG.</li>';
		elseif(strlen($rg) < 10):
			  $_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Formato do RG inválido.</li>';
		elseif(is_numeric($rg) == FALSE):
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Formato do RG inválido.</li>';
		endif;


		if ($cpf == ''):
		   $_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Favor preencher o CPF.</li>';
		elseif(strlen($cpf) < 11):
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Formato do CPF inválido.</li>';
		elseif(is_numeric($cpf) == FALSE):
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Formato do CPF inválido.</li>';
		endif;


		if ($data_nascimento == ''): 		
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Favor preencher a Data de Nascimento.</li>';
		elseif ($data_nascimento >= $data_hoje):
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Data inválida.</li>';
		elseif ($data_nascimento <= (1900-01-01)):
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Data inválida.</li>';	
		elseif (strlen($data_nascimento) > 10):
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Data inválida.</li>';
		endif;


		if ($celular == ''):
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Favor preencher o Celular.</li>';
		elseif(strlen($celular) < 11):
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Formato do Celular inválido.</li>';
		elseif(is_numeric($celular) == false):
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Formato do Celular inválido.</li>';
		endif;

		if($telefone != ''):
			if(strlen($telefone) < 10):
				$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Formato do Telefone inválido.</li>';
			elseif(is_numeric($telefone) == false):
				$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Formato do Telefone inválido.</li>';
			endif;
		endif;


		if ($endereco == ''):
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Favor preencher o Endereço.</li>';
		elseif(strlen($endereco) > 100):
			  $_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Endereço inválido.</li>';
		endif;


		if ($bairro == ''):
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Favor preencher o Bairro.</li>';
		elseif(strlen($celular) > 60):
			  $_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Bairro inválido.</li>';
		endif;


		if ($numero == ''):
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Favor preencher o nº.</li>';
			elseif(is_numeric($numero) == FALSE):
				$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Formato do nº inválido.</li>';
		endif;


		if ($complemento != ''):
			if(strlen($complemento) > 40):
				$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Complemento inválido.</li>';
			endif;
		endif;


		if ($email == ''):
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Favor preencher o E-mail.</li>';
		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)):
			  $_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Formato do E-mail inválido.</li>';
		endif;
		

		if ($senha == ''):
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Favor preencher a Senha.</li>';
		elseif(strlen($senha) > 40):
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Senha muito grande.</li>';
		endif;


		if ($confirmsenha == ''):
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Favor confirmar a Senha.</li>';
		elseif(strlen($senha) > 40):
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Senha muito grande.</li>';
		endif;

		if($senha != $confirmsenha):
			$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">As senhas estão diferentes.</li>';
		endif;

			if ($_SESSION['error'] != ''):
				header('Location: edit.php');
				exit;
			endif;

			// Constrói a data no formato ANSI yyyy/mm/dd
			$data_temp = explode('/', $data_nascimento);

        $sqlUpdate = "UPDATE usuario SET usu_nome='$nome', usu_rg='$rg', usu_cpf='$cpf', 
        usu_dtnasc='$data_nascimento', usu_telefone='$telefone', usu_celular='$celular', 
        usu_endereco='$endereco', usu_bairro='$bairro', usu_numero='$numero', usu_complemento='$complemento',
        usu_email='$email', usu_senha='$senha' WHERE usu_id='$id'";

        $result = $conexao->query($sqlUpdate);
    }

    header('Location: ../listagem_usuarios.php');
    ?>
        
