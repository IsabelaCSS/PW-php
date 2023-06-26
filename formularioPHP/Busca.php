<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dados do cliente</title>
<?php
            include 'conexao.php';
?>
</head>

<body>
    <h1> Localizar Cliente</h1>
    <form name="frmPesquisa" mathod="get" action="Busca.php">
        <p>Informe o nome do cliente<br>
            <input type="text" name="txtBusca" required>
            <input type="submit" value="Procurar">
        </p>
    </form>
    <?php
    if(!isset($_GET["txtBusca"])){
        echo "";
    }
        else{
            $nomeCli=$_GET['txtBusca'];

            $buscaCliente=$cn->query("select * from tbCliente where nome like '%$nomeCli%'");
        ?>
        <table border="1" width="80%">
            <tr>
                <th width="10%">Código</th>
                <th width="20%">Cliente</th>
                <th width="10%">Senha</th>
                <th width="10%">Sexo</th>
                <th width="10%">Estado</th>
                <th width="10%">Alterar</th>
                <th width="10%">Excluir</th>
            </tr>
        <?php

                while($vetor=$buscaCliente->fetch(PDO::FETCH_ASSOC)){
        ?>
            <tr>

                <td width="10%"><?php echo $vetor['cod']; ?></td>

                <td width="20%"><?php echo $vetor['nome']; ?></td>
                <td width="10%"><?php echo $vetor['senha']; ?></td>
                <td width="10%"><?php echo $vetor['sexo']; ?></td>
                <td width="10%"><?php echo $vetor['estado']; ?></td>
                <td width="10%">Alterar</td>
                <td width="10%">Excluir</td>
            </tr>
        <?php } ?>
        </table>
                <?php } ?>
</body>
</html>