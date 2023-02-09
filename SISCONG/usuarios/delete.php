<?php
	require('../methods/verificarLogin.php');

    require '../methods/bdconect.php';
    // Atribui uma conexão PDO
	$conexao = conexao::getInstance();

    if(!empty($_GET['id'])){
        $id =  addslashes($_GET['id']);

        if($id == $_SESSION['id']):
            $_SESSION['error'] = "<p style='text-align: center; color: red; font-size: 24px'>Você está logado nessa conta!</p>";
            header('Location: ../listagem_usuarios.php');
            exit;
        endif;

        $select = "SELECT * FROM usuario WHERE usu_id=$id";
        $stm = $conexao->prepare($select);
        $retorno = $stm->execute();

        $select = "SELECT * FROM adocao WHERE usu_id=$id";
        $stmt = $conexao->prepare($select);
        $retorno = $stmt->execute();

        $select = "SELECT doa_id FROM doacao WHERE usu_id=$id";
        $stmt2 = $conexao->prepare($select);
        $retorno = $stmt2->execute();
        $dados = $stmt2->fetchAll(); //coletando doa_id

        if($stm->fetch()){
            if($stmt->fetch()){
                $delete = "DELETE FROM adocao WHERE usu_id=$id";
                $resultDelete = $conexao->query($delete);
            }

            if(count($dados) > 0){
                foreach($dados as $chave => $valor){
                    $doa_id = $valor['doa_id'];
                
                    $delete = "DELETE FROM doacao_tipo_doacao WHERE doa_id=$doa_id";
                    $resultDelete = $conexao->query($delete);
                }

                $delete = "DELETE FROM doacao WHERE usu_id=$id";
                $resultDelete = $conexao->query($delete);
            }

            $delete = "DELETE FROM usuario WHERE usu_id=$id";
            $resultDelete = $conexao->query($delete);
        }
    }
    header('Location: ../listagem_usuarios.php');
?>