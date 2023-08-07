<?php $this->layout = 'header'; ?> <!-- Incluindo o layout -->

<h1 class="m-3 h4">Lista de Filmes</h1>
<?php echo $this->Html->link('Adicionar Filme', array('controller' => 'filmes', 'action' => 'add'), array('class' => 'btn btn-sm m-4 mb-0 btn-primary')); ?>
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
                <th>Capa</th>
                <th>Título</th>
                <th>Sinopse</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($filmes as $filme) : ?>
                <tr>
                    <td><?= $filme['Filme']['id']; ?></td>
                    <td><img src="<?php echo $this->Html->url('/media/filmes/' . $filme['Filme']['capa']); ?>" style="max-width: 5rem;" alt=""></td>
                    <td><?= h($filme['Filme']['titulo']); ?></td>
                    <td><?= h($filme['Filme']['sinopse']); ?></td>
                    <td><?= h($filme['Categoria']['nome']); ?></td>
                    <td>
                        <div class="d-flex">
                            <a href="<?= $this->Html->url(['controller' => 'filmes', 'action' => 'view', $filme['Filme']['id']]); ?>" class="btn btn-sm btn-primary m-1">Detalhes</a>
                            <a href="<?= $this->Html->url(['controller' => 'filmes', 'action' => 'edit', $filme['Filme']['id']]); ?>" class="btn btn-sm btn-info m-1">Editar</a>
                            <?= $this->Form->postLink('Excluir', ['action' => 'delete', $filme['Filme']['id']], ['confirm' => 'Tem certeza que deseja excluir o filme?', 'method' => 'delete', 'class' => 'btn btn-sm btn-danger m-1']); ?>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
    <?php
    if ($this->Paginator->params()['count'] > 5) {
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