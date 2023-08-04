<?php $this->layout = 'header'; ?>

<div class="container mt-5 ">
    <div class="d-block text-center">
        <h1 class="h3 ">Titulo do filme</h1>
        <h2 class="h4"><?= h($filme['Filme']['titulo']); ?></h2>
        <img class="img-fluid" style="max-width: 200px; max-height: 200px;" src="<?= $this->Html->url('/media/filmes/' . $filme['Filme']['capa']); ?>" class="img-fluid" alt="Capa do Filme">
        <p class="h4">Sipnose</p>
        <p class="h5"><?php echo $filme['Filme']['sinopse']; ?></p>
        <p class="h5"><?php echo $filme['Categoria']['nome']; ?></p>


    </div>

</div>