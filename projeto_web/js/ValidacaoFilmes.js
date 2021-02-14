function validaNome() {
    var nome = document.getElementById("nome_filme");
    if (nome.value == "") {
        nome.style.background = "yellow";
        document.getElementById("erroNome").innerHTML = 
        "O Nome é obrigatório!";
        return false;
    }else{
        nome.style.background = "white";
        document.getElementById("erroNome").innerHTML = "";
    }
    return true;
}
function validaAutor() {
    var autor = document.getElementById("nome_autor");
    if (autor.value == "") {
        autor.style.background = "yellow";
        document.getElementById("erroAutor").innerHTML = 
        "O autor é obrigatório!";
        return false;
    }else{
        autor.style.background = "white";
        document.getElementById("erroAutor").innerHTML = "";
    }
    return true;
}
function validaLancamento() {
    var lancamento = document.getElementById("ano_lancamento");
    if (lancamento.value == "") {
        lancamento.style.background = "yellow";
        document.getElementById("erroLancamento").innerHTML = 
        "O lancamento é obrigatório!";
        return false;
    }else{
        lancamento.style.background = "white";
        document.getElementById("erroLancamento").innerHTML = "";
    }
    return true;
}

function validaPreco() {
    var preco = document.getElementById("preco");
    if (preco.value == "") {
        preco.style.background = "yellow";
        document.getElementById("erroPreco").innerHTML = 
        "O preço é obrigatório!";
        return false;
    }else{
        preco.style.background = "white";
        document.getElementById("erroPreco").innerHTML = "";
    }
    return true;
}

function valida_aluga(){
    alert("Filme alugado com Sucesso!!");
}
