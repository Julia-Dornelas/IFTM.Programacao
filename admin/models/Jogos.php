<?php

class Jogos
{
    private int $id;
    private string $jogo;
    private string $numero_integrantes;
    private string $regras;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getJogo()
    {
        return $this->jogo;
    }

    public function setJogo($jogo)
    {
        $this->jogo = $jogo;
    }

    public function getNumeroIntegrantes()
    {
        return $this->numero_integrantes;
    }

    public function setNumeroIntegrantes($numero_integrantes)
    {
        $this->numero_integrantes = $numero_integrantes;
    }

    public function getRegras()
    {
        return $this->regras;
    }

    public function setRegras($regras)
    {
        $this->regras = $regras;
    }
}
