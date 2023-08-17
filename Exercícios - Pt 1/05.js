/*Crie um código em Javascript que leia o peso
e a altura de uma pessoa (use o comando
prompt). Em seguida, calcule o IMC (use as
medidas de kg e metros) da pessoa e
classifique-a segundo a tabela de IMC
abaixo:IMC = Peso ÷ (Altura × Altura)*/

let peso = prompt("Qual seu peso?")
let altura = prompt("Qual sua altura?")

parseFloat(peso)
parseFloat(altura)

let imc = peso / (altura * altura)

if(imc<=18.5){
    console.log("Abaixo do peso")
}
else if(imc>=18.6 && imc<=24.9){
console.log("Peso ideal. Parabéns!")
}
else if(imc>=25 && imc<=29.9){
    console.log("Levemente acima do peso")
}
else if(imc>=30 && imc<=34.9){
    console.log("Obesidade grau I")
}
else if(imc>=35 && imc<=39.9){
    console.log("Obesidade grau II(severa)")
}
else if(imc>=40){
    console.log("Obesidade grau III (mórbida")
}