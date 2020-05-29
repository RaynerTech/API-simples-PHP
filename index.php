<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="css/materialize.css">
</head>
<body>
    <div id="pagina-contato" style="top:70px; position:relative;" class="container">
        <div class="section">

            <div class="row">
                <div class="col s12 center"><!--apagar-->
                  
          <section  class="section-map">
            <div class="container-map" style="padding:20px;">
              <div  class="card-panel z-depth-5">
          <div class="row">
            <div class="col s12 m6">
            
            
          
          <h4 class="center">Saiba Mais</h4>	 
          <div class="row">
          <form class="col s12 m12" method="POST" action="dados.php">
          <div class="row">
            <div class="input-field col s12 m12">
              <i class="material-icons prefix">account_circle</i>
              <input style="text-transform: uppercase;" id="icon_prefix" type="text" name="nome" class="validate">
              <label for="icon_prefix">Nome</label>
            </div>
            
            <div class="input-field col s12 m12">
              <i class="material-icons prefix">email</i>
              <input id="icon_email" type="email" name="email" class="validate">
              <label for="icon_email">Email</label>
            </div>
          
            <div class="input-field col s12 m12">
              <i class="material-icons prefix"></i>
              <input id="icon_telephone" type="tel" name="telefone"  class="validate">
              <label for="icon_telephone">Telefone</label>
            </div>
            
             <div class="input-field col s12 m12">
              <i class="material-icons prefix">mode_edit</i>
                <textarea id="icon_prefix2" name="mensagem" class="materialize-textarea"></textarea>
                <label for="icon_prefix2">Mensagem</label>
              </div>
          <button class="btn waves-effect blue center" type="submit" name="action">Enviar Mensagem&nbsp;
          <i class="mdi-content-send"></i>
          </button>
              
          </div><!--row-->
          </form>
          
          </div><!--row-->
          
          
          
          
          </div><!--col-->
          
          
          
          
          
          <div class="col s12 m5 offset-m1">
          <br>
          <br>
          <p>
           <br>
          
          </p>
          <iframe class="mapmap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31603.85152612428!2d-34.876573!3d-8.052273!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3f695969bc68e24f!2sFANIP%20-%20Faculdade%20N%C3%BAcleo%20de%20Integra%C3%A7%C3%A3o%20Profissional!5e0!3m2!1spt-BR!2sbr!4v1572032904097!5m2!1spt-BR!2sbr" 
          width="300" height="300" frameborder="0" style="border:solid 2px #472663; box-shadow: 7px 5px 5px 5px   #10011d;" allowfullscreen=""></iframe></div></aside></div></div></div>          
          
          </div>
          
          
          
          </div><!--row-->
          </div><!--card-->
          </div><!--conatiner-->   
                </div>
            </div>

        </div>
    </div><!--form-->
<script type="text/javascript" src="js/materialize.min.js"></script> 
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script> 
<script type="text/javascript" script-name="bonbon" src="http://use.edgefonts.net/bonbon.js"></script>
<script type="text/javascript" script-name="berkshire-swash" src="http://use.edgefonts.net/berkshire-swash.js"></script>
<script type="text/javascript" script-name="chicle" src="http://use.edgefonts.net/chicle.js"></script>
<script type="text/javascript" src="js/init.js"></script>

<script>
  $(document).ready(function(){

$('#modal').modal({
  dismissible: false
});
$('#modal').modal('open'); 
});

</script>

</body>
</html>