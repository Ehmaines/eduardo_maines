<?php
include('..\produto_dao.php');

$produto = find('4');

if (!$produto){
    echo 'Produto não encontrado.';
    exit;
}

$produto['descricao'] = 'É uma coleção bem legal';

if (!edit($produto)){
    echo 'Não ocorreu alteração de dados.';
    exit;
}

$produto_alterado = find('4');
?>

<p>Dados do produto alterado:</p>
<ul>
    <?php foreach($produto_alterado as $key => $value) { ?>
        <li><b><?= $key?></b>: <?= $value ?></li>
    <?php } ?>
</ul>