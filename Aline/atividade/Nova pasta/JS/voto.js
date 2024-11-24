var idade = parseFloat(prompt('Digite sua idade: '));
if (idade == 16 || idade == 17) {
    alert ('Voto facultativo');
} else if (idade >= 70) {
    alert ('Voto facultativo');
} else if (idade < 16) {
    alert ('Nao pode votar');
} else {
    alert ('Voce é obrigado a votar');
}
