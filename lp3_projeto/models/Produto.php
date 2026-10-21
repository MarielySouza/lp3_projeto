<?php

    require_once __DIR__ . '/../config/Database.php';

    class Produto 
    {
        private $db;
        private $tabela = "produtos";

        public function __construct()
        {
            $this->db = Database::getConnection();
        }

        public function listar()
        {
            $stmt = $this->db->query("select * from $this->tabela order by id desc");
            return $stmt->fetchAll();

        }

        public function salvar(string $produto, float $valor, string $descricao, int $categoria_id)
        {
            $sql = "insert into $this->tabela (produto, valor, categoria_id, descricao) values (:produto, :valor, :categoria_id, :descricao)";
            $stmt = $this->db->prepare($sql);
            $values = 
            [
                ':produto' => $produto,
                ':valor' => $valor,
                ':categoria_id' => $categoria_id,
                ':descricao' => $descricao,

            ];
            return $stmt->execute($values);
        }

        public function atualizar(int $id, string $produto, string $descricao, int $categoria_id, float $valor)
        {
            $sql = "update $this->tabela set produto=:produto, valor=:valor, categoria_id=:categoria_id, descricao=:descricao where id=:id";
            $stmt = $this->db->prepare($sql);
            $values = 
            [
                ':produto' => $produto,
                ':valor' => $valor,
                ':catgeoria_id' => $categoria_id,
                ':descricao' => $descricao,
                ':id' => $id,

            ];
            return $stmt->execute($values);
        }

        public function buscarPorId(int $id)
        {
            $sql = "select * from $this->tabela where id =:id";
            $stmt = $this->db->prepare($sql);
            $values = [':id' => $id];
            $stmt->execute($values);
            return $stmt->fetch();
        }

        public function excluir(int $id)
        {
            $sql = "delete from $this->tabela where id = :id";
            $stmt = $this->db->prepare($sql);
            $values = [':id' => $id];
            $stmt->execute($values);
            return $stmt->execute($values);
        }

    }








?>