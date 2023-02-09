function load(){
    let email = document.getElementById('email');
    let senha = document.getElementById('senha');

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
}