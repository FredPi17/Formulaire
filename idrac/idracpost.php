<<<<<<< HEAD:idrac/idracpost.php
<?php
include('../include/config.php');

/*** On vérifie s'il y a $_GET['annuler'] ***/
/*
s'il y a $_GET['annuler'] => on retourne sur index.php de supdecom
Sinon on fait les actions de dessous
*/
if(isset($_GET['annuler'])){
  header('Location:index.php');
  die();
}

/***
On récupère le dernier numContrat pour lui ajouter 1 pour que chaque formulaire ait un numéro unique
***/
else{
  $last=$bdd2->query('SELECT numContrat from absences ORDER BY numContrat DESC LIMIT 1');
  while ($donnees = $last->fetch()){
      $numContrat = $donnees['numContrat'];
    }
    if ($numContrat == NULL){
      $numContrat = 1;
    }
    else{
      $numContrat += 1;
    }

    /*** Verification du nombre d'heures ***/

  if(isset($_GET['dureeHebdo'])){
    if ($_GET['dureeHebdo'] == 'on'){
      $duree = '35';
    }
    else{
      $duree = $_GET['dureeHebdo'];
    }
  }

  /*** Verification de quel type de contrat ***/

  if(isset($_GET['cdi'])){
    $contrat = 'cdi';
  }
  else{
    $contrat = 'cdd';
  }

  /*** Verification de quel établissement fait partie chaque personne ***/

  if(isset($_GET['etab11'])){
    $etab1 = 'etablissement 1';
  }
  else{
    $etab1 = 'etablissement 2';
  }
  if(isset($_GET['etab21'])){
    $etab2 = 'etablissement 1';
  }
  else{
    $etab2 = 'etablissement 2';
  }
  if(isset($_GET['etab31'])){
    $etab3 = 'etablissement 1';
  }
  else{
    $etab3 = 'etablissement 2';
  }
  if(isset($_GET['etab41'])){
    $etab4 = 'etablissement 1';
  }
  else{
    $etab4 = 'etablissement 2';
  }
  if(isset($_GET['etab51'])){
    $etab5 = 'etablissement 1';
  }
  else{
    $etab5 = 'etablissement 2';
  }
  if(isset($_GET['etab61'])){
    $etab6 = 'etablissement 1';
  }
  else{
    $etab6 = 'etablissement 2';
  }

    /*** Verification si le tuteur veut faire la formation proposée ***/
    /*
    pour cela:
      ->s'il y a $_GET['formTuteur'] => oui il fait la formation
      -> s'il n'y a pas $_GET['formTuteur'] => non il ne fait pas la formation
    */
  if(isset($_GET['formTuteur'])){
    $_GET['formTuteur'] = 'oui';
  }
  else{
    $_GET['formTuteur'] = 'non';
  }

  /**
*\ Insertion des données dans les tables
*\ apprenant contient les données concernant l'apprenant
*\ financhement contient les données concernant le fincancement de la formation
*\ signataire contient les données concernant l'établissement signataire du contrat
*\ execution contient les données concernant l'établissement déexecution du contrat
*\ tuteur contient les données concernant le tuteur
*\ signataireContrat contient les données concernant le signataire du contrat
*\ administration contient les informations du contact administration du dossier
*\ facturation contient les informations du contact de facturation
*\ absences contient les informations du contact des absences
*\ taxeapprentissage contient les informations du contact en charge de la taxe d'apprentissage
*\ contratpro contient les informations concernant le contrat de professionnalisation
  **/

  $p_requete1= $bdd2->prepare('insert into apprenant (numContrat,  nom, prenom, titre) VALUES (:numContrat, :nom, :prenom, :titre)');
  $p_requete1->execute(array(
    'numContrat' => $numContrat,
    'nom' => $_GET['nom-apprenant'],
    'prenom' => $_GET['prenom'],
    'titre' =>$_GET['titre1'])
  );

  $p_requete3=$bdd2->prepare('insert into financement (numContrat, adresse1, adresse2, commentaire, cp, ville, ocpa, subrogation, formation) VALUES (:numContrat, :adresse1, :adresse2, :commentaire, :cp, :ville, :ocpa, :subrogation, :formation)');
  $p_requete3->execute(array(
    'numContrat' => $numContrat,
    'adresse1' => $_GET['adresse1OCPA'],
    'adresse2' => $_GET['adresse2OCPA'],
    'commentaire' => $_GET['commentaireFactu'],
    'cp' => $_GET['codePostalOCPA'],
    'ville' => $_GET['villeOCPA'],
    'ocpa' => $_GET['OCPA'],
    'subrogation' => $_GET['subrogation'],
    'formation' => $_GET['formTuteur']
  ));
  $p_requete4=$bdd2->prepare('insert into signataire (numContrat, adresse, cp, effectif, NAF, raisonSociale, secteurActivite, SIRET, telephone, ville) VALUES (:numContrat, :adresse, :CP, :effectif, :NAF, :raisonSociale, :secteurActivite, :SIRET, :telephone, :ville)');
  $p_requete4->execute(array(
    'numContrat' => $numContrat,
    'adresse' => $_GET['adresse1'],
    'CP' => $_GET['CP1'],
    'effectif' => $_GET['effectif1'],
    'NAF' => $_GET['NAF1'],
    'raisonSociale' => $_GET['RS1'],
    'secteurActivite' => $_GET['sectActi1'],
    'SIRET' => $_GET['SIRET1'],
    'telephone' => $_GET['tel1'],
    'ville' => $_GET['ville1']
  ));
  $p_requete5=$bdd2->prepare('insert into execution (numContrat, adresse, CP, effectif, NAF, raisonSociale, secteurActivite, SIRET, telephone, ville) VALUES (:numContrat, :adresse, :CP, :effectif, :NAF, :raisonSociale, :secteurActivite, :SIRET, :telephone, :ville)');
  $p_requete5->execute(array(
    'numContrat' => $numContrat,
    'adresse' => $_GET['adresse2'],
    'CP' => $_GET['CP2'],
    'effectif' => $_GET['effectif2'],
    'NAF' => $_GET['NAF2'],
    'raisonSociale' => $_GET['RS2'],
    'secteurActivite' => $_GET['sectActi2'],
    'SIRET' => $_GET['SIRET2'],
    'telephone' => $_GET['tel2'],
    'ville' => $_GET['ville2']
  ));
  $p_requete6=$bdd2->prepare('insert into tuteur (numContrat, adresse, email, fonction, nom, prenom, telephone, titre) VALUES (:numContrat, :adresse, :email, :fonction, :nom, :prenom, :telephone, :titre)');
  $p_requete6->execute(array(
    'numContrat' => $numContrat,
    'adresse' => $etab1,
    'email' =>$_GET['mail2'],
    'fonction' =>$_GET['fonction1'],
    'nom' => $_GET['nom2'],
    'prenom' => $_GET['prenom2'],
    'telephone' => $_GET['tel2'],
    'titre' => $_GET['titre2']
  ));
  $p_requete7=$bdd2->prepare('insert into signatairecontrat (numContrat, adresse, email, fonction, nom, prenom, telephone, titre) VALUES (:numContrat, :adresse, :email, :fonction, :nom, :prenom, :telephone, :titre)');
  $p_requete7->execute(array(
    'numContrat' => $numContrat,
    'adresse' => $etab2,
    'email' =>$_GET['mail3'],
    'fonction' =>$_GET['fonction2'],
    'nom' => $_GET['nom3'],
    'prenom' => $_GET['prenom3'],
    'telephone' => $_GET['tel3'],
    'titre' => $_GET['titre3']
  ));
  $p_requete8=$bdd2->prepare('insert into administration (numContrat, adresse, email, fonction, nom, prenom, telephone, titre) VALUES (:numContrat, :adresse, :email, :fonction, :nom, :prenom, :telephone, :titre)');
  $p_requete8->execute(array(
    'numContrat' => $numContrat,
    'adresse' => $etab3,
    'email' =>$_GET['mail3'],
    'fonction' =>$_GET['fonction3'],
    'nom' => $_GET['nom3'],
    'prenom' => $_GET['prenom4'],
    'telephone' => $_GET['tel4'],
    'titre' => $_GET['titre4']
  ));
  $p_requete9=$bdd2->prepare('insert into facturation (numContrat, adresse, email, fonction, nom, prenom, telephone, titre) VALUES (:numContrat, :adresse, :email, :fonction, :nom, :prenom, :telephone, :titre)');
  $p_requete9->execute(array(
    'numContrat' => $numContrat,
    'adresse' => $etab4,
    'email' =>$_GET['mail4'],
    'fonction' =>$_GET['fonction4'],
    'nom' => $_GET['nom4'],
    'prenom' => $_GET['prenom5'],
    'telephone' => $_GET['tel5'],
    'titre' => $_GET['titre5']
  ));
  $p_requete10=$bdd2->prepare('insert into absences (numContrat, adresse, email, fonction, nom, prenom, telephone, titre) VALUES (:numContrat, :adresse, :email, :fonction, :nom, :prenom, :telephone, :titre)');
  $p_requete10->execute(array(
    'numContrat' => $numContrat,
    'adresse' => $etab5,
    'email' =>$_GET['mail5'],
    'fonction' =>$_GET['fonction5'],
    'nom' => $_GET['nom5'],
    'prenom' => $_GET['prenom6'],
    'telephone' => $_GET['tel6'],
    'titre' => $_GET['titre6']
  ));
  $p_requete11=$bdd2->prepare('insert into taxeapprentissage (numContrat, adresse, email, fonction, nom, prenom, telephone, titre) VALUES (:numContrat, :adresse, :email, :fonction, :nom, :prenom, :telephone, :titre)');
  $p_requete11->execute(array(
    'numContrat' => $numContrat,
    'adresse' => $etab6,
    'email' =>$_GET['mail6'],
    'fonction' =>$_GET['fonction6'],
    'nom' => $_GET['nom6'],
    'prenom' => $_GET['prenom7'],
    'telephone' => $_GET['tel7'],
    'titre' => $_GET['titre7']
  ));
  $p_requete2=$bdd2->prepare('insert into contratpro (numContrat, contrat, dateDebut, dateFin, dureeHebdo, intitule, remuneration) VALUES (:numContrat, :contrat, :dateDebut, :dateFin, :dureeHebdo, :intitule, :remuneration)');
  $p_requete2->execute(array(
    'numContrat' => $numContrat,
    'contrat' => $_GET['contrat'],
    'dateDebut' => $_GET['dateDebutContrat'],
    'dateFin' => $_GET['dateFinContrat'],
    'dureeHebdo' => $duree,
    'intitule' => $_GET['intitulePoste'],
    'remuneration' => $_GET['remunBrute']
  ));

  /*Puis on retourne sur la page index.php de l'idrac */

  header('Location:index.php');
  die();
}
?>
=======
<?php
include('../include/config.php');

/*** On vérifie s'il y a $_GET['annuler'] ***/
/*
s'il y a $_GET['annuler'] => on retourne sur index.php de supdecom
Sinon on fait les actions de dessous
*/
if(isset($_GET['annuler'])){
  header('Location:index.php');
  die();
}

/***
On récupère le dernier numContrat pour lui ajouter 1 pour que chaque formulaire ait un numéro unique
***/
else{
  $last=$bdd2->query('SELECT numContrat from absences ORDER BY numContrat DESC LIMIT 1');
  while ($donnees = $last->fetch()){
      $numContrat = $donnees['numContrat'];
    }
    if ($numContrat == NULL){
      $numContrat = 1;
    }
    else{
      $numContrat += 1;
    }

    /*** Verification du nombre d'heures ***/

  if(isset($_GET['dureeHebdo'])){
    if ($_GET['dureeHebdo'] == 'on'){
      $duree = '35';
    }
    else{
      $duree = $_GET['dureeHebdo'];
    }
  }

  /*** Verification de quel type de contrat ***/

  if(isset($_GET['cdi'])){
    $contrat = 'cdi';
  }
  else{
    $contrat = 'cdd';
  }

  /*** Verification de quel établissement fait partie chaque personne ***/

  if(isset($_GET['etab11'])){
    $etab1 = 'etablissement 1';
  }
  else{
    $etab1 = 'etablissement 2';
  }
  if(isset($_GET['etab21'])){
    $etab2 = 'etablissement 1';
  }
  else{
    $etab2 = 'etablissement 2';
  }
  if(isset($_GET['etab31'])){
    $etab3 = 'etablissement 1';
  }
  else{
    $etab3 = 'etablissement 2';
  }
  if(isset($_GET['etab41'])){
    $etab4 = 'etablissement 1';
  }
  else{
    $etab4 = 'etablissement 2';
  }
  if(isset($_GET['etab51'])){
    $etab5 = 'etablissement 1';
  }
  else{
    $etab5 = 'etablissement 2';
  }
  if(isset($_GET['etab61'])){
    $etab6 = 'etablissement 1';
  }
  else{
    $etab6 = 'etablissement 2';
  }

    /*** Verification si le tuteur veut faire la formation proposée ***/
    /*
    pour cela:
      ->s'il y a $_GET['formTuteur'] => oui il fait la formation
      -> s'il n'y a pas $_GET['formTuteur'] => non il ne fait pas la formation
    */
  if(isset($_GET['formTuteur'])){
    $_GET['formTuteur'] = 'oui';
  }
  else{
    $_GET['formTuteur'] = 'non';
  }

  /**
*\ Insertion des données dans les tables
*\ apprenant contient les données concernant l'apprenant
*\ financhement contient les données concernant le fincancement de la formation
*\ signataire contient les données concernant l'établissement signataire du contrat
*\ execution contient les données concernant l'établissement déexecution du contrat
*\ tuteur contient les données concernant le tuteur
*\ signataireContrat contient les données concernant le signataire du contrat
*\ administration contient les informations du contact administration du dossier
*\ facturation contient les informations du contact de facturation
*\ absences contient les informations du contact des absences
*\ taxeapprentissage contient les informations du contact en charge de la taxe d'apprentissage
*\ contratpro contient les informations concernant le contrat de professionnalisation
  **/

  $p_requete1= $bdd2->prepare('insert into apprenant (numContrat,  nom, prenom, titre) VALUES (:numContrat, :nom, :prenom, :titre)');
  $p_requete1->execute(array(
    'numContrat' => $numContrat,
    'nom' => $_GET['nom-apprenant'],
    'prenom' => $_GET['prenom'],
    'titre' =>$_GET['titre1'])
  );

  $p_requete3=$bdd2->prepare('insert into financement (numContrat, adresse1, adresse2, commentaire, cp, ville, ocpa, subrogation, formation) VALUES (:numContrat, :adresse1, :adresse2, :commentaire, :cp, :ville, :ocpa, :subrogation, :formation)');
  $p_requete3->execute(array(
    'numContrat' => $numContrat,
    'adresse1' => $_GET['adresse1OCPA'],
    'adresse2' => $_GET['adresse2OCPA'],
    'commentaire' => $_GET['commentaireFactu'],
    'cp' => $_GET['codePostalOCPA'],
    'ville' => $_GET['villeOCPA'],
    'ocpa' => $_GET['OCPA'],
    'subrogation' => $_GET['subrogation'],
    'formation' => $_GET['formTuteur']
  ));
  $p_requete4=$bdd2->prepare('insert into signataire (numContrat, adresse, cp, effectif, NAF, raisonSociale, secteurActivite, SIRET, telephone, ville) VALUES (:numContrat, :adresse, :CP, :effectif, :NAF, :raisonSociale, :secteurActivite, :SIRET, :telephone, :ville)');
  $p_requete4->execute(array(
    'numContrat' => $numContrat,
    'adresse' => $_GET['adresse1'],
    'CP' => $_GET['CP1'],
    'effectif' => $_GET['effectif1'],
    'NAF' => $_GET['NAF1'],
    'raisonSociale' => $_GET['RS1'],
    'secteurActivite' => $_GET['sectActi1'],
    'SIRET' => $_GET['SIRET1'],
    'telephone' => $_GET['tel1'],
    'ville' => $_GET['ville1']
  ));
  $p_requete5=$bdd2->prepare('insert into execution (numContrat, adresse, CP, effectif, NAF, raisonSociale, secteurActivite, SIRET, telephone, ville) VALUES (:numContrat, :adresse, :CP, :effectif, :NAF, :raisonSociale, :secteurActivite, :SIRET, :telephone, :ville)');
  $p_requete5->execute(array(
    'numContrat' => $numContrat,
    'adresse' => $_GET['adresse2'],
    'CP' => $_GET['CP2'],
    'effectif' => $_GET['effectif2'],
    'NAF' => $_GET['NAF2'],
    'raisonSociale' => $_GET['RS2'],
    'secteurActivite' => $_GET['sectActi2'],
    'SIRET' => $_GET['SIRET2'],
    'telephone' => $_GET['tel2'],
    'ville' => $_GET['ville2']
  ));
  $p_requete6=$bdd2->prepare('insert into tuteur (numContrat, adresse, email, fonction, nom, prenom, telephone, titre) VALUES (:numContrat, :adresse, :email, :fonction, :nom, :prenom, :telephone, :titre)');
  $p_requete6->execute(array(
    'numContrat' => $numContrat,
    'adresse' => $etab1,
    'email' =>$_GET['mail2'],
    'fonction' =>$_GET['fonction1'],
    'nom' => $_GET['nom2'],
    'prenom' => $_GET['prenom2'],
    'telephone' => $_GET['tel2'],
    'titre' => $_GET['titre2']
  ));
  $p_requete7=$bdd2->prepare('insert into signatairecontrat (numContrat, adresse, email, fonction, nom, prenom, telephone, titre) VALUES (:numContrat, :adresse, :email, :fonction, :nom, :prenom, :telephone, :titre)');
  $p_requete7->execute(array(
    'numContrat' => $numContrat,
    'adresse' => $etab2,
    'email' =>$_GET['mail3'],
    'fonction' =>$_GET['fonction2'],
    'nom' => $_GET['nom3'],
    'prenom' => $_GET['prenom3'],
    'telephone' => $_GET['tel3'],
    'titre' => $_GET['titre3']
  ));
  $p_requete8=$bdd2->prepare('insert into administration (numContrat, adresse, email, fonction, nom, prenom, telephone, titre) VALUES (:numContrat, :adresse, :email, :fonction, :nom, :prenom, :telephone, :titre)');
  $p_requete8->execute(array(
    'numContrat' => $numContrat,
    'adresse' => $etab3,
    'email' =>$_GET['mail3'],
    'fonction' =>$_GET['fonction3'],
    'nom' => $_GET['nom3'],
    'prenom' => $_GET['prenom4'],
    'telephone' => $_GET['tel4'],
    'titre' => $_GET['titre4']
  ));
  $p_requete9=$bdd2->prepare('insert into facturation (numContrat, adresse, email, fonction, nom, prenom, telephone, titre) VALUES (:numContrat, :adresse, :email, :fonction, :nom, :prenom, :telephone, :titre)');
  $p_requete9->execute(array(
    'numContrat' => $numContrat,
    'adresse' => $etab4,
    'email' =>$_GET['mail4'],
    'fonction' =>$_GET['fonction4'],
    'nom' => $_GET['nom4'],
    'prenom' => $_GET['prenom5'],
    'telephone' => $_GET['tel5'],
    'titre' => $_GET['titre5']
  ));
  $p_requete10=$bdd2->prepare('insert into absences (numContrat, adresse, email, fonction, nom, prenom, telephone, titre) VALUES (:numContrat, :adresse, :email, :fonction, :nom, :prenom, :telephone, :titre)');
  $p_requete10->execute(array(
    'numContrat' => $numContrat,
    'adresse' => $etab5,
    'email' =>$_GET['mail5'],
    'fonction' =>$_GET['fonction5'],
    'nom' => $_GET['nom5'],
    'prenom' => $_GET['prenom6'],
    'telephone' => $_GET['tel6'],
    'titre' => $_GET['titre6']
  ));
  $p_requete11=$bdd2->prepare('insert into taxeapprentissage (numContrat, adresse, email, fonction, nom, prenom, telephone, titre) VALUES (:numContrat, :adresse, :email, :fonction, :nom, :prenom, :telephone, :titre)');
  $p_requete11->execute(array(
    'numContrat' => $numContrat,
    'adresse' => $etab6,
    'email' =>$_GET['mail6'],
    'fonction' =>$_GET['fonction6'],
    'nom' => $_GET['nom6'],
    'prenom' => $_GET['prenom7'],
    'telephone' => $_GET['tel7'],
    'titre' => $_GET['titre7']
  ));
  $p_requete2=$bdd2->prepare('insert into contratpro (numContrat, contrat, dateDebut, dateFin, dureeHebdo, intitule, remuneration) VALUES (:numContrat, :contrat, :dateDebut, :dateFin, :dureeHebdo, :intitule, :remuneration)');
  $p_requete2->execute(array(
    'numContrat' => $numContrat,
    'contrat' => $_GET['contrat'],
    'dateDebut' => $_GET['dateDebutContrat'],
    'dateFin' => $_GET['dateFinContrat'],
    'dureeHebdo' => $duree,
    'intitule' => $_GET['intitulePoste'],
    'remuneration' => $_GET['remunBrute']
  ));

  /*Puis on retourne sur la page index.php de l'idrac */

  header('Location:index.php');
  die();
}
?>
>>>>>>> master:1/idrac/idracpost.php
