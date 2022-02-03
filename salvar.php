<?php
require 'banco.php';

$novaTarefa = isset($_POST['novaTarefa'])? $_POST['novaTarefa']: ""; 

$sql = "INSERT INTO `tarefas` (`tarefa`) VALUES ('$novaTarefa')";
$salvar = mysqli_query($conn, $sql);

if (!$salvar) {
    http_response_code(500);
} else {
    header("Location: http://localhost/todolistphp");
}
?>