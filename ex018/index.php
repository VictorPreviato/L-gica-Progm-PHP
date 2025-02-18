<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificadores de Acesso</title>
</head>

<body>
    
<?php 

class Funcionario{

    //propriedade com diferentes modificadores de acesso

    public $nome; //pode ser acessado de qualquer lugar
    protected $salario; //pode ser acessado apenas dentro da superclasse e subclasse
    private $cpf; // pode ser acessado apenas dentro da classe

    //construtor para inicializar os valores

    public function __construct($nome, $salario, $cpf)
    {
        $this->nome /*this nome adciona o valor de atributo nome para a variável nome*/ = $nome;
        $this->salario = $salario;
        $this->cpf = $cpf;
    }

    //Método público para exibir o nome do funcionário
    public function exibirNome(){
        echo "Nome: " . $this->nome . "<br>";
    }

    //método protegido para exibir o salário (somente para ubclasses ou na própria classe)
    protected function exibirSalario(){
        
    echo "Salario: R$ " . $this->salario .  "<br>";
    }

    //método privado para exibir o CPF (somente dentro da classe)

    private function exibirCPF(){
        echo "CPF: " .$this->cpf . "<br>";
    }

      //método público parar chamar o método privado e protegido na própria classe

      public function exibirDetalhes(){

        $this->exibirNome();
        $this->exibirSalario();
        $this->exibirCPF();
      }
}

//criando uma instância da classe funcionário

$funcionario1 = new Funcionario("Carlos Silva", 7000, "123.456.789-00");

$funcionario1 -> exibirNome();

echo "<br>";

//acessando o salário direftamente (protegido)
// $funcionario1-> exibirSalario(); //comentado porque gera erro já que o métoo é protegido

//acessando o CPF diretamente (privado)
// $funcionario1-> exibirCPF(); //comentado porque gera erro já que o métoo é privado


//chamando o método público que acesso todos os dados
$funcionario1 -> exibirDetalhes();

?>

</body>

</html>