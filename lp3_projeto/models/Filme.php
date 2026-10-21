<?php

    require_once __DIR__ . '/../config/Database.php';

    class Filme 
    {
        private $db;
        private $tabela = "filmes";

        public function __construct()
        {
            $this->db = Database::getConnection();
        }

        public function listar()
        {
            $stmt = $this->db->query("select * from $this->tabela order by id desc");
            return $stmt->fetchAll();

        }

        public function salvar(string $filme, string $diretor, float $duracao)
        {
            $sql = "insert into $this->tabela (filme, diretor, duracao) values (:filme, :diretor, :duracao)";
            $stmt = $this->db->prepare($sql);
            $values = 
            [
                ':filme' => $filme,
                ':diretor' => $diretor,
                ':duracao' => $duracao,

            ];
            return $stmt->execute($values);
        }

        public function atualizar(int $id, string $filme, string $diretor, float $duracao)
        {
            $sql = "update $this->tabela set filme=:filme, diretor=:diretor duracao=:duracao where id=:id";
            $stmt = $this->db->prepare($sql);
            $values = 
            [
                ':filme' => $filme,
                ':diretor' => $diretor,
                ':duracao' => $duracao,
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