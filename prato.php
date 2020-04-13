<?php
session_start();
include("conexao.php");
$prato = ($_POST["prato"]);
$valor = ($_POST['valor']);



$result_msg_contato = "INSERT INTO menu (nome_prato,preco_prato) VALUES ('$prato','$valor')";
	$resultado_msg_contato= mysqli_query($conexao, $result_msg_contato);


	if(mysqli_insert_id($conexao)){
		header("Location: pratos.html");
	}else{
		header("Location: pratos.html");
	}