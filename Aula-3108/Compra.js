/*Crie uma função que faça a leitura de preço de 3itens. 
Crie outra função que soma esses itens.
Por fim, crie outra função que imprima essa soma.*/

let precos
let valores = []
let total = 0

function preco(array){
    for(let i = 0; i<=2; i++){
        precos = parseInt(prompt("Qual o valor do produto?"))
        array.push(precos)
    }
}

function soma(array){
    for(let i = 0; i <= 2; i++){
        total += array[i]
    }
    return total
}

preco(valores)

console.log("Preco: " + valores)
console.log("Soma dos precos: " + soma(valores))        