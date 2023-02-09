<head>
	<title>Lista de Animais</title>
    <link rel="stylesheet" type="text/css" href="../attributes/css/bootstrap.min.css">
    <link rel="stylesheet" href="../attributes/css/btn-listagem.css">
    <link rel="icon" href="../../images/logo_ong.png" type="image/x-icon">
</head>


<?php
	require_once('../methods/verificarLogin.php');
	verificarLogin('../notlogin.php');
    verificarPermUser('../../home.php');
    
    require '../methods/bdconect.php';

    // Atribui uma conexão PDO
	$conexao = conexao::getInstance();

    if(!empty($_GET['search'])){
        $data = $_GET['search'];

        $query = "SELECT * FROM animais WHERE ani_nome LIKE '%$data%' 
        or ani_especie LIKE '%$data%' or ani_raca LIKE '%$data%' or ani_genero LIKE '%$data%' 
        or ani_porte LIKE '%$data%' or ani_status LIKE '%$data%' ORDER BY ani_id";
    }else{
        $query = "SELECT * FROM animais ORDER BY ani_id";
    }

    $stm = $conexao->prepare($query);
    $retorno = $stm->execute();
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
        <button class="btn-cadastro">
            <a href="cadastro_animais.php">
                Cadastrar Animal
            </a>
        </button>
        

    
        <button class="btn-voltar">
            <a href="../../adm.php">
                Voltar
            </a>
        </button>
        
    </div>
</div> <!-- Fim Header -->

<div>
    <table class="table table-dark">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Espécie</th>
            <th>Raça</th>
            <th>Gênero</th>
            <th>Porte</th>
            <th>Status</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
    <?php
        if(count($dados) > 0){
            foreach($dados as $chave => $valor){
                echo "<tr>";
                echo "<td>".$valor['ani_nome']."</td>";
                echo "<td>".$valor['ani_especie']."</td>";
                echo "<td>".$valor['ani_raca']."</td>";
                echo "<td>".$valor['ani_genero']."</td>";
                echo "<td>".$valor['ani_porte']."</td>";

                if($valor['ani_status'] == 0){
                    echo "<td>Adotável</td>";
                }else{
                    echo "<td>Já foi adotado</td>";
                }
               

                echo "<td><a class='btn btn-sm btn-primary' href='edit.php?id=$valor[ani_id]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
              </svg></a></td>";

                echo "<td><a class='btn btn-sm btn-danger' id='btn-delete' href='delete.php?id=$valor[ani_id]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                </svg></a></td>";

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
            window.location = 'listagem_animais.php?search='+search.value;
        }


        var btn = document.querySelectorAll('a#btn-delete');

        for(let i = 0; i < btn.length; i++){
            btn[i].addEventListener('click', ()=>{
                let confirm = window.confirm('Tem certeza que deseja excluir?')

                if(confirm === false){
                    btn[i].setAttribute("href", "listagem_animais.php")
                }
            })
        }
    </script>
