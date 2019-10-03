<html>

<head>
<title>Mostrar Produto</title>
</head>
<?php include 'import_css.php' ?>
<body>
<?php include 'header.php' ?>

<div class="container col-lg-4 col-md-6 col-sm-8 col-10 mt-2">
    <?php if (isset($produto) && $produto){ ?>
    <h2>Mostrar dados do Produto</h2>
    <div class="row my-2">
        <div class="col-4 font-weight-bold">Título</div>
        <div class="col-8"><?= $produto['titulo'] ?></div>
    </div>

    <div class="row my-2">
        <div class="col-4 font-weight-bold">Descrição</div>
        <div class="col-8"><?= $produto['descricao'] ?></div>
    </div>

    <div class="row my-2">
        <div class="col-4 font-weight-bold">Preço</div>
        <div class="col-8"><?= $produto['preco'] ?></div>
    </div>

    <div class="btn-group col-12 mt-3">
        <a class="btn btn-success" href="produto.php?action=edit">Editar Dados</a>
        <a class="btn btn-danger" href="produto.php?action=destroy">Apagar Produto</a>
    </div>
    
    <?php } else { ?>
    <div class="alert alert-info" role="alert">
        Nenhum Produto para Mostrar
    </div>

    <?php } ?>

    </div>

</body>
<?php include 'import_js.php' ?>

</html>