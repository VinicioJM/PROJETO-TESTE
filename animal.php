<?php 
if (!isset($_SESSION['usuario'])) {
	require_once "cabecarious.php";
    
}
  require_once('config/conn.php');?>

<?php               $idAni = $_GET['idAni'];
                     $idOng = $_GET['idOng'];
                     $sql = mysqli_query($conexao, "SELECT * FROM animal WHERE codAni = $idAni ");
					 $sql1 = mysqli_query($conexao, "SELECT * FROM ong WHERE codOng = $idOng ");
					 $sql2 =  mysqli_query($conexao, "SELECT * FROM usuario");
					 $dados = mysqli_fetch_assoc($sql2);
					 $usuario=$_SESSION['id_usuario'];

                     ?>
 
 
 <body>

  
    <section id="" class="">
      <div class="row">
      
	<div class="col-md-8">
	  	<div class="row">
      
	    	<div class="col-6 col-md-4">
        		<?php while ($ani = mysqli_fetch_object($sql)) {?>
        
          		 <?php echo "<img class='main-image' src='fotos/".$ani->fotoAni."' alt='Foto de exibição'  /><br />" ;?>
      
       		</div> <!-- col-md-4 -->
        
	    <div class="col-6 col-md-5">
	      		<h2> <strong>Nome:</strong><?php  echo " " . $ani->nomeAni . ""; ?> </h2>
	      
	      			<hr/>
	     			 <p> 
                        <strong>Raça:</strong> <?php  echo " " . $ani->racaAni . ""; ?> <br/>
                        <strong>Idade:</strong> <?php  echo " " . $ani->idadeAni . ""; ?> <br/>
                       
	      			</p>
		  <a onClick="mostrar()" class="btn btn-success">Agendar</a>
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
	<div id ="for" style="display: none;"  class="col-6 col-md-3 ml-auto">
	
	<form id="formulario" action="agendar.php?idAni=<?php echo $idAni?>&idOng=<?php echo $idOng?>&iduser=<?php echo $usuario;?>" method="post" enctype="multipart/form-data" name="cadastro">

	<div id="mensagem"></div>
		<div class="form-group">
  			<label >Data para Agendamento</label>
  			<input type="date" class="form-control" id="" name="data" placeholder="" required>
		</div>
	<div class="form-group">
  			<label >Hora do Agendamento</label>
  				<input type="time" class="form-control" id="" name="hora" placeholder="" required>
	</div>
	
	
	<input id="salvar" name="cadastrar" class="btn btn-primary" type="submit" value="Cadastrar" data-loading-text="Salvando..."/>
	<button type="submit" class="btn btn-danger"><a name="sair" href="indexus.php" >Voltar</a></button>
 

	</form><br>
	</div> <!-- col-md-4 -->
		</div>
	
		<?php }?>  
	
       <!-- row -->
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
