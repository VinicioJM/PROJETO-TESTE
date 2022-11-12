<?php
session_start();
require "config/conn.php";

$email = $_POST['email'];
$senha = $_POST['senha'];
if(empty($email) || empty($senha)){ 
    $_SESSION['erro'] = "Preencha os campos Email e Senha correto Por Favor.";
    header('Location: index.php');
    exit;
}

$query = "SELECT * FROM usuario WHERE emailUs = '$email' AND senhaUs = '$senha'";
$result = mysqli_query($conexao, $query);
$dados = mysqli_fetch_assoc($result);
$row = mysqli_num_rows($result);

$query1 = "SELECT * FROM ong WHERE emailOng = '$email'  AND senhaOng = '$senha'";
$result1 = mysqli_query($conexao, $query1);
$dados1 = mysqli_fetch_assoc($result1);
$row1 = mysqli_num_rows($result1);


if
($row1 == 1) {
    $_SESSION['id_usuario'] = $dados1['nomeOng'];
    $_SESSION['usuario'] = $email;
    $_SESSION['idOng']= $dados1['codOng'];
    header('location: indexpro.php'); 
}elseif ($row == 1) {
    $_SESSION['id_usuario'] = $dados['codUs'];
    $_SESSION['usuario'] = $email;
    header('location: indexus.php');
}else {
    $_SESSION['erro'] = "ERRO: Usuário ou senha inválidos.";
    header('location: index.php');
}
