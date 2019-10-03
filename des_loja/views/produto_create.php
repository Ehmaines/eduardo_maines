<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Produto</title>
</head>
<?php include 'import_css.php' ?>
<body>
    <?php include 'header.php' ?>
    <div class="container col-lg-4 col-md-6 col-sm-8 col-10 mt-2">

        <h2>Cadastrar Produto</h2>
        <form action="produto.php?action=store" method="post">
        
        <div class="form-group">
        <label for="nome">Título</label>
        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Escreva o Título ou nome do produto">
        </div>
        <div class="form-group">
        <label for="nome">Descrição</label>
        <textarea class="form-control" name="descricao" id="descricao" rows="4"></textarea>
        </div>
        <div class="form-group">
          <label for="nome">Preço</label>      
            <div class="input-group mb-2">
            <div class="input-group-prepend input-group-text">R$</div>
            <input type="number" class="form-control col-3" id="preco" name="preco" min="0" step="0.10" placeholder="0,00">
            </div>
        </div>              
        
        <button type="submit" id="bto-cadastrar" class="btn btn-primary">Cadastrar</button>
        
        </form>
        </div>
</body>
<?php include 'import_js.php' ?>
</html>