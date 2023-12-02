<?php
# Variáveis
/*
Os nomes de variáveis sempre começam com o caractere $ (cifrão).
São sensíveis à letra, ou seja, $valor é diferente de $Valor.
Um nome de variável válido deve iniciar com uma letra ou sublinhado.
Nunca deve ser iniciado com um número ou caractere especial.
*/

$idade = 32; // Inteiro
$nome = "Edvaldo"; // String
$altura = 1.74; // Float, double, decimal
$casado = true; // Boolean

// Sinal de = indica atribuição de dados para a variável

// Operadores aritméticos
$numero1 = 19;
$numero2 = 20;

$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$multiplicacao = $numero1 * $numero2;
$divisao = $numero1 / $numero2;
$restoDivisao = $numero1 % 2;

echo "Soma: " . $soma . "<br>";
echo "Subtração: " . $subtracao . "<br>";
echo "Multiplicação: " . $multiplicacao . "<br>";
echo "Divisão: " . $divisao . "<br>";
echo "Resto de divisão: " . $restoDivisao . "<br>";

$numero1 > $numero2; // Maior que
$numero1 >= $numero2; // Maior ou igual a
$numero1 < $numero2; // Menor que
$numero1 <= $numero2; // Menor ou igual a 
$numero1 == $numero2; // Igual a
$numero1 != $numero2; // Diferente de
$numero1 === $numero2; // Mesmo valor e mesmo tipo
$numero1 !== $numero2; // Diferente valor ou diferente de tipo

$texto = "10"; // == true
$numero = 10; // === false

// Operadores de atribuição
$texto .= " 20"; // "10 20" -> ela mesma (variável) e o 20
$numero += 10; // 20 -> ela mesma (variável) + soma dela
$numero -= 10; // 0 -> ela mesma (variável) - subtração dela
$numero *= 10; // 100 -> ela mesma (variável) * multiplicação dela
$numero /= 10; // 1 -> ela mesma (variável) / divisão dela

// Incremento
$numero++;

// Decremento
$numero--;

?>