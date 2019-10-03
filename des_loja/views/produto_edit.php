<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Produto</title>
</head>
<?php include 'import_css.php' ?>
<body>
    <?php include 'header.php' ?>
    <div class="container col-lg-4 col-md-6 col-sm-8 col-10 mt-2">
        <h2>Editar Produto</h2>
        <form method="post" action="produto.php?action=update">

            <input type="hidden" name="id" value="<?= $produto['id'] ?>">

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Escreva o titulo ou nome do produto" value="<?= $produto['titulo'] ?>">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="4"><?= $produto['descricao'] ?></textarea>
            </div>
            <div class="form-group">
            <label for="preco">Preço</label>
            <div class="input-group mb-2">
            <div class="input-group-prepend input-group-text">R$</div>
            <input type="number" class="form-control col-3" id="preco" name="preco" min="0" step="0.10" placeholder="0,00" value="<?= $produto['preco'] ?>">            
            </div>
            </div>
            <button type="submit" id="bto-cadastrar" class="btn btn-primary">Confirmar</button>
        </form>
    </div>          
</body>
<?php include 'import_js.php' ?>
</html>