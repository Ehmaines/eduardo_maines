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
        <a class="btn btn-success" href="produto.php?action=edit&id=<?= $produto['id'] ?>">Editar Dados</a>
        <button onclick="conf_delete()" class="btn btn-danger" >Apagar Produto</button>
    </div>
    
    <?php } else { ?>
    <div class="alert alert-info" role="alert">
        Nenhum Produto para Mostrar
    </div>

    <?php } ?>

    </div>
<script>
    function conf_delete(){
        var conf = confirm("Tem certeza que deseja deletar?");
        if (conf == true){
            window.location.href = "produto.php?action=destroy&id=<?= $produto['id']?>";
        }
    }

</script>
</body>
<?php include 'import_js.php' ?>

</html>