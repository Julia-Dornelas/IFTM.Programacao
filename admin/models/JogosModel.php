<?php

use PSpell\Config;

require_once "Conexao.php";
require_once "Jogos.php";

class JogosModel
{

    private $tabela = "jogos";

    public function create(Jogos $c)
    {
        try{
            $sql = "insert into $this->tabela (jogo, numero_integrantes, regras) values (?,?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getJogo());
            $stmt->bindValue(2, $c->getNumeroIntegrantes());
            $stmt->bindValue(3, $c->getRegras());
            
            return $stmt->execute();
        } catch(PDOException $e) {
            echo "Erro: ". $e->getMessage();
            echo "Número: ". (int)$e->getCode();
        }
    }
    public function read()
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Jogos');
        $stmt->execute();
        return $stmt->fetchAll();
    }
 
    public function findId($id)
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela where id=?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Jogos');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Jogos $c)
    {
        try{
            $sql = "update $this->tabela set jogos=?, numero_integrantes=?, regras? where id=?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getJogo());
            $stmt->bindValue(2, $c->getNumeroIntegrantes());
            $stmt->bindValue(3, $c->getRegras());
            return $stmt->execute();
        } catch(PDOException $e) {
            echo "Erro: ". $e->getMessage();
            echo "Número: ". (int)$e->getCode();
        }
    }
    public function delete($id)
    {
        try{
            $sql = "delete from $this->tabela where id=?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            return $stmt->execute();
        } catch(PDOException $e) {
            echo "Erro: ". $e->getMessage();
            echo "Número: ". (int)$e->getCode();
        }   
    }
}
