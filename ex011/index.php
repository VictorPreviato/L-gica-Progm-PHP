<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array e Matriz</title>
</head>

<body>

<?php 

//criando um array associatvo
$associativo = [
    "nome" => "João",
    "Idade" => 20,
    "cidade" => "São Paulo"
];

//exibindo o array associativo

echo "Array associativo: ";
print_r($associativo);
echo "<br><br>";
print_r($associativo["Idade"]); //chamando pelo índice

$primeiroValor = reset($associativo);//podemos criar uma variável que chama apenas  primeiro índice
echo "<br><br>";

echo $primeiroValor;

echo "<br><br>";

//criando uma array multidirecional
$multidirecional = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

//exibindo um valor na posição [1][2] (4,5,6) -> 6

echo "Valor na posição [1] [2]: " . $multidirecional [1][2];

$array1 = [1,2,3];
$array2 = [4,5,6];

echo "<br> <br>";

//mesclando 2 arrays

$novo_array = array_merge($array1,$array2);

//exibindo o array resultante
echo "Array mesclado: "; 
print_r($novo_array);

echo "<br><br>";

$array3 = [10,20,30,40];

//procurando o valor 30 no array
$indice = array_search(30, $array3);

//exibindo o indice onde o valor foi encorntado
echo "O índice do valor 30 é: " . $indice;

echo "<br><br>";

// verificando se o valor 25 está em array
$existe = in_array(25,$array3);

//exibindo se o valor existe ou não
if($existe){
    echo "O valor 25 está no array.";
} else {
    echo "O valor 25 não está no array.";
}

//matriz 3x2
$matriz = [
    [1,2], //prineira linha
    [4,5], //segunda linha
    [7,8] //terceira linha
];

echo "<br><br>";

//acecessando os elementos da matriz
echo "Elemento na posição [0][1]: " . $matriz[0][1] . "<br><br>"; //saída 2
echo "Elemento na posição [2][0]: " . $matriz[2][0] . "<br><br>"; //saída 7

?>
    
</body>

</html>