<?php
session_start();
require_once('config/conn.php');

        $_SESSION['erro'] = "Erro Por Favor se Cadastre!";
       header('Location: listadeanimais.php');
 