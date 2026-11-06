<?php

class LivroController
{
    private $model;
    private $generoModel;

    public function __construct()
    {
        $this->model = new Livro();
        $this->generoModel = new Genero();
    }

    public function index()
    {
        $dados = $this->model->listar();
        require __DIR__ . '/../views/livros/index.php';
    }

    public function adicionar()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST')
            {
                $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
                $autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_SPECIAL_CHARS);
                $isbn = filter_input(INPUT_POST, 'isbn', FILTER_SANITIZE_SPECIAL_CHARS);
                $ano_publicacao  = filter_input(INPUT_POST, 'ano_publicacao', FILTER_SANITIZE_NUMBER_INT);
                $sinopse = filter_input(INPUT_POST, 'sinopse', FILTER_SANITIZE_SPECIAL_CHARS);
                $capa = filter_input(INPUT_POST, 'capa', FILTER_SANITIZE_SPECIAL_CHARS);
                $genero_id = filter_input(INPUT_POST, 'genero_id', FILTER_VALIDATE_INT);
                $criado_em  = filter_input(INPUT_POST, 'criado_em', FILTER_SANITIZE_NUMBER_INT);
            


                if($titulo && $autor && $isbn && $ano_publicacao && $sinopse && $capa && $genero_id && $criado_em)
                    {
                        $this->model->salvar($titulo, $autor, $isbn, $ano_publicacao, $sinopse, $capa, $genero_id, $criado_em);
                        header('Location: /lp3_projeto/livros');
                        exit;
                    }
            }
        require __DIR__ . '/../views/livros/criar.php';
    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if(!$id)
            {
                header('Location: /lp3_projeto/livros');
                exit;
            }

        //Verificica se houve post e faz a gravação dos dados no banco
        if($_SERVER['REQUEST_METHOD'] === 'POST')
            {
                $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
                $autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_SPECIAL_CHARS);
                $isbn = filter_input(INPUT_POST, 'isbn', FILTER_SANITIZE_SPECIAL_CHARS);
                $ano_publicacao  = filter_input(INPUT_POST, 'ano_publicacao', FILTER_SANITIZE_NUMBER_INT);
                $sinopse = filter_input(INPUT_POST, 'sinopse', FILTER_SANITIZE_SPECIAL_CHARS);
                $capa = filter_input(INPUT_POST, 'capa', FILTER_SANITIZE_SPECIAL_CHARS);
                $genero_id = filter_input(INPUT_POST, 'genero_id', FILTER_VALIDATE_INT);
                $criado_em  = filter_input(INPUT_POST, 'criado_em', FILTER_SANITIZE_NUMBER_INT);

                if($titulo && $autor && $isbn && $ano_publicacao && $sinopse && $capa && $genero_id && $criado_em)
                    {
                        $this->model->atualizar($id, $titulo, $autor, $isbn, $ano_publicacao, $sinopse, $capa, $genero_id, $criado_em);
                        header('Location: /lp3_projeto/livros');
                        exit;
                    }
            }
        //Busca dados do registro e carrega tela com os dados
        $dado = $this->model->buscarPorId($id);

        if(!$dado)
            {
                header('Location: /lp3_projeto/livros');
                exit;
            }

        require __DIR__ . '/../views/livros/editar.php';
    }

    public function excluir()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if($id)
            {
                $this->model->excluir($id);
            }

        header('Location: /lp3_projeto/livros');
        exit;
    }


}




?>