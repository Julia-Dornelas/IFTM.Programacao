/*
 Crie 10 objetos do tipo aluno que contenham
nome, email e matéria favorita (leia com
prompt).
 Adicione esses objetos de forma dinâmica
dentro da seção main do arquivo HTML a
seguir (próximo slide). Essa adição deve ser
feita após a leitura dos dados desses alunos.
Você deve criar um card para cada aluno,
conforme exemplo abaixo.*/

let aluno
let array = []
let main = document.getElementById("principal")

for(let i=0;i<10;i++){
    //Criar objeto
    aluno = {
        nome:"",
        email:"",
        materiafav:""
    }

    //Receber valor
    aluno.nome = prompt("Qual o seu nome?")
    aluno.email = prompt("Digite seu email?")
    aluno.materiafav = prompt("Qual sua matéria favorita?")

    //Salvar no array
    array.push(aluno)
}

for(let i=0;i<array.length;i++){
    //Criar elemento
    let TituloNome = document.createElement("h1")
    let Pemail = document.createElement("p")
    let Pmateria = document.createElement("p")
    let card = document.createElement("div")

    //Adicionar conteudo
    TituloNome.innerHTML = array[i].nome
    Pemail.innerHTML = array[i].email
    Pmateria.innerHTML = array[i].materiafav

    //Adicionar elementos na div
    card.appendChild(TituloNome)
    card.appendChild(Pemail)
    card.appendChild(Pmateria)

    //Adicionar div na main
    main.appendChild(card)
}
