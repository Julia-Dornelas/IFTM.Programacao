/*II) Esse código tem o objetivo de simular um carrinho de compras.
Faça um código em JS que receba e armazene os dados de 5
PRODUTOS que foram "colocados" no carrinho. Cada produto tem um nome, um preço e um local de fabricação (Brazil ou Exterior). Após realizadas as entradas,
mostre na tela:
1- Todos os dados de todos os produtos
2- O valor do produto mais caro
3- O número de produtos fabricados no Brasil e o número de produtos fabricados no exterior
4- A soma de todos os produtos.*/

let nome 
let preco 
let fabricacao 
let compra = []
let caro = 0
let ProdutosTotal = []
let Brasil = 0
let Exterior = 0
let soma = 0

//Receber dados:
for(let i = 0; i<=4; i++){
    nome = prompt("Qual o nome do produto?")
    preco = parseInt(prompt("Qual o valor do produto?"))
    fabricacao = prompt("Qual o local de fabricacao do produto?")

    let produto = {
        Nome: nome,
        Preco: preco,
        Fabricacao: fabricacao   
    }

    ProdutosTotal.push(produto)
}

for(let i = 0; i<=4; i++){

    //1
    console.log("\nNome: " + ProdutosTotal[i].Nome + "\nPreco: " + ProdutosTotal[i].Preco + "\nFabricação: " + ProdutosTotal[i].Fabricacao)
    
    //2
    if(i == 0){
        caro = ProdutosTotal[i].Preco
    }
    else if(ProdutosTotal[i].Preco > caro ){
        caro = ProdutosTotal[i].Preco
    }

    //3
    if(ProdutosTotal[i].Fabricacao.localeCompare("brasil","pt-br", {sensitivity: "base"}) == 0){
        Brasil++
    }
    else if(ProdutosTotal[i].Fabricacao.localeCompare("exterior","pt-br", {sensitivity: "base"}) == 0){
        Exterior++
    }

    //4
    soma += ProdutosTotal[i].Preco 
}

console.log("O valor mais caro eh:" + caro)
console.log("Fabricacao: \n" + "Brasil: " + Brasil + "\nExterior: " + Exterior)
console.log("A soma dos valores eh: " + soma)


