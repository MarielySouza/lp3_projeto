<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="page-layout">
    <?php include __DIR__ . '/../layout/nav.php'; ?>

    <div class="content-panel">
        <div class="header-action">
            <h3>Cadastrar Novo Produto</h3>
        </div>

        <form action="/lp3_projeto/produtos/adicionar" method="POST" class="card-form">
            <div class="form-group">
                <label for="ptoduto">Produto:</label>
                <input type="text" id="produto" name="produto" required class="form-control" placeholder="Ex: Shampoo">
            </div>

            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="number" id="valor" name="valor" step="0.01" required class="form-control" placeholder="Ex: 19.99">
            </div>

            <div class="form-group">
                <label for="categoria_id">Categoria:</label>
                <select class="form-select"  name="categoria" id="categoria" required>
                    <option value="">Selecione uma Categoria</option>
                    <?php foreach ($categorias as $categoria){ ?>
                      <option value="<?= $categoria['id']?>"><?= $categoria['categoria']?></option>
                    <?php } ?>
                </select>
            </div>


            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea class="form-control"  name="descricao" id="descricao" placeholder="Ex: Anti Caspa"></textarea>
            </div>

            <div class="mt-3 d-flex gap-2">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="/lp3_projeto/produtos" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
