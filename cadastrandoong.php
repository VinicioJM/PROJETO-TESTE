<?php
session_start();
require_once('config/conn.php');
$nome= $_POST['nome'];
$cpf= $_POST['cpf'];
$telefone= $_POST['telefone'];
$rua= $_POST['rua'];
$bairro= $_POST['bairro'];
$cidade= $_POST['cidade'];
$cep= $_POST['cep'];
$us= $_POST['us'];
$email = $_POST['email'];
$senha = $_POST['senha'];


if(empty($email) || empty($senha) || empty($nome) || empty($cpf) || empty($rua) || empty($bairro) || empty($cidade) ){ 
    $_SESSION['erro'] = "Preencha os campos Email, Senha, Nome, CNPJ/CPF, Logradouro, Bairro e Cidade Por Favor.";
    header('Location: cadastroong.php');
    exit;
}

 $query = "INSERT INTO ong (nomeOng, cnpjcpfOng, telefoneOng, logradouroOng, bairroOng, cidadeOng, cepOng, usuarioOng, emailOng, SenhaOng) VALUES ('$nome', '$cpf', '$telefone', '$rua', '$bairro', '$cidade', '$cep', '$us', '$email', '$senha' ) ";
 $result = mysqli_query($conexao, $query);
 $_SESSION['error']="Erro : Por favor efetue o cadastro novamente !! ";
 $error = $_SESSION['error'];

 
 if($result) { 
    $_SESSION['certo'] = "Cadastro Realizado com sucesso!!!";
        header('Location: index.php');

   
    
 }else{ 
    echo $error;
    header('Location :cadastroong.php');
}
