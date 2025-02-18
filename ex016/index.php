<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos</title>
</head>
<body>
    <?php

    class Carro {
        //Propriedades ou atriutos
        public $marca;
        public $modelo;
        public $ano;


        //Método (Função dentro da classe)
        public function exibirDetalhe() {
            echo "Marca: " . $this->marca . "<br>";
            echo "Modelo: " . $this->modelo . "<br>";
            echo "Ano: " . $this->ano . "<br>"; 
        }
    }

    //Instância
    $meuCarro = new Carro ();
    $meuCarro->marca = "Toyota";
    $meuCarro->modelo = "Corolla";
    $meuCarro->ano = 2023;
    
    $meuCarro->exibirDetalhe();//Exibir os detalhes do carro

    echo "<br>";

    //Nova classe
    class Pessoa{
        //Propriedades ou atributos
        public function saudacao(){
            echo "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos, <br>";
        } 
    }

    $joao = new Pessoa();
    $joao->nome = "João";
    $joao->idade = 30;
    
    $joao->saudacao(); //exibe a saudação com os dados do João
?>



</body>
</html>