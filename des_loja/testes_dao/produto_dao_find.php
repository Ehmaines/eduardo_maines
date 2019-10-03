<?php
include('../produto_dao.php');



$produto = find("4");
if (!$produto){
    echo 'Produto não encontrado.';
    exit;
}
?>

<p>Dados Produto:</p>
<ul>
<?php foreach($produto as $key => $value){ ?>
<li><b><?= $key ?></b>: <?= $value ?> </li>
<?php } ?>
</ul>