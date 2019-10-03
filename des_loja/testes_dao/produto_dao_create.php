<?php
$novo_produto = [
'titulo' => 'Coleção de livros do Harry Potter' , 
'descricao' => 'É uma coleção muito legal',
'preco' => '300.00'

];

include('../produto_dao.php');
create($novo_produto);

$produtos = all();

?>

<p>Lista de produtos no banco de dados:</p>
<ul>
<?php foreach ($produtos as $produto) { ?>
<li><?= implode($produto, ';')?></li>
<?php } ?>
</ul>