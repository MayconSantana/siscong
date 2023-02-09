<?php
    session_start();
    require_once('bdconect.php');
    // Atribui uma conexão PDO
	$conexao = conexao::getInstance();

    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $senha = $_POST['senha'];

    
    $sql = 'SELECT * from usuario WHERE usu_email=:email AND usu_senha=:senha;';
    $result = $conexao->prepare($sql);
    $result->execute(['email' => $email, 'senha' => $senha]);
    $user = $result->fetch();
    
    if(!empty($user)){
        
        $_SESSION['id'] = $user['usu_id'];
        $_SESSION['nome'] = $user['usu_nome'];
        $_SESSION['email'] = $user['usu_email'];
        $_SESSION['perm'] = $user['usu_permissao'];

        header('Location: ../../home.php');
    }else{
        $_SESSION['erro'] = "<p style='color: red; text-align: center; margin-bottom: 1rem;'> E-mail ou senha incorretos!</p>";
        header('Location: ../logar.php');
    }
?>