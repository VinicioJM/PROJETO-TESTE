<!DOCTYPE html>
<html lang="pt-br">
	 <?php require "cabecarious.php";
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

    <title>PetLandia</title>
			
   
    <!-- Main component for a primary marketing message or call to action -->
	<?php if (isset($_SESSION['certo'])) { ?>
			<div class="row justify-content-center">
				<div class="col-6">
				<div class="alert alert-success">
					<?php echo $_SESSION['certo']; ?>
				</div>
				</div>
			</div>
			<?php unset($_SESSION['certo']);}?>
		
			<?php if (isset($_SESSION['erro'])) { ?>
			<div class="row justify-content-center">
				<div class="col-6">
				<div class="alert alert-danger">
					<?php echo $_SESSION['erro']; ?>
				</div>
				</div>
			</div>
			<?php unset($_SESSION['erro']);}?>


    <div class="jumbotron">
	<!-- Nav tabs -->
	<ul class="tablist" role="tablist">
				<li role="presentation" class="active"><a href="#featured-item" aria-controls="featured-item" role="tab" data-toggle="tab">POODLE</a></li>
				<li role="presentation"><a href="#best-seller" aria-controls="best-seller" role="tab" data-toggle="tab">PASTOR ALEMÃO</a></li>
				<li role="presentation"><a href="#discount" aria-controls="discount" role="tab" data-toggle="tab">VIRA-LATA</a></li>
				<li role="presentation"><a href="#premium" aria-controls="premium" role="tab" data-toggle="tab">ROTTWEILER</a></li>
				<li role="presentation"><a href="#gift-idea" aria-controls="gift-idea" role="tab" data-toggle="tab">PINSCHER</a></li>
				</ul>
	<!-- Tab panes -->
	<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="featured-item">
						<div class="tab-text">
						<h2>POODLE</h2>
						<p>Poodle (em francês: caniche), de acordo com a Federação Cinológica Internacional é oriunda da França, era utilizado como cão de caça a aves aquáticas. É considerada a segunda raça mais inteligente do mundo, de acordo com a listagem elaborada por Stanley Coren.</p>
						</div> <!-- tab-text -->
						<img class="slide-img" src="img/poodle2.png"/>
					</div>
					<div role="tabpanel" class="tab-pane" id="best-seller">
						<div class="tab-text">
						<h2>PASTOR ALEMÃO</h2>
						<p>O pastor se disseminou após a 1ª Guerra, quando exércitos inimigos da Alemanha levaram filhotes para seus países. Os dois criadores alemães iniciaram o melhoramento da raça em 1899, fundando uma organização dedicada a aprimorá-la. O intuito era gerar um animal útil não só em fazendas, mas em múltiplas frentes.</p>
						</div> <!-- tab-text -->
						<img class="slide-img" src="img/pastor.png"/>
					</div>	    
					<div role="tabpanel" class="tab-pane" id="discount">
						<div class="tab-text">
						<h2>VIRA-LATA</h2>
						<p>  O vira-lata é uma paixão nacional. Ele aparece como o pet favorito dos brasileiros em diferentes pesquisas. é um cão de raiz. De muitas raízes. A mistura genética é um dos seus trunfos. Como tem influências diversas, o Sem Raça Definida (SRD, sigla usada pelos veterinários) apresenta uma gama variada de tamanhos, cores e habilidades.</p>
						</div> <!-- tab-text -->
						<img class="slide-img" src="img/viralata.png"/>
					</div>
					<div role="tabpanel" class="tab-pane" id="premium">
						<div class="tab-text">
						<h2>ROTTWEILER</h2>
						<p>Rottweiler, esses grandalhões tendem a apresentar comportamento territorial e dominante, mas com orientação e afeto, o rottweiler torna-se uma doçura. Tanto que a raça é utilizada em terapias. São muito brincalhões e apegados ao dono.</p>
						</div> <!-- tab-text -->
						<img class="slide-img" src="img/rottweiler.png"/>
					</div>
					<div role="tabpanel" class="tab-pane" id="gift-idea">
						<div class="tab-text">
						<h2>PINSCHER</h2>
						<p>O pinscher tem o pelo sempre curto, com cores que vão do caramelo ao preto. Ele é um otimo cão de guarda apesar do tamanho pois são muito ousados</p>
						</div> <!-- tab-text -->
						<img class="slide-img" src="img/pinscher.png"/>
					</div>
				</div>
			</div> <!-- jumbotron -->

			<div class="row">

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
				   
					<a href="animal.php?idAni=<?php echo $_SESSION['idAni']?>&idOng=<?php echo $_SESSION['idOng'];?>" class="btn btn-success">Agendar </a> <br/>
				</div>
				

			</div>

		</div>

	
<?php  }?>
</div>
  </div> <!-- /container -->
  
		<?php require "rodape.php";?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
