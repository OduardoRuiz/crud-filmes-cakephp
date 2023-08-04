<?php $this->layout = 'header'; ?> <!-- Incluindo o layout -->

<h1>Lista de Categorias</h1>
<?php echo $this->Html->link('Adicionar Filme', array('controller' => 'filmes', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>

<div class="table-responsive mt-5">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorias as $categoria) : ?>
                <tr>
                    <td><?php echo $categoria['Categoria']['id']; ?></td>
                    <td><?php echo $categoria['Categoria']['nome']; ?></td>
                    <td>
                        <a href="<?= $this->Html->url(['controller' => 'categorias', 'action' => 'edit', $categoria['Categoria']['id']]); ?>" class="btn btn-info">Editar</a>
                        <?= $this->Form->postLink('Excluir', ['action' => 'delete', $categoria['Categoria']['id']], ['confirm' => 'Tem certeza que deseja excluir o filme?', 'method' => 'delete', 'class' => 'btn btn-danger']); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>