<?php $this->layout = 'header'; ?>

<div class="container m-5">
    <h2 class="h4">Editar Filme</h2>
    <form class="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="mt-2 mb-1" for="categoria_id">Categoria</label>
            <select  name="data[Filme][categoria_id]" id="categoria_id" class="form-control">
                <?php foreach ($categorias as $categoriaId => $categoriaNome): ?>
                    <option value="<?php echo $categoriaId; ?>" <?php echo ($filme['Filme']['categoria_id'] == $categoriaId) ? 'selected' : ''; ?>>
                        <?php echo $categoriaNome; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label class="mt-2 mb-1" for="titulo">Título</label>
            <input type="text" name="data[Filme][titulo]" id="titulo" class="form-control" value="<?php echo $filme['Filme']['titulo']; ?>">
        </div>
        <div class="form-group">
            <label class="mt-2 mb-1 d-block" for="capa">Capa</label>
            <input type="file" name="data[Filme][capa]" id="capa" class="form-control-file" accept="image/jpeg, image/png">
        </div>
        <div class="form-group">
            <label  class="mt-2 mb-1" for="sinopse">Sinopse</label>
            <textarea name="data[Filme][sinopse]" id="sinopse" class="form-control"><?php echo $filme['Filme']['sinopse']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-sm btn-success mt-3">Salvar</button>
    </form>
</div>
