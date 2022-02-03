<?php
require_once 'banco.php';

$sql = "SELECT * FROM `tarefas`";
$tarefas = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista</title>
</head>
<body>
    <div>
        <ul>
            <?php while($tarefasArr = mysqli_fetch_array($tarefas)) { ?>
                <li><?= $tarefasArr['tarefa']?></li>
       <?php } ?>
        </ul>
    <div>
        <form action = "salvar.php" method = "post">
                <input name = "novaTarefa" type="text">
                <button type = "submit">salvar</button>
        </form>
</body>
</html>