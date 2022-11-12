<!DOCTYPE html>
<html lang="pt-br">
   <?php require "cabecario.php";
   require_once('config/conn.php');
   
   
	?>


  
	<head>
		<link href="http://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet" type="text/css"/>

		<!-- Custom styles for this template (imports bootstrap from LESS) -->
		<link href="css/style.css" rel="stylesheet">
		<meta charset='utf-8' />
<link href='packages/core/main.css' rel='stylesheet' />
<link href='packages/daygrid/main.css' rel='stylesheet' />
<script src='packages/core/main.js'></script>
<script src='packages/interaction/main.js'></script>
<script src='packages/daygrid/main.js'></script>
<script src='packages/core/locales/pt-br.js'></script>



	</head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  
    <body>
      
		
    <h1>CADASTRO DE ONG</h1><br>
     <?php if(isset($_SESSION['erro'])){
    echo $_SESSION['erro'];
    unset($_SESSION['erro']);
    }
     ?>
      
      <form action="cadastrandoong.php" method="Post">
        <div class="form-group">
          <label >Nome da Ong</label>
          <input type="text" class="form-control" id="" name="nome" placeholder="">
        </div>
        <div class="form-group">
          <label >CNPJ/CPF</label>
          <input type="text" class="form-control" id="" name="cpf" placeholder="">
        </div>
        <div class="form-group">
          <label >Telefone</label>
          <input type="text" class="form-control" id="" name="telefone" placeholder="">
        </div>
        <div class="form-group">
          <label >Logradouro</label>
          <input type="text" class="form-control" id="" name="rua" placeholder="">
        </div>
        <div class="form-group">
          <label >Bairro</label>
          <input type="text" class="form-control" id="" name="bairro" placeholder="">
        </div>
        <div class="form-group">
          <label >Cidade</label>
          <input type="text" class="form-control" id="" name="cidade" placeholder="">
        </div>
        <div class="form-group">
          <label >Cep</label>
          <input type="text" class="form-control" id="" name="cep" placeholder="">
        </div>
        <div class="form-group">
          <label >Usuário</label>
          <input type="text" class="form-control" id="" name="us" placeholder="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Endereço de email</label>
          <input type="email" class="form-control" id="" name= "email" aria-describedby="emailHelp" placeholder="Seu email">
          <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Senha</label>
          <input type="password" class="form-control" id="" name="senha" placeholder="Senha">
        </div>
        
          <button type="submit" class="btn btn-primary">Cadastrar</button><p><br>
          
          <button type="submit" class="btn btn-danger"><a name="sair" href="index.php" >Voltar</a></button>
         
      </form>
      

  
		<?php require "rodape.php";?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
  </body>
</html>


<?php

require "cabecario.php";
?>
<html>

<body>


<div class="contaner" > 
   
     
</div>
<?php require "rodape.php";
if(isset($_SESSION['erro'])){
    echo $_SESSION['erro'];
    unset($_SESSION['erro']);
}
  ?>
    </body>
</html>