<?php $this->layout = 'header'; ?>

<div class="container m-5">
    <h2 class="h4">Adicionar Filme</h2>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="mt-2 mb-1" for="categoria_id">Categoria</label>
            <select name="data[Filme][categoria_id]" id="categoria_id" class="form-control">
                <?php foreach ($categorias as $categoriaId => $categoriaNome): ?>
                    <option value="<?php echo $categoriaId; ?>"><?php echo $categoriaNome; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label class="mt-2 mb-1" for="titulo">Título</label>
            <input type="text" name="data[Filme][titulo]" id="titulo" class="form-control">
        </div>
        <div class="form-group">
            <label class="mt-2 mb-1 d-block" for="capa">Capa</label>
            <input type="file" name="data[Filme][capa]" id="capa" class="form-control-file">
        </div>
        <div class="form-group">
            <label class="mt-2 mb-1" for="sinopse">Sinopse</label>
            <textarea name="data[Filme][sinopse]" id="sinopse" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-sm btn-success mt-3">Salvar</button>
    </form>
</div>
