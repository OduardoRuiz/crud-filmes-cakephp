<?php $this->layout = 'header'; ?>

<div class="container m-3">
    <h1 class="h4">Editar Categoria</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="m-3 mb-0" for="nome">Nome</label>
            <input type="text" name="data[Categoria][nome]" id="nome" class="m-3 form-control" value="<?php echo $categoria['Categoria']['nome']; ?>">
        </div>
        <button type="submit" class="btn btn-sm btn-success m-3">Salvar</button>
    </form>
</div>
