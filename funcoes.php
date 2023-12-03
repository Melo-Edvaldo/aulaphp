<?php

/*
Funções nativas
count();
rand()-150;
echo "";
print_r()
array()
*/
function QuebraLinha() {
    echo "<br>";
}
function ImprimirTexto($texto) {
    echo $texto;
    QuebraLinha();
}

ImprimirTexto("Meu texto impresso na tela");
ImprimirTexto("Segundo texto impresso na tela");
ImprimirTexto(198);
ImprimirTexto("Chamada final da função");
function Adicao($n1, $n2) {
    echo $n1 + $n2 . "<br>";
}

Adicao(19, 20);
Adicao(18, 22);

// Ou também
function Somar($n1, $n2) {
    return $n1 + $n2;
}
function Subtrair($n1, $n2) {
    echo $n1 - $n2;
}
function Multiplicar($n1, $n2) {
    echo $n1 * $n2;
}
function Dividir($n1, $n2) {
    echo $n1 / $n2;
}
function Media($n1, $n2) {
    return Somar($n1, $n2) / 2;
}

$soma = Somar(19, 20);
ImprimirTexto($soma);
ImprimirTexto(Somar(18, 22));

function Calculadora($n1, $n2, $operacao) {
    if($operacao == "+") {
        ImprimirTexto(Somar($n1, $n2));
    } else if($operacao == "-") {
        ImprimirTexto(Subtrair($n1, $n2));
    } else if($operacao == "*") {
        ImprimirTexto(Multiplicar($n1, $n2));
    } else if($operacao == "/") {
        ImprimirTexto(Dividir($n1, $n2));
    } else if($operacao == "m") {
        ImprimirTexto(Media($n1, $n2));
    } else {
        ImprimirTexto("Operação inválida");
    }
} 

Calculadora(19, 20, "+");
Calculadora(19, 20, "-");
Calculadora(19, 20, "*");
Calculadora(19, 20, "/");
Calculadora(19, 50, "m");


?>