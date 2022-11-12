<?php
session_start();
require_once('config/conn.php');
$nome= $_POST['nome'];
$raca= $_POST['raca'];
$tip= $_POST['tip'];
$ida= $_POST['ida'];
$des= $_POST['des'];

if(empty($raca) || empty($tip) || empty($nome) ){ 
    $_SESSION['erro'] = "Preencha os campos nome, raça e tipo Por Favor.";
    header('Location: cadastroani.php');
    exit;
}

 $query = "INSERT INTO animal (nomeAni, racaAni, tipoAni, idadeAni, descricaoAni) VALUES ('$nome', '$raca', '$tip', '$ida', '$des') ";
 $result = mysqli_query($conexao, $query);
 $_SESSION['error']="Erro : Por favor efetue o cadastro novamente !! ";
 $error = $_SESSION['error'];

 
 if($result) { 
    $_SESSION['certo'] = "Cadastro Realizado com sucesso!!!";
        header('Location: indexpro.php');

   
    
 }else{ 
    echo $error;
    header('Location :cadastroani.php');
}

