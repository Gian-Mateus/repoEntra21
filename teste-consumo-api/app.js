const btn = document.querySelector("#enviar");

btn.addEventListener('click', (e) => {
    e.preventDefault();
    let animal = {
        nome: document.querySelector("#nome").value,
        cor: document.querySelector("#cor").value,
        tamanho: document.querySelector("#tamanho").value,
        especie: document.querySelector("#especie").value
    }

    console.log(animal);
    document.querySelectorAll("input").forEach = ""
})