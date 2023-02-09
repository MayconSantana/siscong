<?php
	//verificações
	require_once('../methods/verificarLogin.php');
	verificarLogin('../logar.php');
	verificarPermUser('../index.php');

    require '../methods/bdconect.php';
    // Atribui uma conexão PDO
	$conexao = conexao::getInstance();

    if(!empty($_GET['id'])){
        $id =  addslashes($_GET['id']);
    
        $select = "SELECT * FROM animais WHERE ani_id=$id";
        $stm = $conexao->prepare($select);
        $retorno = $stm->execute();

        $select = "SELECT * FROM adocao WHERE ani_id=$id";
        $stmt = $conexao->prepare($select);
        $retorno = $stmt->execute();

        if($stm->fetch()){
            if($stmt->fetch()){
                $del = "DELETE FROM adocao WHERE ani_id=$id";
                $resultDel = $conexao->query($del);
            }
            $delete = "DELETE FROM animais WHERE ani_id=$id";
            $resultDelete = $conexao->query($delete);
        }
    }
    header('Location: listagem_animais.php');
?>