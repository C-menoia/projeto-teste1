<?php

$servername = 'testecaio1.c7rwh8xel0ji.us-east-1.rds.amazonaws.com';
$username = 'Master';
$password = '29041234';
$dbname = 'testecaio1';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}
echo "Banco de dados conectado com sucesso!</br></br>";

?>