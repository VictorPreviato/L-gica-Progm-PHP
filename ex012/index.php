<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While e do While</title>
</head>

<body>
    
<?php 

echo "<h3> Loop While:</h3> <br>";

//while

$i = 1;

while ($i <=5) {
    echo $i . "<br>"; //imprime o valord e $1
    $i++; //i + 1
}

echo "<br>";

echo "<h3>Loop While de Números Pares:</h3> <br> ";

$f = 2;

while ($f <= 10)  {
    echo $f. "<br>";
    $f++; //encrementa de 2 em 2
}

echo "<h3>Loop Do While:</h3> <br> ";


$g = 2;

do {
  echo $g . "<br>";
$g++;
} while ($g <= 4);


?>

</body>

</html>