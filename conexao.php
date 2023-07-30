<?php
$servername = "localhost";
$username = "zere";
$password = "1234";
$dbname = "banco_dado";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
