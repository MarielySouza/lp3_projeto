<?php

    require_once __DIR__ . '/../config/Database.php';

    class Livro 
    {
        private $db;
        private $tabela = "livros";

        public function __construct()
        {
            $this->db = Database::getConnection();
        }

        public function listar()
        {
            $stmt = $this->db->query("select * from $this->tabela order by id desc");
            return $stmt->fetchAll();

        }

        public function salvar(string $titulo, string $autor, string $isbn, string $ano_publicacao, string $sinopse, string $capa, int $id_genero, string $criado_em)
        {
            $sql = "insert into $this->tabela (titulo, autor, isbn, ano_publicacao, sinopse, capa, id_genero, criado_em) values (:titulo, :autor, :isbn, :ano_publicacao, :sinopse, :capa, :id_genero, :criado_em)";
            $stmt = $this->db->prepare($sql);
            $values = 
            [
                ':titulo' => $titulo,
                ':autor' => $autor,
                ':isbn' => $isbn,
                ':ano_publicacao' => $ano_publicacao,
                ':sinopse' => $sinopse,
                ':capa' => $capa,
                ':id_genero' => $id_genero,
                ':criado_em' => $criado_em,


            ];
            return $stmt->execute($values);
        }

        public function atualizar(int $id, string $titulo, string $autor, int $isbn, float $ano_publicacao, string $sinopse, string $capa, string $id_genero, string $criado_em)
        {
            $sql = "update $this->tabela set titulo=:titulo, autor=:autor, isbn=:isbn, ano_publicacao=:ano_publicacao, sinopse=:sinopse, capa=:capa, id_genero=:id_genero, :criado_em where id=:id";
            $stmt = $this->db->prepare($sql);
            $values = 
            [
                ':titulo' => $titulo,
                ':autor' => $autor,
                ':id' => $id,
                ':isbn' => $isbn,
                ':ano_publicacao' => $ano_publicacao,
                ':sinopse' => $sinopse,
                ':capa' => $capa,
                ':id_genero' => $id_genero,
                ':criado_em' => $criado_em,

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