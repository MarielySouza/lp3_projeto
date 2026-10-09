<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="page-layout">
    <?php include __DIR__ . '/../layout/nav.php'; ?>

    <div class="content-panel">
        <div class="header-action">
            <h3>Cadastrar Novo Cliente</h3>
        </div>

        <form action="/lp3_projeto/clientes/adicionar" method="POST" class="card-form">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required class="form-control" placeholder="Ex: João">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email"  class="form-control"  name="email" id="email" placeholder="Ex: joao@gmail.com">
            </div>


            <div class="form-group">
                <label for="cpf">Cpf:</label>
                <input type="text"  class="form-control"  name="cpf" id="cpf" placeholder="Ex: 123.456.789-11">
            </div>

            <div class="form-group">
                <label for="salario">Salario:</label>
                <input type="text"  class="form-control"  name="salario" id="salario">
            </div>

             <div class="form-group">
                <label for="sexo">Sexo:</label>
                <select class="form-select" aria-label="Default select example" name="sexo">
                    <option selected>Selecione um Gênero</option>
                    <option value="F">Feminino</option>
                    <option value="M">Masculino</option>
                    <option value="O">Outro</option>
                </select>
            </div>

            <div class="form-group">
                <label for="data">Data de Nascimento:</label>
                <input type="date"  class="form-control"  name="data" id="data">
            </div>

            <div class="form-group">
                <label for="obs">Observações:</label>
                <textarea type="text"  class="form-control"  name="obs" id="obs"></textarea>
            </div>

            <div class="mt-3 d-flex gap-2">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="/lp3_projeto/clientes" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
