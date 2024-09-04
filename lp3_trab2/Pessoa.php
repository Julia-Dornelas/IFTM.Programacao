
<?php
require_once "Pessoa.php";
require_once "Vendedor.php";
require_once "ItemPedido.php";
require_once "Cliente.php";
require_once "Data.php";
require_once "Produto.php";
require_once "Pedido.php";

abstract class  Pessoa
{
    private string $nome;
    private string $cpf;
    private Data $dataNascimento;
    private string $sexo;

    public function __construct($nome, $cpf, $sexo, $dia, $mes, $ano)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dataNascimento = new Data ($dia, $mes, $ano);
        $this->sexo = $sexo;
    }

    public function Imprimir(){
        echo "O nome é: " . $this->nome . "<br>";
        echo "O CPF é: " . $this->cpf . "<br>";
        echo "A data de nascimento é: " . $this->dataNascimento->__tostring() . "<br>";
        echo "O sexo é: " . $this->sexo . "<br>";
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
}
