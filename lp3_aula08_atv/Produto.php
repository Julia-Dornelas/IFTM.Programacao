<?php

class Produto
{
    public $nome;
    public $preco;
    public $estoque;

    public function valorTotal(){
        $valor = $this->preco * $this->estoque;
        echo "$this->nome, possui R$" . $valor . " reais no estoque <br>";
    }
    public function disponiblidade()
    {
        if($this->estoque > 0){
            echo "Produto disponível. <br> <br>";
        }
        else{
            echo "Produto indisponível. <br> <br>";
        }
    }
}
