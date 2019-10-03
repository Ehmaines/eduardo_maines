<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Produtos</title>
</head>
<?php include 'import_css.php' ?>
<body>
   <?php include 'header.php' ?> 
   <div class="container col-md-8 col-12 mt-2">
    
        <div class="py-2">
            <a href="produto.php?action=create" class="btn btn-success">Criar Produto</a>
        </div>
        <h2>Lista de Produtos</h2>
        <?php if (isset($produtos) && $produtos){ ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th Width="30%">Título</th>
                    <th Width="40%">Conteúdo</th>
                    <th Width="10%">Preço</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($produtos as $produto) { ?>
                <tr>
                <?php foreach ($produto as $key => $value) { ?>
                    <td><?= $value ?></td>
                <?php } ?>
                <td><a href="produto.php?action=show&id=<?= $produto['id']?>" class="btn btn-link">Ver</a></td>
                <td><a href="produto.php?action=edit&id=<?= $produto['id']?>" class="btn btn-link">Edit</a></td>
                <td><button href="produto.php?action=destroy&id=<?= $produto['id']?>" class="btn btn-link" onclick="conf_delete()">Delete</button></td>
                </tr>
            <?php } ?>
            </tbody>
            </table>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert">
                        Nenhum Produto Cadastrado
                    </div>
                <?php } ?>
                </div>
                <script>function conf_delete(){
    var conf = confirm("Tem certeza que deseja deletar?");
    if (conf == true){
        window.location = "Location: produto.php?action=index";
    }
    else{
        break;
    }
}</script>
</body>
<?php include 'import_js.php' ?>
</html>