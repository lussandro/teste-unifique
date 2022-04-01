<html>
<?php

echo 'Versão Atual do PHP: ' . phpversion();

$servername = "mysql-server";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Erro de Conexão: " . $conn->connect_error);
}
echo "<br /> Conectado com Sucesso!";
?>

</html>
