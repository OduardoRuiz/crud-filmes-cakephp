<?php $this->layout = 'header'; ?>

<div class="container mt-5">
    <h2>Editar Categoria</h2>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="data[Categoria][nome]" id="nome" class="form-control" value="<?php echo $categoria['Categoria']['nome']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
