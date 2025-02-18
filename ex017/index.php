<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construtor e Destrutor</title>
</head>
<body>
    <?php 
   class Produto{
    //atributo
    public $nome;
    public $preco;

    //Construtor: chamando quando o objeto e criado
    public function __construct($nome, $preco){
        $this->nome = $nome;
        $this->preco = $preco;
        echo "Produto '$this->nome' criando com sucesso! <br>";
    }

    //Destrutor: chamado quando um objeto e destruido
    public function __destruct() {
        echo "Produto '$this->nome' destruido! <br>";
    }

    //Metodo para exibir os detalhes do produto
    public function exibirDetalhes() {
        echo "Nome: $this->nome, Preço: R$ $this->preco <br>";
    }
}

    //Criando um objeto
    $produto1 = new Produto("Camiseta", 39.90); //Cronstrutor chamado aqui
    $produto2 = new Produto("Tênis", 300.00); //Cronstrutor chamado aqui
    $produto1->exibirDetalhes();
    $produto2->exibirDetalhes();

    //Quando o script termina ou o objeto sai de escopo, o destrutor é chamdado
    unset($produto); //Chama o destrutor explicitamente

    //Mais uma classe contruct e destruct

    class ConexaoBanco{
        private $conexao;

        //Construor: simula abrir a conexão com o banco
        public function __construct() {
            $this->conexao = "Conexão ao banco de dados aberta!";
            echo $this->conexao . "<br>";
        }

        //Destruct: simula fechar a conexão com o banco
        public function __destruct() {
            sleep(2); //espera 2 segundos antes de exibir a mensagem
            echo "Conexão ao banco de dados fechada! <br>";
        }

      
    }

    //Criando obejto de conexão
    $conectado = new ConexaoBanco(); //Construtor é chamado aqui




    
    ?>
</body>
</html>