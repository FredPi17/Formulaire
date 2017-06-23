<?php
  define("DB_SERVER", "localhost");
	define("DB_BASE", "idrac");
	define("DB_USER", "root");
	define("DB_PASSWORD", "");
	define('DB_SALT', 'Les5G'); // C'est le grain de sel

	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd = new PDO('mysql:host=' . DB_SERVER . ';dbname=' . DB_BASE, DB_USER, DB_PASSWORD, $pdo_options);
	$bdd->exec("Set character set utf8");

?>
