<?php
define("HOST","sql307.epizy.com");
define("USUARIO", "epiz_23081841");
define("SENHA","2Nth1QY5uN3Sm");
define("db", "epiz_23081841_clientes");
$conexao = mysqli_connect(HOST,USUARIO,SENHA,db) or die("Não foi possivel conectar");
?>