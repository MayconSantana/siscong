function load(){
    var
    nome = document.getElementById("nome");

    if(nome != ""){
        $(nome).addClass('has-val');
    }else{
        $(nome).removeClass('has-val');
    }
}