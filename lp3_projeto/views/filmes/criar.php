<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="page-layout">
    <?php include __DIR__ . '/../layout/nav.php'; ?>

    <div class="content-panel">
        <div class="header-action">
            <h3>Cadastrar Novo Filme</h3>
        </div>

        <form action="/lp3_projeto/filmes/adicionar" method="POST" class="card-form">
            <div class="form-group">
                <label for="filme">Filme:</label>
                <input type="text" id="filme" name="filme" required class="form-control" placeholder="Ex: O que será de nozes?">
            </div>

            <div class="form-group">
                <label for="diretor">Diretor:</label>
                <textarea class="form-control"  name="diretor" id="diretor" placeholder="Ex: Tarantino"></textarea>
            </div>

            <div class="form-group">
                <label for="duracao">Duração:</label>
                <input class="form-control"  name="duracao" id="duraco" placeholder="Em horas">
            </div>

            <div class="mt-3 d-flex gap-2">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="/lp3_projeto/filmes" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
