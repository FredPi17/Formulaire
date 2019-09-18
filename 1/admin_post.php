<?php
include('include/utilisateur.php');
$error = 0;
$message = '';

/* -------------------- FONCTION CONTROLE FORM INSCRIPTION() ------------------ */

if (!filter_var($_GET['mail'], FILTER_VALIDATE_EMAIL)) {
  $error = 1;
}
if (strlen($_GET['mdp'])< 5) {
  $error = 1;
  $message .= 'Mot de passe trop court';
}
if ($_GET['mdp'] != $_GET['mdpC']) {
  $error = 1;
  $message .= '<br />Mot de passe pas identiques';
}

global $bdd3;
if (!$error){
  ajouteUtilisateur();
  }
elseif ($error){
  header("Location:administration.php?error=$message");
}
 ?>
