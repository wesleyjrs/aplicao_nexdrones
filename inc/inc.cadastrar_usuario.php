<?php
session_cache_expire(60);
session_start();
include "inc.db_connection.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$celular = $_POST['celular'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$senha = base64_encode($_POST['senha']);

$sql = 
"INSERT INTO usuario(
nome, 
email, 
cep, 
endereco, 
numero, 
bairro, 
cidade, 
estado, 
rg, 
cpf, 
celular, 
senha) 
VALUES(
'$nome',
'$email',
'$cep',
'$endereco',
'$numero',
'$bairro',
'$cidade',
'$estado',
'$rg',
'$cpf',
'$celular',
'$senha')" ;

if ($conexao->query($sql) === TRUE) {

    $_SESSION['usuario'] = $nome;

    echo('<script type="text/javascript"> window.location.href = "../home.php";</script>');

}else{
    echo "Error: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

?>