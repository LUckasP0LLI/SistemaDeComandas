<?php
include_once("conexao.php");
$sql = "SELECT * FROM `x`";
$resultado = mysqli_query($conexao,$sql);
$apagar = "TRUNCATE TABLE x";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta lang="PT-BR">
    <meta http-equiv="refresh" content="5;url=comandas.php">
<style>
 body{
    margin: 0px;
    padding: 0px;
    background-image: url("https://i.pinimg.com/originals/a6/b4/21/a6b4219ab905023307af394fa8d0c230.jpg");
    width: 1500px; /*1311*/
    height: 626px; /*626*/
    color:orange;
 }
form{
    width: 600px;
    height: 600px;
    margin: 0 auto 0 auto;
}
#form input{
    width: 50%;
    border: #666666 solid 2px;
    float: left;
    clear: both;
    padding: 12px;
    margin: 12px;
}

#form #radiobtn h1{
    display: block;
    float: left;
    font-size: 12px;
    font-style: normal;
    width: 300px;
    height: 50%;
    
}
#shadow input{
    box-shadow:2px 5px;
    color:black; 

}
table, th, td {
 
  text-align: left;
  height: 20%;
}
table{
    padding: 5px;
    height: 20%;
    width: 70%;
    margin: 0 auto 0 auto;
}
</style>

</head>
<body>
        <table>
                <tr>
                  <th>Nome</th>
                  <th>Numero da Mesa</th>
                  <th>Numero de Pessoas</th>
                  <th>Pratos</th>
                  <th>Garçom</th>
                </tr>
               
                <?php while($rows_cursos = mysqli_fetch_assoc($resultado)){ ?>
								<tr>
									<td><?php echo $rows_cursos['nome']; ?></td>
                                    <td><?php echo $rows_cursos['mesa']; ?></td>
                                    <td><?php echo $rows_cursos['pessoa']; ?></td>
                                    <td><?php echo $rows_cursos['pedido']; ?></td>
                                    <td><?php echo $rows_cursos['garcom']; ?></td>
								</tr>
							<?php } ?>
              </table>
            
</body>


</html>
