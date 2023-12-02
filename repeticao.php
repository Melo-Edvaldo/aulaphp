<?php
/*
    Estrutura de Repetição
    Loop

    03 regras básicas:
    - Variável de controle;
    - Incremento
    - Verificação
*/

$controle = 0;

// do while
echo "do while() <br>";
do {
    echo "Valor de controle é: $controle <br>";
    $controle++;
} while($controle < 10);

// while
echo "<br> while() <br>";

while($controle <= 20) {
    echo "Valor de controle é: $controle <br>";
    $controle++;
}

// for
echo "<br> for() <br>";

for($i = 0; $i < 10; $i++) {
    echo "Valor de i é:  $i <br>";
}

?>