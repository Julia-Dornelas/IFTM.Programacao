<?php
class Pessoa
{
    private string $date;
    private string $nome;
    private int $codigo;

    public function __construct($nome, $date, $codigo)
    {
        $this->nome = $nome;
        $this->date = $date;
        $this->codigo = $codigo;
    }

    //NOME
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    //DATA
    public function getDate()
    {
        return $this->date;
    }
    public function setData($date)
    {
        $this->date = $date;
    }
    //CODIGO
    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
}
