<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de dados</title>
    <?php

    include 'conexao.php';
    $cd = $_GET['cd'];


            $consultaCampos = $cn->query("SELECT * FROM tbl_dados where cod='$cd'");
            $exibeCampos = $consultaCampos->fetch(PDO::FETCH_ASSOC);
    ?>
</head>
<body>
    <form name="frmCad" action="update.php" method="POST">
        <p>Nome:<br>
            <input type="text" name="txtnome" required value="<?php echo $exibeCampos['nome']?>"></p>
        <p>Senha:<br>
            <input type="password" name ="txtsenha" maxlength="6" required value="<?php echo $exibeCampos['senha']?>"></p>
        <p>Sexo:<br>
            <?php if ($exibeCampos['sexo'] == "M"){ ?>
                <input type="radio" name="rdbsexo" value="M" checked>Masculino
                    <input type="radio" name="rdbsexo" value="F">Feminino
            <?php } else{ ?>
                <input type="radio" name="rdbsexo" value="M">Masculino
                    <input type="radio" name="rdbsexo" value="F" checked>Feminino
            <?php } ?>
        </p>
    <p>
        <select name = "sltEstado" required>
                <option value="<?php echo $exibeCampos['sltestado']?>"><?php echo $exibeCampos['sltestado']?>
                </option>
            <option value="SP">SP</option>
            <option value="RJ">RJ</option>
            <option value="MG">MG</option>
            <option value="ES">ES</option>
        </select>
    </p>
        <input type="hidden" name="txtCodigo" value="<?php echo $exibeCampos['cod']?>">
        <p>
        <input type="submit" value="Enviar">
        </p>
    </form>
</body>
</html>