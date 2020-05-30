<?php
session_start();

include_once("link.php");

/*view com lista de usuarios*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de clientes</title>
</head>
<body>
  <?php
    if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
   $usuarios = "SELECT * FROM clientes";
   $usuarios_resultados = mysqli_query($link, $usuarios);
   while($row_usuario = mysqli_fetch_assoc($usuarios_resultados)){
     echo "ID: " . $row_usuario['id'] . "<br>";
     echo "NOME: " . $row_usuario['nome'] . "<br>";
     echo "E-MAIL: " . $row_usuario['email'] . "<br>";
     echo "TELEFONE: " . $row_usuario['telefone'] . "<br><hr>";
   }

  ?>
</body>
</html>