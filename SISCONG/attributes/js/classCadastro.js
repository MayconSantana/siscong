function load(){
    let nome = document.getElementById("nome");
    let rg = document.getElementById("rg");
    let cpf = document.getElementById("cpf");
    let celular = document.getElementById('celular');
    let telefone = document.getElementById("telefone");
    let endereco = document.getElementById("endereco");
    let numero = document.getElementById("numero");
    let bairro = document.getElementById("bairro");
    let complemento = document.getElementById("complemento");
    let email = document.getElementById("email");
    let senha = document.getElementById("senha");
    let confirmsenha = document.getElementById("confirmsenha");

    if(nome.value != ""){
        nome.classList.add('has-val');
    }else{
        nome.classList.remove('has-val');
    }

    if(rg.value != ""){
        rg.classList.add('has-val');
    }else{
        rg.classList.remove('has-val');
    }

    if(cpf.value != ""){
        cpf.classList.add('has-val');
    }else{
        cpf.classList.remove('has-val');
    }

    if(celular.value != ""){
        celular.classList.add('has-val');
    }else{
        celular.classList.remove('has-val');
    }

    if(telefone.value != ""){
        telefone.classList.add('has-val');
    }else{
        telefone.classList.remove('has-val');
    }

    if(endereco.value != ""){
        endereco.classList.add('has-val');
    }else{
        endereco.classList.remove('has-val');
    }

    if(numero.value != ""){
        numero.classList.add('has-val');
    }else{
        numero.classList.remove('has-val');
    }
    
    if(bairro.value != ""){
        bairro.classList.add('has-val');
    }else{
        bairro.classList.remove('has-val');
    }

    if(complemento.value != ""){
        complemento.classList.add('has-val');
    }else{
        complemento.classList.remove('has-val');
    }

    if(email.value != ""){
        email.classList.add('has-val');
    }else{
        email.classList.remove('has-val');
    }

    if(senha.value != ""){
        senha.classList.add('has-val');
    }else{
        senha.classList.remove('has-val');
    }

    if(confirmsenha.value != ""){
        confirmsenha.classList.add('has-val');
    }else{
        confirmsenha.classList.remove('has-val');
    }
}