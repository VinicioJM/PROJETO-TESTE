<!DOCTYPE html>
<html lang="pt-br">
	 <?php require "cabecario.php";
	 require_once('config/conn.php');
	  $sql = mysqli_query($conexao, "SELECT * FROM animal ORDER BY nomeAni");
	?>


  
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

    <title>PetLandia TESTE</title>
			
   
    <!-- Main component for a primary marketing message or call to action -->
	$sql = mysqli_query($conexao, "SELECT * FROM animal ORDER BY nomeAni");
?>


    <?php while ($usuario = mysqli_fetch_object($sql)) {
        $id = $usuario->codAni;
            $_SESSION['idAni'] = $id;

            $idOng=$usuario->cod_Ong;
            $_SESSION['idOng']=$idOng;
            ?>
                <?php if (isset($_SESSION['erro'])) { ?>
                    <div class="row justify-content-center">
                        <div class="col-6">
                        <div class="alert alert-danger">
                            <?php echo $_SESSION['erro']; ?>
                        </div>
                        </div>
                    </div>
                    <?php unset($_SESSION['erro']);}?>
            <div class="col-sm-6 col-md-4">
            

                <div class="thumbnail" id ="imagens">

                <?php echo "<img src='fotos/".$usuario->fotoAni."' alt='Foto de exibição'  /><br />" ;?>

                    <div class="caption">
                    
                        <strong>Nome:</strong> <?php  echo " " . $usuario->nomeAni . ""; ?> <br/>
                        <strong>Raça:</strong> <?php  echo " " . $usuario->racaAni . ""; ?> <br/>
                        <strong>Idade:</strong> <?php  echo " " . $usuario->idadeAni . ""; ?> <br/>
                        <strong>Descrição:</strong> <?php  echo " " . $usuario->descricaoAni . ""; ?> <br/>
                       
                        <a href="animaloff.php?idAni=<?php echo $_SESSION['idAni']?>&idOng=<?php echo $_SESSION['idOng'];?>" class="btn btn-success">Agendar </a> <br/>
                    </div>
                    

                </div>

            </div>

        
<?php  }?>
  </div> <!-- /container -->
  
		<?php require "rodape.php";?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
