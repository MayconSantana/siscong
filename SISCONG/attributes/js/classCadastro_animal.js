function load(){
    let nome = document.getElementById('nome');
    let especie = document.getElementById('especie');
    let raca = document.getElementById('raca');

    if(nome.value != ""){
        nome.classList.add('has-val');
    }else{
        nome.classList.remove('has-val');
    }

    if(especie.value != ""){
        especie.classList.add('has-val');
    }else{
        especie.classList.remove('has-val');
    }

    if(raca.value != ""){
        raca.classList.add('has-val');
    }else{
        raca.classList.remove('has-val');
    }
}