<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="VaiNao";
$dbname="udemybd";

/* Gerado pelo MySql-Workbench
Alterado no site do github.

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();

*/
    // 1. Abrir conexao
    $conecta = mysqli_connect($host, $user, $password, $dbname);

    // 2. Testar conexao
    if (mysqli_connect_errno()) {
        die("Conexão falou : " . mysqli_connect_errno());
    }
?>
