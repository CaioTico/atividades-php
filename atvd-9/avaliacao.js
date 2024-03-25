function adicionarNome()
{
    var nome = document.getElementById("nome").value;
    var nomes = document.getElementById("nomes")
    var li = document.createElement("li")
    li.textContent = nome;
    nomes.appendChild(li)

    // Adiciona o nome ao armazenamento local
    var nomesArmazenados = localStorage.getItem("nomes") || "[]";
    var nomesArray = JSON.parse(nomesArmazenados)
    nomesArray.push(nome)
    localStorage.setItem("nomes", JSON.stringify(nomesArray))
}

function consultarNomes()
{
    // Obtém os nomes armazenados do armazenamento local
    var nomesArmazenados = localStorage.getItem("nomes")
    var nomesArray = JSON.parse(nomesArmazenados)

    // Exibe os nomes armazenados na lista
    var nomes = document.getElementById("nomes")
    nomes.innerHTML = ""
    for (var i = 0; i < nomesArray.length; i++) {
        var li = document.createElement("li")
        li.textContent = nomesArray[i]
        nomes.appendChild(li)
    }
}