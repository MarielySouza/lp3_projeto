<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="page-layout">
    <?php include __DIR__ . '/../layout/nav.php'; ?>

    <div class="content-panel">
        <div class="header-action">
            <h3>Editar Clientes</h3>
        </div>

        <form action="/lp3_projeto/clientes/editar?id=<?= $dado['id'] ?>" method="POST" class="card-form">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($dado['nome']) ?>" required class="form-control" />
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control"  name="email" id="email" placeholder="Ex: Descrição da roupa" value="<?= htmlspecialchars($dado['email']) ?>" />
            </div>

            <div class="form-group">
                <label for="cpf">Cpf:</label>
                <input type="text"  class="form-control"  name="cpf" id="cpf" placeholder="Ex: 123.456.789-11" value="<?= $dado['cpf'] ?>" />
            </div>

            <div class="form-group">
                <label for="salario">Salario:</label>
                <input type="text"  class="form-control"  name="salario" id="salario" value="<?= $dado['salario'] ?>" />
            </div>

             <div class="form-group">
                <label for="sexo">Sexo:</label>
                <select class="form-select" aria-label="Default select example" name="sexo">
                    <option>Selecione um Gênero</option>
                    <option <?= $dado['sexo'] == 'F' ? 'selected' : '' ?> value="F">Feminino</option>
                    <option <?= $dado['sexo'] == 'M' ? 'selected' : '' ?> value="M">Masculino</option>
                    <option <?= $dado['sexo'] == 'O' ? 'selected' : '' ?> value="O">Outro</option>

                </select>
            </div>

            <div class="form-group">
                <label for="data">Data de Nascimento:</label>
                <input type="date"  class="form-control"  name="data" id="data" value="<?= htmlspecialchars($dado['data']) ?>"></input>
            </div>

            <div class="form-group">
                <label for="obs">Observações:</label>
                <textarea class="form-control" name="obs" id="obs"><?= htmlspecialchars($dado['obs']) ?></textarea>
            </div>

            <div class="mt-3 d-flex gap-2">
                <button type="submit" class="btn btn-warning">Atualizar</button>
                <a href="/lp3_projeto/clientes" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>