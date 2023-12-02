<?php
/*
    Estrutura de decisão
    if
*/

$numero = 19;
$texto = "19";

// Comparação de mesmo valor
if($numero == $texto) {
    echo "A variável \$numero: $numero é igual a variável \$texto: $numero";
} else {
    echo "Não são iguais";
}

// Comparação de valor igual e do mesmo tipo
echo "<br>";

if($numero === $texto) {
    echo "São iguais e do mesmo tipo";
} else if($numero !== $texto) {
    echo "São diferentes no valor ou diferentes no tipo";
}

// Se o resto da divisão por 2 é igual a zero
echo "<br>";

if($numero % 2 == 0) {
    echo "Número par";
} else {
    echo "Número ímpar";
}

echo "<br>";

if(19 > 20) {
    echo "Número é maior";
} else if(19 == 20) {
    echo "Número igual";
} else {
    echo "19 não é maior que 20";
}


?>