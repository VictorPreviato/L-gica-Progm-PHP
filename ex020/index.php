<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo</title>
</head>


<body>
    
<?php

class Animal{

public function fazerSom(){
    return "O animal faz um som.";
}
}

//subclasse

class cachorro extends Animal {
    public function fazerSom(){
        return "Au au au au";
    }
}

//outra subclasse

class Gato extends Animal {
    public function fazerSom(){
        return "Miaaaaaaaau";
    }
}

//função que utiliza polimorfismo
function emitirSomAnimal(Animal $animal){
    echo $animal->fazerSom() . "<br>";
}

//criar objetos
$cachorro1 = new cachorro();
$gato1 = new Gato();

echo $cachorro1->fazerSom();
echo "<br>" . $gato1->fazerSom();

//chamando a função com diferentes objetos, mas com a mesma assinatura 
echo "<br> <br>";
emitirSomAnimal($cachorro1);
emitirSomAnimal($gato1);


?>

</body>


</html>