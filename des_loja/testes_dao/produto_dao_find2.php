<?php 

include('..\produto_dao.php');

if (!delete("5")){
    echo 'Não foi possível apagar esse produto.';
    exit;
} else {
    echo 'Produto apagado com sucesso.';
    exit;
}

?>