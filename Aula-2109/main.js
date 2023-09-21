/*❖ Gere o conteúdo “Hoje é dia X/Y de XXXX (pesquise e use a função appendChild)
❖ Crie um elemento do tipo h1 no body do HTML com a mensagem inicial “msg base”.
❖ Em Javascript, acesse esse elemento pelo ID e modifique seu conteúdo com base no
horário local, sendo:
    ❖ Entre 6 e 11 horas: “Bom dia!”
    ❖ 12 horas: “Hora do Almoço!”
    ❖ 13 as 17: “Boa tarde!”
    ❖ 18 as 23: “Boa noite!”
    ❖ 0 horas: “Não disse que ia dormir mais cedo hoje?”
    ❖ Entre 1 e 5 horas: “Não está na netflix, está?”
❖ Escreva separadamente o arquivo.html do arquivo.js;
❖ Para realizar essa atividade, pesquise sobre como fazer para obter a data atual do seu
computador em javascript. */


const hoje = new Date().toLocaleString()

//Criando elementox
const data = document.createElement("h1")
const horario = document.createElement("h3")

//Adicionar ao HTML
data.innerHTML = `Hoje é dia ${hoje.slice(0,10)}`

//Adicionar filho
document.body.appendChild(data)

//Acessar elemento 
let hora = parseInt(hoje.slice(11,14))

if(hora >= 6 && hora <= 11){
    horario.innerHTML = ` Bom dia!`
}
else if (hora == 12){
    horario.innerHTML = `Hora de almoçar!`
}
else if(hora >=13 && hora <= 17){
    horario.innerHTML = `Boa Tarde"`
}
else if(hora >= 18 && hora <= 23){
    horario.innerHTML = `Boa Noite! Vai mimir...`
}
else if(hora == 0){
    horario.innerHTML = `Vai dormir logo!!!`
}
else if(hora >= 1 && hora <= 5){
    horario.innerHTML = `Sai do tiktok! Ta acordado porque?`
}

//Adicionar filho 
document.body.appendChild(horario)