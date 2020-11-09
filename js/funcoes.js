function exibirCategoria(categoria){
    let elementos = document.getElementByClassName('categoria');

    console.log(elementos);

    for(var i=0; i<elementos.length; i++){
        console.log(elementos[i].id);
        if(categoria == elementos[i].id){
            elementos[i].style = 'display:block';
        }else{
            elementos[i].style = 'display:none';
        }
    }

}

let exibirTodos = () => {
    let elementos = document.getElementByClassName('container');

    for(var i=0; i<elementos.length; i++){
        elementos[i].style = "display:block"
    }
}

let destaque = (imagem) =>{
    console.log(imagem);
    imagem.width = 500;
}

let miniatura = (imagem) =>{
    console.log(imagem);
    imagem.width = 300;
}