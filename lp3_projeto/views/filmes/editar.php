<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="page-layout">
    <?php include __DIR__ . '/../layout/nav.php'; ?>

    <div class="content-panel">
        <div class="header-action">
            <h3>Editar Filmes</h3>
        </div>

        <form action="/lp3_projeto/filmes/editar?id=<?= $dado['id'] ?>" method="POST" class="card-form">
            <div class="form-group">
                <label for="filme">Filme:</label>
                <input type="text" id="filme" name="filme" value="<?= htmlspecialchars($dado['filme']) ?>" required class="form-control">
            </div>

            <div class="form-group">
                <label for="diretor">Diretor:</label>
                <textarea class="form-control"  name="diretor" id="diretor"><?= htmlspecialchars($dado['diretor']) ?></textarea>
            </div>

            <div class="form-group">
                <label for="duracao">Duração:</label>
                <input type="text" id="duracao" name="duracao" value="<?= htmlspecialchars($dado['duracao']) ?>" required class="form-control">
            </div>

            <div class="mt-3 d-flex gap-2">
                <button type="submit" class="btn btn-warning">Atualizar</button>
                <a href="/lp3_projeto/filmes" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>