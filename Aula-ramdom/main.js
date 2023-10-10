const nomesFemininos = ['Júlia Pinheiros', 'Atena Silva', 'Marcia Schulz', 'Sara Gonçalves', 'Paula Souza']
const nomesMasculinos = ['Mateus Carvalho', 'Paulo Gomes', 'Manoel Viana', 'Silvio Salviano', 'João Silva']
const profissoes = ['Desempregado(a)', 'Professor(a)', 'Programador(a)', 'Advogado(a)', 'Medico(a)', 'Engenheiro(a)', 'Agricultor(a)', 'Pedreiro(a)', 'Estudante', 'Cozinheiro(a)']

const btn = document.getElementById('gerar')

btn.addEventListener('click', () => {
    const img = document.getElementById('imgPessoa')
    const nome = document.getElementById('nomePessoa')
    const profissao = document.getElementById('profissaoPessoa')
    const id = parseInt(Math.random() * (10 - 1 + 1) + 1)

    img.setAttribute('src', `./users/${id}.jpg`)

    if(id <= 5){
        nome.innerHTML = nomesFemininos[parseInt(Math.random() * (5 - 0) + 0)]
        profissao.innerHTML = profissoes[parseInt(Math.random() * (10 - 0) + 0)]
    }
    else{
        nome.innerHTML = nomesMasculinos[parseInt(Math.random() * (5 - 0) + 0)]
        profissao.innerHTML = profissoes[parseInt(Math.random() * (10 - 0) + 0)]        
    }
})
