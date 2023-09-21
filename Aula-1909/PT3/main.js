/*Crie uma página que receba como entrada o nome de um livro, o autor, o numero 
de páginas e o país de lançamento
- Crie um botão escrito: Gerar div com livro
- Gere uma div com as seguintes configurações:
        *Titulo sendo um elementop h2
        *Nome do autor sendo um h3
        *Numero de páginas e o país com elemento p 
 Sempre que um usuário clicar em Gerar div com livro, o único livro que deve
 aparecer na tela é o atual (os anteriores não devem se manter na página)
 - Fique livre para estilizar o css*/

 document.getElementById("gerarDiv").addEventListener("click", function() {
       const nomeLivro = document.getElementById("nomeLivro").value;
       const autorLivro = document.getElementById("autorLivro").value;
       const numPaginas = document.getElementById("numPaginas").value;
       const paisLancamento = document.getElementById("paisLancamento").value;''

       // Atualiza o conteúdo da div com as informações do livro atual
       const livroTitulo = document.getElementById("livro-titulo");
       const livroAutor = document.getElementById("livro-autor");
       const livropgs = document.getElementById("livro-pgs");
       const livropais = document.getElementById("livro-pais");

       livroTitulo.innerHTML = nomeLivro;
       livroAutor.innerHTML = `Autor: ${autorLivro}`;
       livropgs.innerHTML = `Número de Páginas: ${numPaginas}`;
       livropais.innerHTML = `País de Lançamento: ${paisLancamento}`;


   });

