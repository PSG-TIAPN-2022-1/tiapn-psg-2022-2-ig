<?php 

$link = "http://localhost:6060/tiapn-psg-2022-2-ig/codigo/";

/*
Senha BD
localhost
gru41729_admin
nS2cSUEAIFXo
*/


$config_host = "localhost";
$config_user = "root";
$config_pass = "";
$config_sql = "bd_assinu";
session_start();
date_default_timezone_set("America/Sao_Paulo");
$pdo = new PDO("mysql:host=".$config_host.";dbname=".$config_sql.";charset=UTF8;","".$config_user."","".$config_pass."");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);


?>