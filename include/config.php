<?php

/*** DECLARATION DEDS VARIABLES DE CONNEXION AUX BASES DE DONNEES ***/

define("DB_SERVER", "localhost");
define("DB_BASE1", "sdc");
define("DB_BASE2", "idrac");
define("DB_USER", "root");
define("DB_PASSWORD", "");
/**
*\ $bdd permet la connexion à la base de données de supdecom
*\ $bdd2 permet la connexion à la base de données de idrac
***/

$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=' . DB_SERVER . ';dbname=' . DB_BASE1, DB_USER, DB_PASSWORD, $pdo_options);
$bdd->exec("Set character set utf8");
$bdd2 = new PDO('mysql:host=' . DB_SERVER . ';dbname=' . DB_BASE2, DB_USER, DB_PASSWORD, $pdo_options);
$bdd2->exec("Set character set utf8");

?>
