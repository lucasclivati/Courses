let numero1a10 = Math.floor(Math.random()*10)+1;
//let numero1a10 = 1;

let i = 0;
chances = 3;
chancesRestantes = chances;

while (i<chances) {
    adivinhar = prompt("Adivinhe um número de 1 a 10. Ex: 3");
    if (adivinhar == numero1a10){
        alert('Você acertou! O número era '+adivinhar +'!');
        exit;
    } else {
        i= i+1;
        chancesRestantes= chancesRestantes-1;
        alert('Errado! Você ainda tem '+ chancesRestantes +' chances!');
    }
}

