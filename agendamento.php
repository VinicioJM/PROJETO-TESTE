<?php

require_once('config/conn.php');
 require "cabecariopro.php";
 if (!isset($_SESSION['usuario'])) {
       header('Location: index.php');
  }
  
$nomeUs= $_GET['nomeUs'];
$dataUs=$_GET['dataAge'];



$sql ="SELECT * FROM usuario WHERE nomeUs = '$nomeUs' ";
$result1 = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($result1);
$emailUs = $dados['emailUs'];
$telefoneUs = $dados['telefoneUs'];
if ($result1) {
       
 /*$query = "INSERT INTO agendamento (dataAge, horaAge, codUs, codAni, codOng, nomeUs) VALUES ('$data.$hora', '$hora ', '$iduser', '$idAni', '$idOng', '$nomeUs')";
 $result = mysqli_query($conexao, $query);*/

 ?>
 <!DOCTYPE html>
<html lang="pt-br">
	 
	

  
	<head>
		<link href="http://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet" type="text/css"/>

		<!-- Custom styles for this template (imports bootstrap from LESS) -->
		<link href="css/style.css" rel="stylesheet">
		<style type="text/css">
   div#imagens img {
width: 300px!important;
height: 300px!important;
}
   

    </style>

	</head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>PetLandia</title>
			
   
  
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
		  <div class="panel-heading" role="tab" id="headingOne">
		    <h4 class="panel-title">
			  <strong>Nome do Usuário que Agendou</strong>
		      </a>
		    </h4>
		  </div>
		  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		    <div class="panel-body">
			<?php  echo $nomeUs; ?>
		    </div>
		  </div>
		</div>
		
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		
		<div class="panel panel-default">
		  <div class="panel-heading" role="tab" id="headingOne">
		    <h4 class="panel-title">
			  <strong>Data e Hora do Agendamento</strong>
		      </a>
		    </h4>
		  </div>
		  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		    <div class="panel-body">
			<?php  echo $dataUs; ?>
		    </div>
		  </div>
              </div>
              
              <div class="panel panel-default">
		  <div class="panel-heading" role="tab" id="headingOne">
		    <h4 class="panel-title">
			  <strong>Email do Usuário</strong>
		      </a>
		    </h4>
		  </div>
		  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		    <div class="panel-body">
			<?php  echo $emailUs; ?>
		    </div>
		  </div>
		</div>
		
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
		  <div class="panel-heading" role="tab" id="headingOne">
		    <h4 class="panel-title">
			  <strong>Telefone do Usuário</strong>
		      </a>
		    </h4>
		  </div>  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		    <div class="panel-body">
			 <?php  echo $telefoneUs; ?> <br/>
						
		    </div>
		  </div>
              </div>
              <br>
              <a type="submit" class="btn btn-danger" name="sair" href="calender.php" >Voltar</a>
    

		<!--	<div class="row">

   
            
       <div id="list-example" class="list-group">
             <h1> Descrição de Agendamento</h1>
              <a class="list-group-item list-group-item-action" href="#list-item-1">Nome do Usuario</a>
                            <a class="list-group-item list-group-item-action" href="#list-item-2">Hora de Agendamento</a>
              <a class="list-group-item list-group-item-action" href="#list-item-3">Email</a>
              <a class="list-group-item list-group-item-action" href="#list-item-4">Telefone</a>
       </div>
       <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
              <h3 id="list-item-1">Nome do Usuario</h3>
              <p><h4><?php echo $nomeUs?></h4></p>
              <h3 id="list-item-2">Data e hora de Agendamento</h3>
              <p><h4><?php echo $dataUs?></h4></p>
              <h3 id="list-item-3">Email</h3>
              <p><h4><?php echo $emailUs?></h4></p>
              <h3 id="list-item-4">Telefone</h3>
              <p><h4><?php echo $telefoneUs?></h4></p>
       </div>
       <a type="submit" class="btn btn-danger" name="sair" href="indexpro.php" >Voltar</a>   Main component for a primary marketing message or call to action -->
 
  </div> <!-- /container -->
  
		<?php require "rodape.php";} else{ 
                     

              }?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
