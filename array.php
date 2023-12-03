<?php
//
$carros = ["BMW", "Gol", "Saveiro", "Uno", "Palio"];

echo "<pre>";
print_r($carros);
echo "</pre>";

echo "<ul>";
for($i = 0; $i < count($carros); $i++) {
    echo "<li>".$carros[$i]."</li>";
}
echo "</ul>";

//Outras formas de apresentação da array
$carros = array();

echo "<pre>";
print_r($carros);
echo "</pre>";

$carros = array("BMW", "Gol", "Saveiro", "Uno", "Palio");

echo "<pre>";
print_r($carros);
echo "</pre>";

$carros = array();
$carros[1] = "Gol";
$carros[2] = "Saveiro";
$carros[3] = "Uno";
$carros[4] = "Palio";

echo "<pre>";
print_r($carros);
echo "</pre>";

array_push($carros, "BMW");
array_push($carros, "S10");

echo "<pre>";
print_r($carros);
echo "</pre>";

array_pop($carros);

echo "<pre>";
print_r($carros);
echo "</pre>";

// Chave e valor
$pessoa = array("Nome" => "Edvaldo", "Idade" => 48, "Altura" => 1.74, "Casado" => true);

echo "<pre>";
print_r($pessoa);
echo "</pre>";

$listaPessoas = array();

$pessoa2 = array("Nome" => "Mary", "Idade" => 18, "Altura" => 1.60, "Casado" => false);
$pessoa3 = array("Nome" => "Peter", "Idade" => 25, "Altura" => 1.80, "Casado" => false);

$listaPessoas[0] = $pessoa;
$listaPessoas[1] = $pessoa2;
array_push($listaPessoas, $pessoa3);
array_push($listaPessoas, $carros);

echo "<pre>";
print_r($listaPessoas);
echo "</pre>";

echo $listaPessoas[3][1];

?>