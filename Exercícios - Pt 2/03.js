/*Crie um código que pergunte ao usuário quantas
vezes ele deseja rolar um dado. Após o usuário fazer
essa entrada, role um dado com valores de 1 a 6 de
forma aleatória e imprima os valores na tela. Dica:
pesquise sobre a função random. */

let Vezes = parseInt (prompt ("Quantas vezes deseja rolar o dado?"))

for (let i=0; i<Vezes; i++){
    console.log(parseInt(Math.random() * (6 - 1) + 1))
}
