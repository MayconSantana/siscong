<head>
	<title>Lista de Usuários</title>
    <link rel="stylesheet" href="attributes/css/btn-listagem.css">
    <link rel="stylesheet" type="text/css" href="attributes/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="attributes/fonts/font--4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../images/logo_ong.png" type="image/x-icon">
</head>

<?php
    require_once('methods/verificarLogin.php');
    verificarLogin('notlogin.php');
    verificarPermFunc('../home.php');
        
    require 'methods/bdconect.php';
    
    // Atribui uma conexão PDO
    $conexao = conexao::getInstance();

    if(!empty($_GET['search'])){
        $data = $_GET['search'];

        $query = "SELECT * FROM usuario WHERE usu_id LIKE '%$data%' or usu_nome LIKE '%$data%' or usu_rg LIKE '%$data%' or usu_cpf LIKE '%$data%'
        or usu_dtnasc LIKE '%$data%' or usu_telefone LIKE '%$data%' or usu_celular LIKE '%$data%' or usu_endereco LIKE '%$data%' or usu_bairro LIKE '%$data%'
        or usu_numero LIKE '%$data%' or usu_complemento LIKE '%$data%' or usu_email LIKE '%$data%' ORDER BY usu_id";
    }else{
        $query = "SELECT * FROM usuario ORDER BY usu_id";
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
            <a href="cadastro_user.php">
                Cadastrar Usuário
            </a>
        </button>
        

    
        <button class="btn-voltar">
            <a href="../adm.php">
                Voltar
            </a>
        </button>
        
    </div>
</div> <!-- Fim Header -->

    <?php
		if(isset($_SESSION['error'])){
			print $_SESSION['error'];
			unset($_SESSION['error']);
		}
		session_write_close();
	?>

    <table class="table table-dark">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>RG</th>
            <th>CPF</th>
            <th>Data de Nascimento</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Numero</th>
            <th>Complemento</th>
            <th>Email</th>
            <th>Senha</th>
        </tr>
    </thead>
    <tbody>
    <?php
        if(count($dados) > 0){
            foreach($dados as $chave => $valor){
                $data = date("d/m/Y", strtotime($valor['usu_dtnasc']));

                echo "<tr>";
                echo "<td>".$valor['usu_id']."</td>";
                echo "<td>".$valor['usu_nome']."</td>";
                echo "<td>".$valor['usu_rg']."</td>";
                echo "<td>".$valor['usu_cpf']."</td>";
                echo "<td>$data</td>";
                echo "<td>".$valor['usu_telefone']."</td>";
                echo "<td>".$valor['usu_celular']."</td>";
                echo "<td>".$valor['usu_endereco']."</td>";
                echo "<td>".$valor['usu_bairro']."</td>";
                echo "<td>".$valor['usu_numero']."</td>";
                echo "<td>".$valor['usu_complemento']."</td>";
                echo "<td>".$valor['usu_email']."</td>";
                echo "<td>".$valor['usu_senha']."</td>";

                echo "<td><a class='btn btn-sm btn-primary' href='usuarios/edit.php?id=$valor[usu_id]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
              </svg></a></td>";

                

                echo "<td><a id='btn-delete' class='btn btn-sm btn-danger' href='usuarios/delete.php?id=$valor[usu_id]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
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
            window.location = 'listagem_usuarios.php?search='+search.value;
        }

        var btn = document.querySelectorAll('a#btn-delete');

        for(let i = 0; i < btn.length; i++){
            btn[i].addEventListener('click', ()=>{
                let confirm = window.confirm('Tem certeza que deseja excluir?')

                if(confirm === false){
                    btn[i].setAttribute("href", "listagem_usuarios.php")
                }
            })
        }
    </script>