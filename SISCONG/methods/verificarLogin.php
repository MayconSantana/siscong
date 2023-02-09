<?php
    session_start();

    function verificarLogin($path){
        if(!isset($_SESSION['id'])){
            header('Location: '.$path);
            exit();
        }
    }

    function verificarPermUser($local){
        if($_SESSION['perm'] < 1){
            header('Location: '.$local);
        }
    }

    function verificarPermFunc($local){
        if($_SESSION['perm'] < 2){
            header('Location: '.$local); 
        }
    }
?>