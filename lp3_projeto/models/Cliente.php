<?php

    require_once __DIR__ . '/../config/Database.php';

    class Cliente 
    {
        private $db;
        private $tabela = "clientes";

        public function __construct()
        {
            $this->db = Database::getConnection();
        }

        public function listar()
        {
            $stmt = $this->db->query("select * from $this->tabela order by id desc");
            return $stmt->fetchAll();

        }

        public function salvar(string $nome, string $email, int $cpf, float $salario, string $sexo, string $data, string $obs)
        {
            $sql = "insert into $this->tabela (nome, email, cpf, salario, sexo, data, obs) values (:nome, :email, :cpf, :salario, :sexo, :data, :obs)";
            $stmt = $this->db->prepare($sql);
            $values = 
            [
                ':nome' => $nome,
                ':email' => $email,
                ':cpf' => $cpf,
                ':salario' => $salario,
                ':sexo' => $sexo,
                ':data' => $data,
                ':obs' => $obs,


            ];
            return $stmt->execute($values);
        }

        public function atualizar(int $id, string $nome, string $email, int $cpf, float $salario, string $sexo, string $data, string $obs)
        {
            $sql = "update $this->tabela set nome=:nome, email=:email, cpf=:cpf, salario=:salario, sexo=:sexo, data=:data, obs=:obs where id=:id";
            $stmt = $this->db->prepare($sql);
            $values = 
            [
                ':nome' => $nome,
                ':email' => $email,
                ':id' => $id,
                ':cpf' => $cpf,
                ':salario' => $salario,
                ':sexo' => $sexo,
                ':data' => $data,
                ':obs' => $obs,

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