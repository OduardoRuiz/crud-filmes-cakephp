<?php $this->layout = 'header'; ?>

<div class="container mt-5">
    <h2>Adicionar Filme</h2>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="categoria_id">Categoria</label>
            <select name="data[Filme][categoria_id]" id="categoria_id" class="form-control">
                <?php foreach ($categorias as $categoriaId => $categoriaNome): ?>
                    <option value="<?php echo $categoriaId; ?>"><?php echo $categoriaNome; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="data[Filme][titulo]" id="titulo" class="form-control">
        </div>
        <div class="form-group">
            <label for="capa">Capa</label>
            <input type="file" name="data[Filme][capa]" id="capa" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="sinopse">Sinopse</label>
            <textarea name="data[Filme][sinopse]" id="sinopse" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
