<?php 
if (!isset($_SESSION['usuario'])) {
	require_once "cabecario.php";
    
}
  require_once('config/conn.php');?>

<?php               $idAni = $_GET['idAni'];
                     $idOng = $_GET['idOng'];
                     $sql = mysqli_query($conexao, "SELECT * FROM animal WHERE codAni = $idAni ");
                     $sql1 = mysqli_query($conexao, "SELECT * FROM ong WHERE codOng = $idOng ");
                     ?>
  <body>

  
    <section id="" class="">
      <div class="row">
      
	<div class="col-md-8">
	  <div class="row">

      
	    <div class="col-md-4">
        <?php while ($ani = mysqli_fetch_object($sql)) {?>
        
           <?php echo "<img class='main-image' src='fotos/".$ani->fotoAni."' alt='Foto de exibição'  /><br />" ;?>
      
        </div> <!-- col-md-4 -->
        
	    <div class="col-md-8">
	      <h2> <strong>Nome:</strong><?php  echo " " . $ani->nomeAni . ""; ?> </h2>
	      
	      <hr/>
	      <p> 
              
		  
                        <strong>Raça:</strong> <?php  echo " " . $ani->racaAni . ""; ?> <br/>
                        <strong>Idade:</strong> <?php  echo " " . $ani->idadeAni . ""; ?> <br/>
                       
	      </p>
	      <a href= "erro.php"  class="btn btn-success" name="cadastrar">Agendar</a>
	      <br/><br/><br/>
		 
	      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
		  <div class="panel-heading" role="tab" id="headingOne">
		    <h4 class="panel-title">
			  <strong>Descrição</strong>
		      </a>
		    </h4>
		  </div>
		  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		    <div class="panel-body">
			<?php  echo " " . $ani->descricaoAni . ""; ?>
		    </div>
		  </div>
		</div>
		<?php } while ($ong = mysqli_fetch_object($sql1)) {?>
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		
		<div class="panel panel-default">
		  <div class="panel-heading" role="tab" id="headingOne">
		    <h4 class="panel-title">
			  <strong>Nome da Ong</strong>
		      </a>
		    </h4>
		  </div>
		  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		    <div class="panel-body">
			<?php  echo " " . $ong->nomeOng . ""; ?>
		    </div>
		  </div>
		</div>
		
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
		  <div class="panel-heading" role="tab" id="headingOne">
		    <h4 class="panel-title">
			  <strong>Endereço da Ong</strong>
		      </a>
		    </h4>
		  </div>
		  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		    <div class="panel-body">
						<strong>Cidade:</strong> <?php  echo " " . $ong->cidadeOng . ""; ?> <br/>
						<strong>Rua:</strong> <?php  echo " " . $ong->logradouroOng . ""; ?> <br/>
						<strong>Bairro:</strong> <?php  echo " " . $ong->bairroOng . ""; ?> <br/>
						<strong>Email:</strong> <?php  echo " " . $ong->emailOng . ""; ?> <br/>
						<strong>Telefone:</strong> <?php  echo " " . $ong->telefoneOng . ""; ?> <br/>
                        
		    </div>
		  </div>
		</div>
	      </div>
	    </div> <!-- col-md-8 -->
	  </div> <!-- row -->
	</div> <!-- col-md-8 -->
	
		<?php }?>  
	
      </div> <!-- row -->
    </section>
        
  </div> <!-- /container -->
  
  <?php require_once "rodape.php";?>
  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
