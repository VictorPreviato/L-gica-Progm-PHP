<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herença e Polimorfismo</title>

</head>


<body>

<?php 

//classe base
class Animal{

    //propriedade o atributo
    public $nome;

    //método
    public function __construct($nome)
    { $this->nome = $nome;
        
    }

    public function falar(){

        return "O animal faz um som.";
    }
}

//subclasse que herda de Animal 

class Cachorro extends Animal { # extends é usado para atriuir uma subclasse 

//sobescrevendo o método falar 
       public function falar(){
        return "O cachorro late";
       }    
}

//Croamdp i, pbjeto da classe Cachorro
$cachorro = new Cachorro("Rex");
echo $cachorro->nome . "<br>";

//chamando o método sobrescrito da subclasse
echo $cachorro->falar();

$Animal = new Animal("Nami");

echo "<br>" . $Animal->falar();


?>
    
</body>


</html>