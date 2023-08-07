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
<style>
    .menuLink {
  margin: 0 10px;
  position: relative;
  color: #fff;
  text-decoration: none;
}

.menuLink:hover {
  color: #fff;
}

.menuLink::before {
  content: "";
  position: absolute;
  display: block;
  width: 100%;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: #fff;

  transform: scaleX(0);
  transition: transform 0.3s ease;
}

.menuLink:hover::before {
  transform: scaleX(1);
}

</style>

<body class="bg-light">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand menuLink" href="<?php echo $this->Html->url(array('controller' => 'filmes', 'action' => 'index')); ?>">Início</a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link  menuLink" href="<?php echo $this->Html->url('/filmes/admin'); ?>">Administrador</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menuLink" href="<?php echo $this->Html->url('/Categorias/index'); ?>">Categoria</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <?php echo $this->fetch('content'); ?>
</body>

</html>