<head>
    <title>Adoções</title>
    <link rel="icon" href="../images/logo_ong.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="attributes/css/bootstrap.min.css">
    <link rel="stylesheet" href="attributes/css/btn-listagem.css">
</head>

<?php
    require_once('methods/verificarLogin.php');
    verificarLogin('notlogin.php');
    verificarPermUser('../home.php');

    require 'methods/bdconect.php';
    //atribui uma conexão PDO
    $conexao = conexao::getInstance();

    if(!empty($_GET['search'])){
        $data = $_GET['search'];

        $select = "SELECT ado.ado_id, ado.ado_data, usu.usu_nome, ani.ani_nome FROM adocao ado JOIN
        usuario AS usu ON ado.usu_id = usu.usu_id JOIN animais AS ani ON ado.ani_id = ani.ani_id
        WHERE ado.ado_id LIKE '%$data%' or ado.ado_data LIKE '%$data%' or usu.usu_nome
        LIKE '%$data%' or ani.ani_nome LIKE '%$data%' ORDER BY ado.ado_id ";

    }else{
        $select = "SELECT ado.ado_id, ado.ado_data, usu.usu_nome, ani.ani_nome FROM adocao ado JOIN
        usuario AS usu ON ado.usu_id = usu.usu_id JOIN animais AS ani ON ado.ani_id = ani.ani_id
        ORDER BY ado.ado_id";
    }

    $stm = $conexao->prepare($select);
    $result = $stm->execute();
    $dados = $stm->fetchAll();

    ?>

<div class="header">

<div style="display: flex; justify-content: center; margin: 15px 0;">
    <label><input type="search" class="search" name="pesquisar" id="pesquisar" placeholder="Pesquisar"></label>
    <button onclick="searchData()" class="btn btn-primary btn-search">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
    </button>
</div>

<div class="botoes">

    <button class="btn-voltar">
        <a href="../adm.php">
            Voltar
        </a>
    </button>
    
</div>
</div> <!-- Fim Header -->

    <div>
    <table class="table table-dark">
    <thead>
        <tr>
            <th>ID</th>
            <th>ANIMAL ADOTADO</th>
            <th>NOME DA PESSOA</th>
            <th>DATA</th>
        </tr>
    </thead>
    <tbody>
    <?php
        if(count($dados) > 0){
            foreach($dados as $chave => $valor){
                //$data = date("d/m/Y", strtotime($valor['ado_data']));
                
                echo "<tr>";

                echo "<td>".$valor['ado_id']."</td>";
                echo "<td>".$valor['ani_nome']."</td>";
                echo "<td>".$valor['usu_nome']."</td>";
                echo "<td>".$valor['ado_data']."</td>";

                echo "<tr>";
            }
        }
    ?>
    </tbody>
    </table>

    <script>
        var search = document.getElementById('pesquisar');

        search.addEventListener("keydown", function(event){
            if(event.key === "Enter"){
                searchData();
            }
        })

        function searchData(){
            window.location = 'listagem_adocao.php?search='+search.value;
        }
    </script>