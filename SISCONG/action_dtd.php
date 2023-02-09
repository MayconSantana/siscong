<link rel="stylesheet" type="text/css" href="attributes/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="attributes/css/custom.css">
<link rel="icon" type="image/png" href="attributes/css/img/ong.png"/>

<?php
    require_once('methods/verificarLogin.php');
    verificarLogin('logar.php');

	require 'methods/bdconect.php';
	// Atribui uma conexão PDO
	$conexao = conexao::getInstance();

    $tipo_doacao = (isset($_POST['tipo_doacao'])) ? $_POST['tipo_doacao'] : '';
    $valor = (isset($_POST['valor'])) ? $_POST['valor'] : ''; //coletando o valor que o usuario vai doar

    if($tipo_doacao == 1):
        $valor_verifica = str_replace('R$', '', $valor);
        $valor_verifica2 = str_replace('r$', '', $valor_verifica);
        $valor_verifica3 = str_replace(',','.', $valor_verifica2);

        if(is_numeric($valor_verifica3) == false):
            $_SESSION['erro'] = "<li style='text-align: center; color: red; margin-bottom: 10px;'>Valor inválido</li>";
            header('Location: cadastro_doacao.php');
            exit;
        endif;

        if($valor_verifica3 <= 0):
            $_SESSION['erro'] = "<li style='text-align: center; color: red; margin-bottom: 10px;'>Valor inválido</li>";
            header('Location: cadastro_doacao.php');
            exit;
        endif;
    endif;

    if($tipo_doacao == 2):
        if($valor <= 0):
            $_SESSION['erro'] = "<li style='text-align: center; color: red; margin-bottom: 10px;'>Valor inválido</li>";
            header('Location: cadastro_doacao.php');
            exit;
        endif;
    endif;


    $data_hoje = date("d/m/Y");

    $sql = 'INSERT INTO doacao (doa_data, usu_id) VALUES (:doa_data, :usu_id)';
    $stm = $conexao->prepare($sql); 
    $stm->bindValue(':doa_data', $data_hoje);
    $stm->bindValue(':usu_id', $_SESSION['id']);
    $retorno = $stm->execute();
    
    $query = 'SELECT * FROM doacao ORDER BY doa_id DESC';
    $stm = $conexao->prepare($query);
    $retorno = $stm->execute();
    $dados = $stm->fetch();
    $doa_id = $dados['doa_id'];
    
    $sql = 'INSERT INTO doacao_tipo_doacao (doa_id, td_id, dtd_valor) VALUES (:doa_id, :td_id, :dtd_valor)';
    $stm = $conexao->prepare($sql);
	$stm->bindValue(':doa_id', $doa_id);
    $stm->bindValue(':td_id', $tipo_doacao);
	$stm->bindValue(':dtd_valor', $valor);
    $retorno = $stm->execute();
        
    if ($retorno):
         $_SESSION['sucess'] = "<li style='text-align: center; color: #19ad17; margin: 10px 0;'>Doação feita com sucesso :)</li>";
         header('Location: cadastro_doacao.php');
    else:
        $_SESSION['erro'] = "<li style='text-align: center; red: #19ad17; margin: 10px 0;'>Ocorreu algum erro :(</li>";
        header('Location: cadastro_doacao.php');
    endif;
?>
