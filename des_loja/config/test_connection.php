<?php
include('db_connection.php');

echo 'Abrindo a conexão.<br>';
$conn = get_connection();
echo 'Conecxão realizada com sucesso.<br>';

echo 'Fechando a conexão.<br>';
$conn->close();
echo 'Conexão fechada.';