<?php
include('../produto_dao.php');

$produtos = all_order_by_preco_asc();

if(!$produtos){
    echo "a consulta não retornou nenhum produto!";
    exit;
}
?>

<p>Lista de produtos no banco de dados:</p>

<table border=1px>
<tr>
<th>ID</th>
<th>Produto</th>
<th>Descrição</th>
<th>Preço</th>
</tr>
 <?php foreach ($produtos as $produto) { ?>
            <tr><td><?= implode($produto, '<td>')?> </tr>

 <?php } ?>
</table>
