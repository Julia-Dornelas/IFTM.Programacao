<?php

require_once "Pessoa.php";
require_once "Vendedor.php";
require_once "ItemPedido.php";
require_once "Cliente.php";
require_once "Data.php";
require_once "Produto.php";
require_once "Pedido.php";

class Cliente extends Pessoa
{

    // Atributos

    private $dataCadastro;
    private string $preferencias;

    public function __construct($nome, $cpf, $sexo, $dia, $mes, $ano, $preferencias)
    {
        parent::__construct($nome, $cpf, $sexo, $dia, $mes, $ano );
        $this->dataCadastro = new Data(date('d'), date('m'), date('Y'));
        $this->preferencias = $preferencias;
    }

    
    public function Imprimir() {
        parent::Imprimir();
        echo "A data do cadastro é: " .  $this->dataCadastro->__tostring() . "<br>";
        echo "A preferência é: " . $this->preferencias . "<br>";
    }



    //DATA CADASTRO
    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }
    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;
    }
    //PREFERENCIAS
    public function getPreferencias()
    {
        return $this->preferencias;
    }
    public function setPreferencias($preferencias)
    {
        $this->preferencias = $preferencias;
    }
}
