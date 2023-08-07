<?php $this->layout = 'header'; ?>

<div class="container m-3 d-block text-center">
    <h1 class="h4 d-none">Detalhes</h1>
    <div class="d-flex justify-content-start">
        <?php echo $this->Html->link('< Voltar', 'javascript:history.go(-1);', array('class' => 'btn btn-sm btn-primary')); ?>
    </div>

    <div class="d-flex mt-4">


        <div>
            <img class="img-fluid " style="max-width: 300px;" src="<?= $this->Html->url('/media/filmes/' . $filme['Filme']['capa']); ?>" class="img-fluid" alt="Capa do Filme">
            <div class="mt-3">
            </div>
        </div>
        <div class="m-5">
            <h2 class="h3 text-primary text-sm-start"><?php echo $filme['Filme']['titulo']; ?></h2>
            <p class="h6 text-sm-start"><?php echo $filme['Filme']['sinopse']; ?></p>

            <div class="d-flex mt-4">
                <span class="badge bg-dark m-1"><?php echo $filme['Categoria']['nome']; ?></span>
                <span class="badge bg-dark m-1">2023</span>
                <span class="badge bg-dark m-1">119 mins</span>
            </div>
            <p class="mt-5 text-sm-start"><b>Diretor</b>: João Silva</p>
            <p class="text-sm-start"><b>Elenco</b>: João Silva , Maria Oliveira, Samantha Santos, Eduardo Ruiz, Francisco Silva</p>
            <p class="text-sm-start"><b>Estudío</b>: A24</p>
            <p class="text-sm-start"><b>Classificação</b>: livre</p>
            <p class="text-sm-start"><b>Estréia</b>: 07/08/2023</p>



        </div>

    </div>


</div>