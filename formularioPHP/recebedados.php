<?php
include 'conexao.php';

$nome=$_POST['txtname'];
$senha=$_POST['txtsenha'];
$sexo=$_POST['rdbsexo'];
$estado=$_POST['sltestado'];

/*
echo "Nome do Cliente {$nome}<br>";
echo "Senha {$senha}<br>";
echo "Sexo {$sexo}<br>";
echo "Estado {$estado}";
*/

$incluir=$cn->query("insert into tbCliente(nome,senha,sexo,estado)
values('$nome','$senha','$sexo','$estado')");
    header('location:ok.html');

?>



