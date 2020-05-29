<?php
	include_once("link.php");
?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
    <title>Sucesso</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body style="background-color:blue;">


<?php


$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

//echo "Nome: $nome <br>";
//echo "Email: $email<br>";
//echo "Telefone: $telefone<br>";
//echo "Mensagem: $mensagem<br>";


$result = "INSERT INTO dados (nome, email, telefone, mensagem, created) VALUES ('$nome', '$email', '$telefone', '$mensagem', NOW())";
$resultUser = mysqli_query($link, $result);

//if(mysqli_insert_id($link)){
    //header("location:index.html");
    

///}else {
    ///header("location:index.html");
//}

if(mysqli_affected_rows($link) > 0){ ?>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Enviado Com  Sucesso!</h4>
                </div>
                <div class="modal-body">
                    <?php echo $nome; ?>
                </div>
                <div class="modal-footer">
                    <a href="index.html"><button type="button" class="btn btn-success">Ok</button></a>
                </div>
            </div>
        </div>
    </div>				
    <script>
        $(document).ready(function () {
            $('#myModal').modal('show');
        });
    </script>
<?php }else{ ?>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Erro ao cadastrar o usuário!</h4>
                </div>
                <div class="modal-body">								
                    <?php echo $nome; ?>
                </div>
                <div class="modal-footer">
                    <a href="index.html"><button type="button" class="btn btn-danger">Ok</button></a>
                </div>
            </div>
        </div>
    </div>			
    <script>
        $(document).ready(function () {
            $('#myModal').modal('show');
        });
    </script>
<?php } ?>


</div>
</body>
</html>
