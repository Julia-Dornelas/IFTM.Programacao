/*I) Faça um código em JS que, dada uma entrada OPERAÇÃO pelo usuário
realize um dos seguintes cálculos:
1- Subtração entre 2 números
2- Multiplicação entre 2 números
3- Divisão entre 2 números
4- Somatório de 4 números
Todos os valores devem ser digitados pelo usuário via prompt.*/

let num1 = prompt("Digite um numero:")
let num2 = prompt("Digite outro numero:")

parseFloat(num1)
parseFloat(num2)

let opção = prompt("Digite uma opção:")

parseInt(opção)

if(opção == 1){
    console.log(num1-num2)
}
else if(opção == 2){
    console.log(num1*num2)
}
else if(opção == 3){
    console.log(num1/num2)
}
else if(opção == 4){
    let num3 = prompt("Digite um terceiro número:")
    let num4 = prompt("Digite o último número:")
    console.log(num1+num2+num3+num4)
}
else {
    console.log("Opção Inválida")
}