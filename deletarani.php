<?php
session_start();
require_once('config/conn.php');

$idanimal=$_GET['idAni'];
 $query = "DELETE FROM animal WHERE codAni = $idanimal";
 $result = mysqli_query($conexao, $query);

 if ($result) {
        $_SESSION['certo'] = "Deletado com sucesso!!!";
       header('Location: indexpro.php');
 } 