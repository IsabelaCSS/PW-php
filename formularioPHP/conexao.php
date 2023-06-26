<?php
$servidor = "localhost";
$usuario = "root";
$senha = "12345678";
$banco = "dbBDPwa";


$cn = new PDO("mysql:root=$servidor;dbname=$banco",$usuario,$senha);
?>