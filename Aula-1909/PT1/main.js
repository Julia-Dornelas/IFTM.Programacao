const elemento = document.getElementById("externo")

/*target.addEventListener(event, function, useCapture) - muda o elemento quando clica em cima

elemento.addEventListener("click", function(){
    elemento.innerHTML = 'Alguém clicou aqui! 😡'
})*/

const elem = document.getElementById("msg-cont")
let contador = 0

elem.addEventListener("click", function(){
    contador++ 
    elem.innerHTML = `Alguém clicou aqui  ${contador}  vezes! 💩`
})
