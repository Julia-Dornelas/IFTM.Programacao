/*Faça um código em JS que receba vários
números. Quando for digitado o valor zero, a
execução do código deve encerrar e deverão
ser mostrados os seguintes dados:
❖ Quantos números positivos foram digitados.
❖ Quantos números negativos foram digitados.
❖ Quantos números pares foram digitados.
❖ Quantos números ímpares foram digitados.*/

let array = []
let Contador = 0
let Positivos = 0, Negativos = 0, Pares = 0, Impares = 0

do{
    array.push(parseFloat(prompt("Mostre um numero:")))

    if (array [Contador ] == 0){
        break
    }
    else if (array [Contador ] > 0){
        Positivos++
    }
    else if (array [Contador ] < 0) { 
        Negativos++
    }
    if (array [Contador ] % 2 == 0) {
        Pares++
    }
    else{
        Impares++
    }

    Contador++
}while(1)

console.log("Positivos: " + Positivos + "\nNegativos: " + Negativos + "\nPares:" + Pares + "\nImpares:" + Impares) 
