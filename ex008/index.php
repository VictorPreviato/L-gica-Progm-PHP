<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional If, Else e Elseif</title>
</head>
<body>

<?php 

//condicional if

if(1 < 2) {
    echo "1 é menor <br> <br>";
} //ao executarmos apenas o if ele irá dar retorno apenas em caso de um valor verdadeiro

$idade = 16;

if ($idade >= 18){
    echo "Você é maior de idade";
} else {
        echo "Você é menor de idade. <br> <br>";
    }


//condicional else

$a = 10;
$b = 14;

if($a == $b) {
    echo "A variável A é igual a B"; //true
} else {
    echo "A variável A é diferente de B <br> <br>";
}

//condicional elseif

$idadepessoa = 25;

if ($idadepessoa < 13) {
    echo "Você é uma criança."; 
} else if ($idadepessoa >= 13 && $idadepessoa <= 19) {
    echo "Você é um adolescente";
} elseif ($idadepessoa >= 20 && $idadepessoa <=59) {
    echo "Você é um adulto.";
} else {
    echo "Você é um idoso.";
}

?>
    
</body>
</html>