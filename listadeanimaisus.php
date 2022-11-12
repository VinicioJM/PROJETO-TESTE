<?php
// Incluindo arquivo de conexão
require_once('config/conn.php');
 

    require "cabecarious.php";
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
                       
                        <a href="animal.php?idAni=<?php echo $_SESSION['idAni']?>&idOng=<?php echo $_SESSION['idOng'];?>" class="btn btn-success">Agendar </a> <br/>
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