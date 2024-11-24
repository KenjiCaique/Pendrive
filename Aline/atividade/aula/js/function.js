var escolha = parseFloat(prompt('Escolha a funcao entre soma e multiplicação'))

function mult(){
    var num1 = parseFloat(prompt('Digite o primeiro número'));
    var num2 = parseFloat(prompt('Digite o segundo número'));
    var mult = num1 * num2;
    console.log(mult);
}
function soma(){
    var num1 = parseFloat(prompt('Digite o primeiro número'));
    var num2 = parseFloat(prompt('Digite o segundo número'));
    var soma = num1 + num2;
    console.log(soma);
}

if (escolha === soma){
    soma();
}else if(escolha === mult){
    mult();
}else{
    console.log('Função não encontrada');
}