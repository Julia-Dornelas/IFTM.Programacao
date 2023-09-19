const elementoBotao = document.getElementById("evento")

elementoBotao.addEventListener("click", () => {
    const elementoNome = document.getElementById("entrada-nome")
    const  nome = elementoNome.value

    const frase = document.createElement("h2")
    frase.innerHTML = `Olá ${nome}`

    document.body.appendChild(frase)


    console.log(`Olá ${nome}`)
})