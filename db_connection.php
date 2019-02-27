<?php
$host = "localhost";
$username = "root"; //mudei para teste
$password = "";
$dbname = "projeto_web";

// Create connection
$conexao = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
} 

?>