let area  = prompt("Você deseja seguir a área Front-End ou Back-end?");

if(area === "Front-End" || area === "Front-End" || area === "Front" || area === "frontend"){
   prompt("Wow! Front! Você quer seguir por Vue ou React?");
} else {
    prompt("Backend então! Você quer seguir por C# ou aprender Java?");
}

let especializacao  = prompt('Você deseja seguir se especializando em ' + area + ' ou deseja tornar-se fullstack?');

let resposta = 'resposta';

let msg = prompt("Tem mais alguma tecnologia que você gostaria de aprender? Digite 'ok' em caso positivo.");
while (msg === "ok"){
    let novaTecnologia = prompt("Qual?");
    alert(`${novaTecnologia} é realmente uma tecnologia muito legal!`)
    msg = prompt("Tem mais alguma tecnologia que você gostaria de aprender? Digite 'ok' em caso positivo.");
}