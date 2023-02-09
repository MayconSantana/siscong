<link rel="stylesheet" type="text/css" href="../attributes/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../attributes/css/custom.css">
<link rel="stylesheet" type="text/css" href="../attributes/css/edit.css">

<?php
    //verificações
    require_once('../methods/verificarLogin.php');
    verificarLogin('../logar.php');
    verificarPermUser('../index.php');

    require '../methods/bdconect.php';
    // Atribui uma conexão PDO
    $conexao = conexao::getInstance();


    if(isset($_POST['update'])){
        $id = addslashes($_POST['id']);
        $nome  = (isset($_POST['nome'])) ? $_POST['nome'] : '';
		$especie = (isset($_POST['especie'])) ? $_POST['especie'] : '';
		$raca = (isset($_POST['raca'])) ? $_POST['raca'] : '';
		$genero = (isset($_POST['genero'])) ? $_POST['genero'] : '';
		$porte = (isset($_POST['porte'])) ? $_POST['porte'] : '';

        // Valida os dados recebidos

        if ($genero == ''): 		
            $_SESSION['error'] .= '<li style="text-align: center; color: red;">Gênero inválido.</li>';
        endif;
    
        if ($porte == ''): 		
            $_SESSION['error'] .= '<li style="text-align: center; color: red; margin-bottom: 3em;">Porte inválido.</li>';
        endif;
    
        if($_SESSION['error'] != ''){
            header('Location: edit.php');
            exit;
        }

        $sqlUpdate = "UPDATE animais SET ani_nome='$nome', ani_especie='$especie', ani_raca='$raca', ani_genero='$genero', ani_porte='$porte' 
        WHERE ani_id='$id'";

        $result = $conexao->query($sqlUpdate);
    }

    header('Location: listagem_animais.php');
?>