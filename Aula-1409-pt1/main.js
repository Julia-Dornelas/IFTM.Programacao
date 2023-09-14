/* Crie um arquivo HTML com a div de id "principal" no arquivo HTML.
 Crie e importe um arquivo Javascript chamado main.js. Adicione o CSS do próximo slide a um arquivo CSS externo e link com seu HTML.
 Com Javascript:
 Adicione 3 elementos filhos do tipo h1, h2 e p,
respectivamente à div principal.
 Adicione o texto "Bem vindo ao JS" ao elemento h1
 Adicione o texto "Criando elementos de forma dinâmica" ao elemento h2
 Adicione o texto "Esse é um exemplo clássico de geração de HTML com Javascript" ao p
 Adicione a classe “tituloPrincipal” para o h1.
 Adicione a classe “tituloSec” para o h2.
 Adicione a classe “texto” para a tag p.*/

const container = document.getElementById("principal")

//Criar elementos
let h1 = document.createElement("h1")
let h2 = document.createElement("h2")
let p = document.createElement("p")

//Adicionar conteudo aos elementos
h1.innerHTML = "Bem vindo ao JS"
h2.innerHTML = "Criando elementos de forma dinâmica"
p.innerHTML = "Esse é um exemplo clássico de geração de HTML com Javascrip"

//Adicionar filhos a div
container.appendChild(h1)
container.appendChild(h2)
container.appendChild(p)

//Adicionar classe
h1.classList.add("tituloPrincipal")
h2.classList.add("tituloSec")
p.classList.add("texto")













