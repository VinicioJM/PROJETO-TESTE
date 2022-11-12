<?php
session_start();
require_once('config/conn.php');
$nome= $_POST['nome'];
$telefone= $_POST['telefone'];
$us= $_POST['us'];
$email = $_POST['email'];
$senha = $_POST['senha'];


if(empty($email) || empty($senha) || empty($nome)){ 
    $_SESSION['erro'] = "Preencha os campos Email, Senha, Nome, Por Favor.";
    header('Location: cadastrous.php');
    exit;
}

 $query = "INSERT INTO usuario (nomeUs, telefoneUs, usuarioUs, emailUs, SenhaUs) VALUES ('$nome', '$telefone', '$us', '$email', '$senha' ) ";
 $result = mysqli_query($conexao, $query);
 
 

 
 if($result) { 
    $_SESSION['certo'] = "Cadastro Realizado com sucesso!!!";
        header('Location: index.php');
        exit;
    
 }else{ 
    $_SESSION['erro']="Erro : Por favor efetue o cadastro novamente !! ";
    header('Location :cadastrous.php');
}
