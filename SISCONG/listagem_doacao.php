<head>
    <title>Doações</title>
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

        $select = "SELECT doa.doa_id, usu.usu_nome, td.td_nome, dtd.dtd_valor, doa.doa_data FROM doacao doa
        JOIN usuario AS usu ON doa.usu_id = usu.usu_id JOIN doacao_tipo_doacao AS dtd ON dtd.doa_id = doa.doa_id
        JOIN tipo_doacao AS td ON td.td_id = dtd.td_id WHERE usu.usu_nome LIKE '%$data%' or td.td_nome LIKE '%$data%' or dtd.dtd_valor
        LIKE '%$data%' or doa.doa_data LIKE '%$data%' ORDER BY doa.doa_id";

    }else{
        $select = "SELECT doa.doa_id, usu.usu_nome, td.td_nome, dtd.dtd_valor, doa.doa_data FROM doacao doa 
        JOIN usuario AS usu ON doa.usu_id = usu.usu_id JOIN doacao_tipo_doacao AS dtd ON dtd.doa_id = doa.doa_id
        JOIN tipo_doacao AS td ON td.td_id = dtd.td_id ORDER BY doa.doa_id";
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
            <th>DOADOR</th>
            <th>O QUE FOI DOADO</th>
            <th>VALOR/QUANTIDADE</th>
            <th>DATA</th>
        </tr>
    </thead>
    <tbody>
    <?php
        if(count($dados) > 0){
            foreach($dados as $chave => $valor){
                
                echo "<tr>";

                echo "<td>".$valor['doa_id']."</td>";
                echo "<td>".$valor['usu_nome']."</td>";
                echo "<td>".$valor['td_nome']."</td>";
                echo "<td>".$valor['dtd_valor']."</td>";
                echo "<td>".$valor['doa_data']."</td>";

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
            window.location = 'listagem_doacao.php?search='+search.value;
        }
    </script>