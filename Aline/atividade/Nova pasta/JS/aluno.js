var nome = parseFloat(prompt('Digite seu nome:'));
var escolha = parseFloat(prompt('Escolha entre "media" e "idade":'));

function calcularMedia() {
    var nota1 = parseFloat(prompt('Digite sua primeira nota:'));
    var nota2 = parseFloat(prompt('Digite sua segunda nota:'));
    var media = (nota1 + nota2) / 2;

    if (media < 6) {
        alert(nome + ', você foi reprovado!');
    } else {
        alert(nome + ', você foi aprovado!');
    }
}

function verificarIdade() {
    var idade = parseFloat(prompt('Digite sua idade:'));
    if (idade < 18) {
        alert(nome + ', você é menor de idade.');
    } else {
        alert(nome + ', você é maior de idade.');
    }
}

if (escolha === 'media') {
    calcularMedia();
} else if (escolha === 'idade') {
    verificarIdade();
} else {
    alert('Opção inválida.');
}

