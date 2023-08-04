<?php $this->layout = 'header'; ?>

<h1>Lista de Filmes</h1>
<a href="<?php echo $this->Html->url(array('controller' => 'filmes', 'action' => 'add')); ?>" class="btn btn-primary">Adicionar Filme</a>


<div class="row mt-5">
    <?php foreach ($filmes as $filme) : ?>
        <div class="col-md-3">
            <div class="card mb-4">
                <img class="img-fluid" src="<?php echo $this->Html->url('/media/filmes/' . $filme['Filme']['capa']); ?>" alt="Capa do Filme">
                <div class="card-body">
                    <h5 class="card-title"><?php echo h($filme['Filme']['titulo']); ?></h5>
                    <p class="card-text"><?php echo h($filme['Filme']['sinopse']); ?></p>
                    <p class="card-text"><?php echo h($filme['Categoria']['nome']); ?></p>
                    <a href="<?php echo $this->Html->url(array('controller' => 'filmes', 'action' => 'view', $filme['Filme']['id'])); ?>" class="btn btn-primary">Detalhes</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- Links de paginação -->
<div class="row">
    <div class="col-md-12">
        <nav aria-label="Page navigation example">

            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href=""><?= $this->Paginator->prev('« Anterior'); ?></a></li>
                <li class="page-item"><a class="page-link" href=""><?= $this->Paginator->numbers(); ?></a></li>
                <li class="page-item"><a class="page-link" href=""><?= $this->Paginator->next('Próximo »'); ?></a></li>
            </ul>
        </nav>
    </div>
</div>