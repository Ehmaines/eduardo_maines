<?php
include_once("config/db_connection.php");

function all_order_by_preco_asc(){
    $conn = get_connection();
    $sql = 'SELECT id,titulo,descricao,preco FROM produto
    order by preco asc';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $instances = [];
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc())
        $instances[] = $row;
    $stmt->close();
    $conn->close();
    return $instances;
}
function all(){
    $conn = get_connection();
    $sql = 'SELECT id,titulo,descricao,preco FROM produto';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $instances = [];
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc())
        $instances[] = $row;
    $stmt->close();
    $conn->close();
    return $instances;
}

function create($produto){
    $conn = get_connection();
    $sql = 'INSERT INTO produto (titulo, descricao, preco) VALUES (?,?,?)';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssd",
        $produto['titulo'],
        $produto['descricao'],
        $produto['preco']);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $conn->close();
    return $result;
}

function find($id){
$conn = get_connection();
$sql = 'SELECT id,titulo,descricao,preco from produto where id = ?';
$stmt = $conn->prepare($sql);
$stmt->bind_param('i',$id);
$stmt->execute();
$instance = [];
$result = $stmt->get_result();
if($row = $result->fetch_assoc())
    $instance = $row;
$stmt->close();
$conn->close();
return $instance;
}

function edit($produto){
    $conn = get_connection();
    $sql = 'UPDATE produto set titulo = ?, descricao = ?, preco = ? where id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssdi",
        $produto['titulo'],
        $produto['descricao'],
        $produto['preco'],
        $produto['id']);
    $stmt->execute();
    $result = $stmt->affected_rows > 0;
    $stmt->close();
    $conn->close();
    return $result;
}

function delete($id){
    $conn = get_connection();
    $sql = 'DELETE From produto where id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->affected_rows > 0;
    $stmt->close();
    $conn->close();
    return $result;

}
function all_order_by_preco($order){
    $conn = get_connection();
    $sql = 'SELECT id,titulo,descricao,preco FROM produto
    order by preco ' . $order;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $instances = [];
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc())
        $instances[] = $row;
    $stmt->close();
    $conn->close();
    return $instances;
}
function all_order_by($column, $order){
    $conn = get_connection();
    $sql = 'SELECT id,titulo,descricao,preco FROM produto
    order by '. $column .' ' . $order;
    print($sql);
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $instances = [];
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc())
        $instances[] = $row;
    $stmt->close();
    $conn->close();
    return $instances;
}
?>