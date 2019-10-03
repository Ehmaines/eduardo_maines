<?php
$produto = [
    'id' => '4',
    'titulo' => 'Coleção Livros do Harry Potter',
    'descrição' => 'É uma coleção muito legal',
    'preco' => '500.00' // Valor editado
];

include('../produto_dao.php');

if (!edit($produto)){
    echo 'Não ocorreu alteração de dados.';
    exit;
}

$produto_alterado = find('4');
?>

<p>Dados do produto alterado:</p>
<ul>
    <?php foreach($produto_alterado as $key => $value){ ?>
        <li><b><?= $key ?></b>: <?= $value ?></li>
    <?php } ?>
</ul>