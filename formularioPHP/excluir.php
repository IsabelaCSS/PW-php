<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>
<body>
    <?php
    include 'conexao.php';

    $cd=$_GET['cd'];

    $RemoveLinha = $cn->query("delete from tbl_dados where cod = $cd");

    header ('location::okexcluido.html');
    ?>

</body>
</html>