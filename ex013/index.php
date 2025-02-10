<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço For e Foreach</title>
</head>

<body>


<?php 

echo "<h4>For</h4>";
//For

for ($i = 1; $i <= 5; $i++){
    echo $i. "<br>"; //imprime  valor de $i e pula para a próxma linha
}

echo "<br>";

for ($a = 1; $a <= 5; $a++) {
    echo "O quadrado de $a é " . ($a * $a) . "<br>";
}

echo "<br><h4>Foreach</h4><br>";

$frutas = ["Maçã", "Banana", "Laranja", "Uva"];

foreach($frutas as $fruta){
echo $fruta . "<br>"; //Imprime o nome de cada fruta
}

echo "<br>";

$idades = [
"João" => 25,
"Maria" => 30,
"Pedro" => 22
];

foreach ($idades as $nome => $idade){
    echo "$nome tem $idade anos. <br>"; //exibe nome e idade
} 

?>

    
</body>


</html>