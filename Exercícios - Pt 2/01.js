/*1. Crie um array de 5 posições e preencha com as
notas de 5 alunos. Após isso, imprima no console:
1. A nota mais alta
2. A nota mais baixa
3. A média das notas*/

let array = []
let Maior = 0, Menor = 0, Soma = 0
let Media

parseFloat (Soma)
parseFloat (Maior)
parseFloat (Menor)

for (let i=0; i<5; i++){
    array.push(parseFloat (prompt ("Digite-um numero:")))
}

for (let i=0; i<5; i++){
    Soma += array [i]

    if(i==0) {
        Maior = array [i]
        Menor = array[i]
    }
    else if(array [i] > Maior){
        Maior = array [i]
    }
    else if(array [i] < Menor){
        Menor = array [i]
    }    
}

Media = Soma/5

console. log("Maior: " + Maior +"'\nMenor: " + Menor + "\nmédia: " + Media)