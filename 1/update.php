<?php
include('include/config.php');
include('include/outils.php');
global $bdd;
global $bdd2;
if(isset($_GET['modifier'])){
$p_requete = $bdd->prepare('UPDATE infos SET dateDebut = :dateDebut  , dateFin = :dateFin  , intitule = :intitule  , diplome = :diplome  , calendrier = :calendrier  , tarifFormation = :tarifFormation  , coutFormation = :coutFormation  , coutHoraire = :coutHoraire where id = 1');
  $p_requete -> execute(array(
    'dateDebut' => $_GET['bacplus3sdcDateDebut'],
    'dateFin' => $_GET['bacplus3sdcDateFin'],
    'intitule' => $_GET['bacplus3sdcIntitule'],
    'diplome' => $_GET['bacplus3sdcDiplome'],
    'calendrier' => $_GET['bacplus3sdcCalendrier'],
    'tarifFormation' => $_GET['bacplus3sdcTarif'],
    'coutFormation' => $_GET['bacplus3sdcCout'],
    'coutHoraire' => $_GET['bacplus3sdcHoraire']));

$p_requete = $bdd->prepare('UPDATE infos SET dateDebut = :dateDebut  , dateFin = :dateFin  , intitule = :intitule  , diplome = :diplome  , calendrier = :calendrier  , tarifFormation = :tarifFormation  , coutFormation = :coutFormation  , coutHoraire = :coutHoraire where id = 2');
  $p_requete -> execute(array(
    'dateDebut' => $_GET['bacplus45sdcDateDebut'],
    'dateFin' => $_GET['bacplus45sdcDateFin'],
    'intitule' => $_GET['bacplus45sdcIntitule'],
    'diplome' => $_GET['bacplus45sdcDiplome'],
    'calendrier' => $_GET['bacplus45sdcCalendrier'],
    'tarifFormation' => $_GET['bacplus45sdcTarif'],
    'coutFormation' => $_GET['bacplus45sdcCout'],
    'coutHoraire' => $_GET['bacplus45sdcHoraire']));

$p_requete = $bdd->prepare('UPDATE infos SET dateDebut = :dateDebut  , dateFin = :dateFin  , intitule = :intitule  , diplome = :diplome  , calendrier = :calendrier  , tarifFormation = :tarifFormation  , coutFormation = :coutFormation  , coutHoraire = :coutHoraire where id = 3');
  $p_requete -> execute(array(
    'dateDebut' => $_GET['bacplus5sdcDateDebut'],
    'dateFin' => $_GET['bacplus5sdcDateFin'],
    'intitule' => $_GET['bacplus5sdcIntitule'],
    'diplome' => $_GET['bacplus5sdcDiplome'],
    'calendrier' => $_GET['bacplus5sdcCalendrier'],
    'tarifFormation' => $_GET['bacplus5sdcTarif'],
    'coutFormation' => $_GET['bacplus5sdcCout'],
    'coutHoraire' => $_GET['bacplus5sdcHoraire']));

$p_requete = $bdd2->prepare('UPDATE infos SET dateDebut = :dateDebut  , dateFin = :dateFin  , intitule = :intitule  , diplome = :diplome  , calendrier = :calendrier  , tarifFormation = :tarifFormation  , coutFormation = :coutFormation  , coutHoraire = :coutHoraire where id = 1');
  $p_requete -> execute(array(
    'dateDebut' => $_GET['bacplus3idracDateDebut'],
    'dateFin' => $_GET['bacplus3idracDateFin'],
    'intitule' => $_GET['bacplus3idracIntitule'],
    'diplome' => $_GET['bacplus3idracDiplome'],
    'calendrier' => $_GET['bacplus3idracCalendrier'],
    'tarifFormation' => $_GET['bacplus3idracTarif'],
    'coutFormation' => $_GET['bacplus3idracCout'],
    'coutHoraire' => $_GET['bacplus3idracHoraire']));

$p_requete = $bdd2->prepare('UPDATE infos SET dateDebut = :dateDebut  , dateFin = :dateFin  , intitule = :intitule  , diplome = :diplome  , calendrier = :calendrier  , tarifFormation = :tarifFormation  , coutFormation = :coutFormation  , coutHoraire = :coutHoraire where id = 3');
  $p_requete -> execute(array(
    'dateDebut' => $_GET['bacplus45idracDateDebut'],
    'dateFin' => $_GET['bacplus45idracDateFin'],
    'intitule' => $_GET['bacplus45idracIntitule'],
    'diplome' => $_GET['bacplus45idracDiplome'],
    'calendrier' => $_GET['bacplus45idracCalendrier'],
    'tarifFormation' => $_GET['bacplus45idracTarif'],
    'coutFormation' => $_GET['bacplus45idracCout'],
    'coutHoraire' => $_GET['bacplus45idracHoraire']));

header('Location: administration.php');
die();
}
else{
 echo 'Joue pas avec les URLS !';
}
?>
