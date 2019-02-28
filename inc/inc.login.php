<?php
session_cache_expire(60);
session_start();
require("inc.db_connection.php");
$usuario = $_POST['username'];
$senha = base64_encode($_POST['password']);

$sql = mysqli_query($conexao, "SELECT * FROM usuario WHERE email = '$usuario' AND senha = '$senha' ");
$linha = mysqli_num_rows($sql);

while($row = $sql->fetch_array()){
    $id = $row["id"];
    $nome = $row["nome"];
}
if($linha > 0){
    $_SESSION['id'] = $id;
    $_SESSION['usuario'] = $nome;
    echo '<script type="text/javascript"> window.location.href = "../home.php"</script>';
}
else{
    $_SESSION['erro'] = "<div class='alert alert-danger' role='alert' >Login ou senha inválidos</div>";
    echo '<script type="text/javascript"> window.location.href = "../index.php"</script>';
}
?>