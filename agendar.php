<?php
session_start();
require_once('config/conn.php');
$hora = $_POST['hora'];
$data = $_POST['data'];
$idAni = $_GET['idAni'];
$idOng = $_GET['idOng'];
$iduser= $_GET['iduser'];

$sql ="SELECT * FROM usuario WHERE codUs = $iduser ";
$result1 = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_assoc($result1);
$nomeUs = $dados['nomeUs'] ;

 $query = "INSERT INTO agendamento (dataAge, horaAge, codUs, codAni, codOng, nomeUs) VALUES ('$data.$hora', '$hora ', '$iduser', '$idAni', '$idOng', '$nomeUs')";
 $result = mysqli_query($conexao, $query);

 if ($result) {
        $_SESSION['certo'] = "Agendado com sucesso!!!";
        header('location: indexus.php'); 
       
 } 