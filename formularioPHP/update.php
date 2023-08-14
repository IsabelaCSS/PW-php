<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração</title>
</head>
<body>
    <?php
    $nome=$_POST['txtname'];
    $senha=$_POST['txtsenha'];
    $sexo=$_POST['rdbsexo'];
    $estado=$_POST['sltestado'];
    $cd = $_POST["txtCodigo"];

    $atualiazar = $cn->query("update tbl_dados set nome='$nome',senha='$senha',sexo='$sexo',estado='$estado' where cod = $cd");

    header ('location::okalterado.html');
?>
</body>
</html>