<?php

$servername = 'endpoint';
$username = 'user';
$password = 'passwrd';
$dbname = 'name';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}
echo "Banco de dados conectado com sucesso!</br></br>";

?>
