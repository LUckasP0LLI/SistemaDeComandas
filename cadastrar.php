<?php
session_start();
include("conexao.php");
$usuario = mysqli_real_escape_string($conexao,trim($_POST["nomelog"]));
$senha = mysqli_real_escape_string($conexao,trim(md5($_POST['passlog'])));



$sql ="SELECT count(*) as total from usuario where usuari = '$usuario'";
$result = mysqli_query($conexao,$sql);
$row = mysqli_fetch_assoc($result);
if($row['total']== 1){
    $_SESSION['usuario_existe'] = true;
    header("Location: cadastro.html");
    exit();
}

$sql = "INSERT INTO usuario(usuari,senha) VALUES ('$usuario', '$senha')";

if($conexao->query($sql)=== true){
    $session['usuario_cadastrado'] = true;
   
}

$conexao->close();
header('Location:cadastro.html');
exit();
?>