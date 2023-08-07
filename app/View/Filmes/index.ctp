<?php $this->layout = 'header'; ?>
<?php $this->Paginator->options(array('url' => array('controller' => 'filmes', 'action' => 'index'))); ?>

<h1 class="m-3 h4">Lista de Filmes</h1> 
<a href="<?php echo $this->Html->url(array('controller' => 'filmes', 'action' => 'add')); ?>" class="btn btn-sm m-4 mb-0 btn-primary">Adicionar Filme</a>


<div class="row m-3">
    <?php foreach ($filmes as $filme) : ?>
        <div class="col-11 col-md-6 col-lg-4 d-flex justify-content-center">
            <div class="card mb-4" style="width: 14rem;">
                <img class="img-fluid" style="" src="<?php echo $this->Html->url('/media/filmes/' . $filme['Filme']['capa']); ?>" alt="Capa do Filme">
                <div class="card-body">
                    <h5 class="card-title"><?php echo h($filme['Filme']['titulo']); ?></h5>
                    <p class="card-text" style="max-height: 200px; overflow-y: auto;"><?php echo h($filme['Filme']['sinopse']); ?></p>
                    <p class="card-text"><?php echo h($filme['Categoria']['nome']); ?></p>
                    <a href="<?php echo $this->Html->url(array('controller' => 'filmes', 'action' => 'view', $filme['Filme']['id'])); ?>" class="btn btn-dark">Detalhes</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php
if ($this->Paginator->params()['count'] > 9) {
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