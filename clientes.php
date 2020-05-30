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
  <a href="index.php">Cadstro</a>

  <h2>Lista de Clientes</h2>
  <?php
    if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }

  //número de páginas
  $paginacao = filter_input(INPUT_GET,'page', 
  FILTER_SANITIZE_NUMBER_INT);
  $page = (!empty($paginacao)) ? $paginacao : 1;
  
  //quantidade de itens
  $qnt = 2;

  $home =($qnt * $page) - $qnt;

  $usuarios = "SELECT * FROM clientes LIMIT
  $home, $qnt";
  $usuarios_resultados = mysqli_query($link, $usuarios);
  while($row_usuario = mysqli_fetch_assoc($usuarios_resultados)){
     echo "ID: " . $row_usuario['id'] . "<br>";
     echo "NOME: " . $row_usuario['nome'] . "<br>";
     echo "E-MAIL: " . $row_usuario['email'] . "<br>";
     echo "TELEFONE: " . $row_usuario['telefone'] . "<br><hr>";
   }

  $rs_page = "SELECT COUNT(id) AS num_rs FROM clientes";
  $resut_page = mysqli_query($link, $rs_page);
  $row_page = mysqli_fetch_assoc($resut_page);
  //echo $row_page['num_rs'];
  $qnt_page = ceil($row_page['num_rs'] /$qnt );

  $max_url = 2;
  echo "<a href='clientes.php?page=1'>Primeira</a> ";

  for($page_ant = $page - $max_url; $page_ant <= $page - 1; $page_ant
  ++){
    if($page_ant >= 1){

  
    echo "<a href='clientes.php?page=$page_ant'>$page_ant</a> ";
    }
  }

    echo "$page";

  for($page_dep = $page + 1; $page_dep <=$page + $max_url; $page_dep 
  ++){
    if($page_dep <=  $qnt_page){
    echo "<a href='clientes.php?page=$page_dep'>$page_dep</a> ";
    }
  }

  echo "<a href='clientes.php?page=$qnt_page'>Ultima</a> ";

  ?>
</body>
</html>