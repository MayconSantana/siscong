<?php
    session_start();
    require_once('bdconect.php');
    // Atribui uma conexão PDO
	$conexao = conexao::getInstance();

    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $senha = addslashes($_POST['senha']);
    $confirmsenha = addslashes($_POST['confirmsenha']);

    
    $sql = 'SELECT * FROM usuario WHERE usu_email=:email';
    $result = $conexao->prepare($sql);
    $result->execute(['email' => $email]);
    $user = $result->fetch();

    if(empty($user)):
        $_SESSION['erro'] = "<li style='color: red; text-align: center; margin-bottom: 1.5rem;'>E-mail inexistente</li>";
        header('Location: ../retomar_senha.php');
    endif;

    if(!empty($user)):
        if($senha != $confirmsenha):
            $_SESSION['erro'] = "<li style='color: red; text-align: center; margin-bottom: 1.5rem;'>Senhas diferentes</li>";
        endif;

        if(strlen($senha) <= 3):
            $_SESSION['erro'] = "<li style='color: red; text-align: center; margin-bottom: 1.5rem;'>Senha muito fraca</li>";
        endif;

        if(isset($_SESSION['erro'])):
            header('Location: ../retomar_senha.php');
            exit();
        endif;
    
        $update = "UPDATE usuario SET usu_senha='$senha' WHERE usu_email='$email'";
        $result = $conexao->query($update);

        if($result):
            $_SESSION['sucess'] = "<li style='color: #19ad17; text-align: center; margin-bottom: 1.5rem;'>Senha alterada com sucesso</li>";
            header('Location: ../retomar_senha.php');
        endif;

    endif;
?>