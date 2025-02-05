<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>

<?php 

//criação de array indxado

$array = [10, 20, 30, 40];

//exibindo o array

echo "Array original: ";
print_r($array); //print_r() exibe o array de forma legível

echo "<br> <br>";

//adicionando um valor ao final de um array

$array[] = 50;

//exibindo o array atualizado
echo "Array após adicionar 50: ";
print_r($array);

echo "<br> <br>";

//alterando a posição 1 para 25

$array[1] = 25;

echo "Array após alterar o valor na posição 1 para 25: ";
print_r($array);

echo "<br> <br>";

//removendo o valor no índice 2

unset($array[2]);

//array sem reorganização de índice

print_r($array);

echo "<br> <br>";

//reorganizando os índices do array
$array = array_values($array);

//exibindo o array após remover o índice

echo "Array após remover o valor no índice 2: ";
print_r($array);


echo "<br> <br>";
$array[] = 19;

//ordenando o array de forma crescente
sort($array);

//exibindo o array ordenado
echo "Array após ordernar os valores: ";
print_r($array);

?>
    
</body>
</html>