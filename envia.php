<?php
include_once("conexao.php");


    $nome = $_GET['nome'];
    $pessoa = $_GET['pessoa'];
    $mesa = $_GET['mesa'];
	$pedido = $_GET['pedido'];
	$quant = $_GET['quant'];
	$garcom = $_GET['garcom'];

	foreach($pedido as $value){
	echo $value;
	}
	
	$result_msg_contato = "INSERT INTO x (nome,pessoa,mesa,pedido,garcom) VALUES ('$nome','$pessoa', '$mesa','$value', '$garcom')";
	$resultado_msg_contato= mysqli_query($conexao, $result_msg_contato);


	if(mysqli_insert_id($conexao)){
		header("Location: entrega.html");
	}else{
		header("Location: entrega.html");
	}