<?php
// Incluindo arquivo de conexão
require_once('config/conn.php');
 

    require "cabecarious.php";
    $nome = $_GET['buscar'];
    $sql = mysqli_query($conexao, "SELECT * FROM animal WHERE nomeAni = '$nome' ORDER BY nomeAni");
    $row = mysqli_num_rows($sql);
    if($row > 0){
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/main.css"/>
    <style type="text/css">
   div#imagens img {
width: 300px!important;
height: 300px!important;
}
   

    </style>
</head>


<body>


<div class="container">

    <div class="row">

    <?php while ($usuario = mysqli_fetch_object($sql)) {
        $id = $usuario->codAni;
            $_SESSION['idAni'] = $id;

            $idOng=$usuario->cod_Ong;
            $_SESSION['idOng']=$idOng;
            ?>

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

</div><?php }else{ 
$_SESSION['erro'] = "Desculpe, Nenhum Nome encontrado.";
header('location: indexus.php'); }?>
<?php require "rodape.php";?>

</body>
</html>