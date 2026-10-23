<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="page-layout">
    <?php include __DIR__ . '/../layout/nav.php'; ?>

    <div class="content-panel">
        <div class="header-action">
            <h3>Editar Gêneros</h3>
        </div>

        <form action="/lp3_projeto/generos/editar?id=<?= $dado['id'] ?>" method="POST" class="card-form">
            <div class="form-group">
                <label for="nome">Gênero:</label>
                <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($dado['nome']) ?>" required class="form-control">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea class="form-control"  name="descricao" id="descricao" placeholder="Ex: Descrição da roupa"><?= htmlspecialchars($dado['descricao']) ?></textarea>
            </div>

            <div class="mt-3 d-flex gap-2">
                <button type="submit" class="btn btn-warning">Atualizar</button>
                <a href="/lp3_projeto/generos" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>