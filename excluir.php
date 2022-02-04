<?php
require 'banco.php';

$id_tarefa = $_REQUEST["id"];

$sql = "DELETE FROM `tarefas` WHERE id = $id_tarefa";
$deletar = mysqli_query($conn, $sql);

if (!$deletar) {
    http_response_code(500);
} else {
    header("Location: http://localhost/todolistphp");
}