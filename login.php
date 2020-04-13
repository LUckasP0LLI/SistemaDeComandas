<?php


include("conexao.php");
if(empty($_POST["nomelog"])){
    header("Location: index.html");
    exit();
}

$usuario = mysqli_real_escape_string($conexao,$_POST["nomelog"]);
$senha = mysqli_real_escape_string($conexao,$_POST['passlog']);

$query ="SELECT usuario_id,usuari FROM usuario where usuari = '{$usuario}'and senha = md5('{$senha}')";

$result = mysqli_query($conexao,$query);
$row = mysqli_num_rows($result);

if($row == 1){
$session["nomelog"] = $usuario;
header("Location: painel.html");
exit();
}else{
    header("Location: index.html");
    exit();
}