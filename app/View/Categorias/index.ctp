<?php $this->layout = 'header'; ?> <!-- Incluindo o layout -->
<h1 class="m-3 h4">Lista de Categorias</h1>

<?php echo $this->Html->link('Adicionar categoria', array('controller' => 'categorias', 'action' => 'add'), array('class' => 'btn btn-sm m-4 mb-0 btn-success')); ?>

<div class="m-3">
<?php if ($this->Session->check('Message.flash')): ?>
    <div class="alert alert-success">
        <?php echo $this->Session->flash() ?>
    </div>
<?php endif; ?>
</div>

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
                        <a href="<?= $this->Html->url(['controller' => 'categorias', 'action' => 'edit', $categoria['Categoria']['id']]); ?>" class="btn btn-sm btn-primary">Editar</a>
                        <?= $this->Form->postLink('Excluir', ['action' => 'delete', $categoria['Categoria']['id']], ['confirm' => 'Tem certeza que deseja excluir o filme?', 'method' => 'delete', 'class' => 'btn btn-sm btn-danger']); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
    <?php
    if ($this->Paginator->params()['count'] > 10) {
    ?>
        <div class="d-flex justify-content-center">
            <div class="paginator">
                <ul class="pagination">
                    <li><?= $this->Paginator->prev(__('<<'), array('class' => 'btn btn-sm btn-info')) ?></li>
                    <li class="page-item"> <span style="margin: 5px;"><?= $this->Paginator->numbers(array('class' => '')) ?></span></li>
                    <li><?= $this->Paginator->next(__('>>'), array('class' => 'btn btn-sm btn-info')) ?></li>
                </ul>
            </div>
        </div>
    <?php
    }
    ?>
</div>