<?php

use PSpell\Config;

require_once "Conexao.php";
require_once "Categoria.php";

class CategoriaModel
{

    private $tabela = "categorias";

    public function create(Categoria $c)
    {
        try{
            $sql = "insert into $this->tabela (nome, descricao) values (?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNome());
            $stmt->bindValue(2, $c->getDescricao());
            return $stmt->execute();
        } catch(PDOException $e) {
            echo "Erro: ". $e->getMessage();
            echo "Número: ". (int)$e->getCode();
        }
    }
    public function read()
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Categoria');
        $stmt->execute();
        return $stmt->fetchAll();
    }
 
    public function findId($id)
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela where id=?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Categoria');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Categoria $c)
    {
        try{
            $sql = "update $this->tabela set nome=?, descricao=? where id=?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNome());
            $stmt->bindValue(2, $c->getDescricao());
            $stmt->bindValue(3, $c->getId());
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
