<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus filmes</title>
    <!--Bootstrap 5 CSS via CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo $this->Html->url(array('controller' => 'filmes', 'action' => 'index')); ?>">Home</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="nav-link" href="<?php echo $this->Html->url('/filmes/admin'); ?>">Administrador</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo $this->Html->url('/Categorias/index'); ?>">Categoria</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php echo $this->fetch('content'); ?>
    <!--Bootstrap 5 JavaScript (incluindo Popper.js) via CDN-->
</body>

</html>