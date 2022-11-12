<!DOCTYPE html>
<html lang="pt-br">
<head>
<link href="http://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet" type="text/css"/>
<!-- Custom styles for this template (imports bootstrap from LESS) -->
<link href="css/style.css" rel="stylesheet">
<meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/main.css"/>
    <style type="text/css">
   div#imagens img {
width: 300px!important;
height: 300px!important;
}
   
.hidden{
  display:none;
}
input{
  display:block;
}</style>
<script type="text/javascript">
           function mostrar(){
		document.getElementById('for').style.display = 'block';}
	
        </script>

<?php session_start();
?>
</head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>PetLandia</title>

<body>

<div class="container">

<header>
  <div class="row">
<div class="col-md-4 col-sm-12">
  <h1 class="logo"><img src="https://img.icons8.com/ios-filled/50/000000/animal-shelter.png"/></i> Pet<span class="primary">Landia</span></h1>
  <p class="subtext">Adote seu Animal!</p>
</div> <!-- col-md-4 -->
<div class="col-md-8 col-sm-12">
  <form class="form-inline" action="loguot.php">
    <div class="form-group">
    </div>
    <div class="form-group">
    <?php echo $_SESSION['usuario'];?>
    </div>
    <button type="submit" class="btn btn-danger">Sair</button><p>
    
        
  </form>
</div> <!-- col-md-8 -->
  </div> <!-- row -->
</header>

<!-- Static navbar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle snavigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="listadeanimaisus.php"><font color="black">Lista de Animais</font></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
    <form class="navbar-form" action="buscadeanimal.php" method="get">
      <div class="form-group">
    <input type="text" class="form-control" name="buscar" placeholder="Procure pelo nome do PET"/>
      </div>
      <button type="submit" class="btn btn-default">Procurar</button>
    </form>
    
      </ul>
    
    </div><!--/.nav-collapse -->
  </div><!--/.container-fluid -->
</nav>
