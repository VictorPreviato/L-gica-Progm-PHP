<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
</head>


<body>

<?php 

function saudacao(){
    echo "Olá, seja bem-vindo ao PHP!";
}

saudacao();//Chamando a função

echo "<br><br>";

function somar($a,$b){
    return $a + $b;
}

$resultado = somar(5, 3); //Chamando a função e passando so argumentos
echo "Resultado da soma: " . $resultado;

echo "<br><br>";
$resultado1 = somar(8, -2);
echo "Resltado da soma: " . $resultado1; //Saída

echo "<br><br>";

Function saudacaoPersonalizada($nome = "Visitante"){
    echo "Olá $nome! Bem-vindo ao site!";
} 

saudacaoPersonalizada(); //chamada sem argumento, usa o valor padraõ
echo "<br><br>";
saudacaoPersonalizada("Carlos"); //chamada com argumento

?>
    
</body>


</html>