let verduras = [];
let legumes = [];
let congelados = [];
let doces = [];


add = prompt("Deseja adicionar um item a lista? Responda SIM ou NAO.");

if(add=="SIM" || add=="Sim" || add=="sim" || add=="siM" || add=="sIm"){
    item = prompt("Qual item você deseja adicionar?")
    categoria = prompt("Qual categoria do item? Use VERDURAS, LEGUMES, CONGELADOS OU DOCES.");
        if(categoria == "VERDURA" || categoria == "VERDURAS" || categoria == "verdura" || categoria == "verduras"){
            verduras.push(item);
        } else if(categoria == "LEGUME" || categoria == "LEGUMES" || categoria == "legume" || categoria == "legumes"){
            legumes.push(item);
        } else if(categoria == "CONGELADO" || categoria == "CONGELADOS" || categoria == "congelado" || categoria == "congelados"){
            congelados.push(item);
        } else if (categoria == "DOCE" || categoria == "DOCES" || categoria == "doce" || categoria == "doces"){
            doces.push(item);
        } else {
            alert("Categoria inválida. Tente adicionar novamente.")
        }
    } else if (add=="NAO" || add=="NO" || add=="Não" || add=="NÃO" || add=="NÃo" || add=="não" || add=="nao" || add=="nÃo" || add=="nÃO"){
        console.log("não")
    } else {
        alert("Resposta não permitida. Por favor responda novamente.");
        add = prompt("Deseja adicionar um item a lista? Responda SIM ou NAO.");
    }

