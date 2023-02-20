function tocaSom (idElementoAudio) {
    document.querySelector(idElementoAudio).play();
}

const listaDeTeclas = document.querySelectorAll('.tecla')

// let contador = 0;
// while (contador < listaDeTeclas.length) {
//     const tecla = listaDeTeclas[contador];
//     const instrumento = tecla.classList[1];
//     const idAudio = `#som_${instrumento}`;
//     tecla.onclick = function(){
//         tocaSom(idAudio)
//     }
//     contador += 1
//     console.log(contador);
// }

for (let contador = 0; contador < listaDeTeclas.length; contador++) {

    const tecla = listaDeTeclas[contador];
    const instrumento = tecla.classList[1];
    const idAudio = `#som_${instrumento}`;

    tecla.onclick = function(){
        tocaSom(idAudio)
    }

    tecla.onkeydown = function (evento){
        console.log(evento.code)
        if(evento.code === 'Space'){
            tecla.classList.add('ativa');
        }
        
    }
    
    tecla.onkeyup = function(){
        tecla.classList.remove('ativa');
    }
};
