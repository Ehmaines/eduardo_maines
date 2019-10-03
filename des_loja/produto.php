<?php
include_once("produto_dao.php");
$action = $_GET['action'];
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $dados = $_GET;
    switch ($action) {
        case "index":
            $produtos = all();
            include("views/produto_index.php");

            break;
        
        case "create":
            include("views/produto_create.php");
            break;
        case 'show':
            $produto = find($dados['id']);
            include("views/produto_show.php");
            break;
        case "edit":
            $produto = find($dados['id']);
            include("views/produto_edit.php");
            break;
        case 'destroy':
            delete($dados['id']);
            header("Location: produto.php?action=index");
            break;
            
        }
}
if ($_SERVER['REQUEST_METHOD']){
    $dados = $_POST;
    switch ($action) {
        case 'store':
            create($dados);
            header("Location: produto.php?action=index");
            break;
        
        case "update":
            edit($dados);
            header("Location: produto.php?action=index");
            break;
    }
}