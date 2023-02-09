<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Sistema de Cadastro</title>
	<link rel="stylesheet" type="text/css" href="attributes/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="attributes/css/custom.css">
	<link rel="icon" type="image/png" href="attributes/css/img/ong.png"/>
</head>
<body>
	<?php 
		session_start();
		require 'methods/bdconect.php';

		// Atribui uma conexão PDO
		$conexao = conexao::getInstance();

		// Recebe os dados enviados pela submissão
		$id    = (isset($_POST['id'])) ? $_POST['id'] : '';
		$nome  = (isset($_POST['nome'])) ? $_POST['nome'] : '';
		$rg   = (isset($_POST['rg'])) ? str_replace(array('.','-'), '', $_POST['rg']): '';
		$cpf   = (isset($_POST['cpf'])) ? str_replace(array('.','-'), '', $_POST['cpf']): '';
		$data_nascimento  = (isset($_POST['data_nascimento'])) ? $_POST['data_nascimento'] : '';
		$data_hoje = date("Y-m-d");
		$celular = (isset($_POST['celular'])) ? str_replace(array('-', ' '), '', $_POST['celular']) : '';
		$telefone = (isset($_POST['telefone'])) ? str_replace(array('-', ' '), '', $_POST['telefone']) : '';
		$endereco = (isset($_POST['endereco'])) ? $_POST['endereco'] : '';
		$bairro = (isset($_POST['bairro'])) ? $_POST['bairro'] : '';
		$numero = (isset($_POST['numero'])) ? $_POST['numero'] : '';
		$complemento = (isset($_POST['complemento'])) ? $_POST['complemento'] : '';
		$email = (isset($_POST['email'])) ? $_POST['email'] : '';
		$permissao = (isset($_POST['perm'])) ? $_POST['perm'] : 0;

		//senhas
		$senha  = (isset($_POST['senha'])) ? $_POST['senha'] : '';
		$confirmsenha  = (isset($_POST['confirmsenha'])) ? $_POST['confirmsenha'] : '';
			
			
		// Valida os dados recebidos

			if($senha != $confirmsenha):
				$_SESSION['error'] = "<li style='text-align: center; color: red; margin-bottom: 10px;'>As senhas não conferem.</li>";
			endif;

            if ($nome == ''): 
				$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Favor preencher o Nome.</li>';
			elseif(strlen($nome) < 3):
				$_SESSION['error'] = "<li style='text-align: center; color: red; margin-bottom: 10px;'>Nome muito pequeno.</li>";
			elseif(strlen($nome) > 100):
				$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Nome muito grande.</li>';
		    endif;


            if ($rg == ''): 
				$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Favor preencher o RG.</li>';
			elseif(strlen($rg) < 6):
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
			elseif(is_numeric($celular) == FALSE):
				$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Formato do Celular inválido.</li>';
			endif;

			if($telefone != ''):
				if(strlen($telefone) < 10):
					$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Formato do Telefone inválido.</li>';
				elseif(is_numeric($telefone) == FALSE):
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
				$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Favor preencher o nº da casa.</li>';
				elseif(is_numeric($numero) == FALSE):
					$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Nº da casa inválido.</li>';
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
			elseif(strlen($senha) <= 3):
				$_SESSION['error'] = "<li style='color: red; text-align: center; margin-bottom: 1.5rem;'>Senha muito fraca</li>";
			endif;


            if ($confirmsenha == ''):
				$_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Favor preencher a Confirmação da Senha.</li>';
			elseif(strlen($senha) > 40):
                $_SESSION['error'] .= '<li style="text-align: center; color: red; margin: -15px 0 10px 0;">Senha muito grande.</li>';
			endif;


			if ($_SESSION['error'] != ''):

				$_SESSION['nome--'] = $nome;
				$_SESSION['rg--'] = $rg;
				$_SESSION['cpf--'] = $cpf;
				$_SESSION['dtnasc--'] = $dtnasc;
				$_SESSION['cel--'] = $celular;
				$_SESSION['tel--'] = $telefone;
				$_SESSION['endereco--'] = $endereco;
				$_SESSION['bairro--'] = $bairro;
				$_SESSION['numero--'] = $numero;
				$_SESSION['complemento--'] = $complemento;
				$_SESSION['email--'] = $email;

				header('Location: cadastro_user.php');
				exit;
			endif;

			// Constrói a data no formato ANSI yyyy/mm/dd
			$data_temp = explode('/', $data_nascimento);
			/* $data_ansi = $data_temp[2] . '/' . $data_temp[1] . '/' . $data_temp[0]; */
	
		
		// Verifica se foi solicitada a inclusão de dados

			$sql = 'INSERT INTO usuario (usu_nome, usu_rg, usu_cpf, usu_dtnasc, usu_telefone, usu_celular, usu_endereco, usu_bairro, usu_numero, usu_complemento, usu_email, usu_senha, usu_permissao)
			VALUES(:usu_nome, :usu_rg, :usu_cpf, :usu_dtnasc, :usu_telefone, :usu_celular, :usu_endereco, :usu_bairro, :usu_numero, :usu_complemento, :usu_email, :usu_senha, :usu_permissao)';

			$stm = $conexao->prepare($sql);
			$stm->bindValue(':usu_nome', $nome);
            $stm->bindValue(':usu_rg', $rg);
			$stm->bindValue(':usu_cpf', $cpf);
			$stm->bindValue(':usu_dtnasc', $data_nascimento);
			$stm->bindValue(':usu_telefone', $telefone);
			$stm->bindValue(':usu_celular', $celular);
			$stm->bindValue(':usu_endereco', $endereco);
            $stm->bindValue(':usu_bairro', $bairro);
            $stm->bindValue(':usu_numero', $numero);
            $stm->bindValue(':usu_complemento', $complemento);
            $stm->bindValue(':usu_email', $email);
			$stm->bindValue(':usu_senha', $senha);
			$stm->bindValue(':usu_permissao', $permissao);
			$retorno = $stm->execute();

			if ($retorno):
				$_SESSION['sucess'] = "<li style='text-align: center; color: #19ad17; margin-bottom: 10px;'>Conta criada com sucesso!</li>";
				
				unset($_SESSION['nome--']);
				unset($_SESSION['rg--']);
				unset($_SESSION['cpf--']);
				unset($_SESSION['dtnasc--']);
				unset($_SESSION['cel--']);
				unset($_SESSION['tel--']);
				unset($_SESSION['endereco--']);
				unset($_SESSION['bairro--']);
				unset($_SESSION['numero--']);
				unset($_SESSION['complemento--']);
				unset($_SESSION['email--']);

				header('Location: cadastro_user.php');
		    else:
		    	$_SESSION['error'] = "<li style='text-align: center; color: red; margin-bottom: 10px;'>Erro ao criar conta!</li>";
				header('Location: cadastro_user.php');
			endif;		
?>
</body>
</html>