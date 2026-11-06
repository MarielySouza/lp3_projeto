<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="page-layout">
    <?php include __DIR__ . '/../layout/nav.php'; ?>

    <div class="content-panel">
        <div class="header-action">
            <h3>Cadastrar Novo Livro</h3>
        </div>

        <form action="/lp3_projeto/clientes/adicionar" method="POST" class="card-form">
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" required class="form-control" placeholder="Ex: João">
            </div>

            <div class="form-group">
                <label for="autor">Autor:</label>
                <input type="text"  class="form-control"  name="autor" id="autor" placeholder="Ex: joao@gmail.com">
            </div>


            <div class="form-group">
                <label for="isbn">Isbn:</label>
                <input type="text"  class="form-control"  name="isbn" id="isbn" placeholder="Ex: 123.456.789-11">
            </div>

            <div class="form-group">
                <label for="ano_publicacao">Ano de publicação:</label>
                <input type="date"  class="form-control"  name="ano_publicacao" id="ano_publicacao">
            </div>

            <div class="form-group">
                <label for="sinopse">Sinopse:</label>
                <textarea type="text"  class="form-control"  name="sinopse" id="sinopse"></textarea>
            </div>

            <div class="form-group">
                <label for="genero_id">Gênero:</label>
                <select class="form-select"  name="genero_id" id="genero_id" required>
                    <option value="">Selecione um Gênero</option>
                    <?php foreach ($generos as $genero_id){ ?>
                      <option value="<?= $genero_id['id']?>"><?= $genero_id['genero_id']?></option>
                    <?php } ?>
                </select>
            </div>

             <div class="form-group">
                <label for="criado_em">Criado em:</label>
                <input type="date"  class="form-control"  name="criado_em" id="criado_em">
            </div>

            <div class="mt-3 d-flex gap-2">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="/lp3_projeto/livros" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
