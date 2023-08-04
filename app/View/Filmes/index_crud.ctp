<?php $this->layout = 'header'; ?> <!-- Incluindo o layout -->

<h1>Lista de Filmes</h1>
<?php echo $this->Html->link('Adicionar Filme', array('controller' => 'filmes', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>

<div class="table-responsive mt-5">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
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
                    <td><?= h($filme['Filme']['titulo']); ?></td>
                    <td><?= h($filme['Filme']['sinopse']); ?></td>
                    <td><?= h($filme['Categoria']['nome']); ?></td>
                    <td>
                        <a href="<?= $this->Html->url(['controller' => 'filmes', 'action' => 'view', $filme['Filme']['id']]); ?>" class="btn btn-primary">Detalhes</a>
                        <a href="<?= $this->Html->url(['controller' => 'filmes', 'action' => 'edit', $filme['Filme']['id']]); ?>" class="btn btn-info">Editar</a>
                        <?= $this->Form->postLink('Excluir', ['action' => 'delete', $filme['Filme']['id']], ['confirm' => 'Tem certeza que deseja excluir o filme?', 'method' => 'delete', 'class' => 'btn btn-danger']); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
    <!-- Links de paginação -->
    <div class="row">
        <div class="col-md-12">
            <ul class="pagination justify-content-center">
                <li class="page-item"><?= $this->Paginator->prev('« Anterior'); ?></li>
                <li class="page-item"><?= $this->Paginator->numbers(); ?></li>
                <li class="page-item"><?= $this->Paginator->next('Próximo »'); ?></li>
            </ul>
        </div>
    </div>
</div>