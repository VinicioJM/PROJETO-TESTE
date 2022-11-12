
<?php

require "cabecariopro.php";
?>
<?php
// Conexão com o banco de dados
require_once('config/conn.php');

// Se o usuário clicou no botão cadastrar efetua as ações
if (isset($_POST['cadastrar'])) {
	
	// Recupera os dados dos campos
	$nome= $_POST['nome'];
$raca= $_POST['raca'];
$tip= $_POST['tip'];
$ida= $_POST['ida'];
$des= $_POST['des'];
	$foto = $_FILES["foto"];
	$pasta = 'fotos';
	
	$codOng = $_SESSION['idOng'];


	
	// Se a foto estiver sido selecionada
	if (!empty($foto["name"])) {
		
		// Largura máxima em pixels
		$largura = 5000;
		// Altura máxima em pixels
		$altura = 5000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 500000000;

		$error = array();

    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
	
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($foto["tmp_name"]);
	
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}

		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}
		
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($foto["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}

		// Se não houver nenhum erro
		if (count($error) == 0) {
		
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "fotos/" . $nome_imagem;

			// Faz o upload da imagem para seu respectivo caminho
      move_uploaded_file($foto["tmp_name"], $caminho_imagem);
      if(empty($raca) || empty($tip) || empty($nome) ){ 
        $_SESSION['erro'] = "Preencha os campos nome, raça e tipo Por Favor.";
        header('Location: cadastroani.php');
        exit;
    }
		
			// Insere os dados no banco
			$sql = mysqli_query( $conexao, "INSERT INTO animal (nomeAni, racaAni, tipoAni, idadeAni, descricaoAni, fotoAni, cod_Ong) VALUES ('$nome', '$raca', '$tip', '$ida', '$des', '$nome_imagem', '$codOng') ");
		
			// Se os dados forem inseridos com sucesso
			if ($sql){
        $_SESSION['certo'] = "Cadastro Realizado com sucesso!!!";
        header('Location: indexpro.php');
			}
		}
	
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
	}
}
?>
<html>
  <head>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="http://malsup.github.io/min/jquery.form.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

   
</head>

<body>


<div class="contaner" > 
     <h1>CADASTRO DE ANIMAIS</h1><br>
     <?php if(isset($_SESSION['erro'])){
    echo $_SESSION['erro'];
    unset($_SESSION['erro']);
    }
     ?>
      
         
      </form>
      <form id="formulario" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" name="cadastro">

        <div id="mensagem"></div>
        <div class="form-group">
          <label >Nome do Animal</label>
          <input type="text" class="form-control" id="" name="nome" placeholder="">
        </div>
        <div class="form-group">
          <label >Raça do Animal</label>
          <input type="text" class="form-control" id="" name="raca" placeholder="">
        </div>
        <div class="form-group">
          <label >Tipo do Animal</label>
          <input type="text" class="form-control" id="" name="tip" placeholder="">
        </div>
        <div class="form-group">
          <label >Idade do Animal</label>
          <input type="text" class="form-control" id="" name="ida" placeholder="">
        </div>
        <div class="form-group">
          <label >Descrição do Animal</label>
          <input type="text" class="form-control" id="" name="des" placeholder="">
        </div>

            <div class="form-group">
                <label>Foto</label>
                <input class="form-control" type="file" name="foto" required/>
            </div>

            <input id="salvar" name="cadastrar" class="btn btn-primary" type="submit" value="Cadastrar" data-loading-text="Salvando..."/>
            <button type="submit" class="btn btn-danger"><a name="sair" href="indexpro.php" >Voltar</a></button>
         

            </form><br>
            
     
</div>
<?php require "rodape.php";
  ?>
    </body>
</html>