<?php

// Informações para conexão
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'petlandia';
$dsn = "mysql:host={$host};port=3306;dbname={$banco}";
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

try 
{
    // Conectando
    $pdo = new PDO($dsn, $usuario, $senha);
} 
catch (PDOException $e) 
{
    // Se ocorrer algum erro na conexão
    die($e->getMessage());
}