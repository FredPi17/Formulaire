<?php
include('include/config.php');
include('include/utilisateur.php');
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/jpg" href="img/logo.png" />
    <title>ADMINISTRATION</title>
    <!--<link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">-->
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="fonts/foundation-icons/foundation-icons.css">
  </head>
  <body>
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
      <div class="off-canvas-content" data-off-canvas-content>
        <div class="callout primary">
          <div class="row column">
            <a href="administration.php"><h1>ADMINISTRATION</h1></a>
          </div>
        </div>
        <div class="row">
          <div class="column">
            <h1 id="title">Liste des formulaires remplis</h1>
          </div>
          <div class="top-bar-right">
            <?php echo menuDeconnexion();?>
          </div>
          <div class="tab">
            <div class="tab1">
              <button class="tablinks" onclick="openCity(event, 'Idrac')" id="defaultOpen">IDRAC</button>
              <button class="tablinks" onclick="openCity(event, 'SupDeCom')">SUPDECOM</button>
              <button class="tablinks" onclick="openCity(event, 'Info')">INFOS</button>
              <button class="tablinks" onclick="openCity(event, 'admin')">ADMIN</button>
            </div>
          </div>
          <div class="container">
    <?php
    if(!isset($_SESSION['code'])){
     header('Location: login.php');
     die();
     }
    global $bdd;
    global $bdd2;
    if (isset($_GET['search'])){
      $search = $_GET['search'];
    }
    else{
      $search = '';
    }
    ?>
        <div id="Idrac" class="tabcontent">
              <p>IDRAC</p>
              <table>
                <tr>
                  <th>N° Contrat</th>
                  <th>Nom</th>
                  <th>Prenom</th>
                </tr>
      <?php
      if ($search == ''){
        $p_reponse = $bdd2->query('select * from apprenant');
        while ($donnees = $p_reponse->fetch()){
          ?>
              <tr>
                <td>
                  <a href="contrat.php?ecole=idrac&code=<?php echo $donnees['numContrat'];?>"><?php echo $donnees['numContrat'];?></a>
                </td>
                <td>
                  <a href="contrat.php?ecole=idrac&code=<?php echo $donnees['numContrat'];?> ">
                    <?php echo $donnees['nom']; ?>
                  </a>
                </td>
                <td>
                  <a href="contrat.php?ecole=idrac&code=<?php echo $donnees['numContrat'];?> ">
                    <?php echo $donnees['prenom'];?>
                </a>
                </td>
              </tr>
      <?php }}
      else {
        $p_reponse = $bdd2->query("select * from apprenant where nom LIKE '.$search.' OR prenom LIKE '.$search.' OR titre LIKE '.$search.' OR numContrat LIKE '.$search.'");
        while ($donnees = $p_reponse->fetch()){
          ?>
          <tr>
            <td>
              <a href="contrat.php?ecole=idrac&code=<?php echo $donnees['numContrat'];?>"><?php echo $donnees['numContrat'];?></a>
            </td>
            <td>
              <a href="contrat.php?ecole=idrac&code=<?php echo $donnees['numContrat'];?>"> <?php echo $donnees['nom'];?></a>
            </td>
            <td>
              <a href="contrat.php?ecole=idrac&code=<?php echo $donnees['numContrat'];?>"><?php echo $donnees['prenom'];?></a>
            </td>
          </tr>
            <?php }}  ?>
        </table>
            </div>
            <div id="SupDeCom" class="tabcontent">
              <p>SUPDECOM</p>
              <table>
                <tr>
                  <th>N° Contrat</th>
                  <th>Nom</th>
                  <th>Prenom</th>
                </tr>
      <?php
      if ($search == ''){
      $p_reponse2 = $bdd->query("select numContrat, nom, prenom from apprenant");
      while ($donnees2 = $p_reponse2->fetch()){
        ?>
                <tr>
                  <td>
                    <a href="contrat.php?ecole=sdc&code=<?php echo $donnees2['numContrat'];?>"><?php echo $donnees2['numContrat'];?></a>
                  </td>
                  <td>
                    <a href="contrat.php?ecole=sdc&code=<?php echo $donnees2['numContrat'];?>"><?php echo $donnees2['nom']; ?></a>
                  </td>
                  <td>
                    <a href="contrat.php?ecole=sdc&code=<?php echo $donnees2['numContrat'];?>"><?php echo $donnees2['prenom'];?></a>
                  </td>
                </tr>
      <?php }}
      else {
        $p_reponse = $bdd->query("select contratpro.contrat, apprenant.numContrat, apprenant.nom, apprenant.prenom, signataire.raisonSociale from contratpro, apprenant, signataire where apprenant.nom LIKE '.$search.' OR apprenant.prenom LIKE '.$search.' OR apprenant.titre LIKE '.$search.' OR apprenant.numContrat LIKE '.$search.' ESC");
        while ($donnees = $p_reponse->fetch()){
          ?>
          <tr>
            <td>
              <a href="contrat.php?ecole=idrac&code=<?php echo $donnees['numContrat'];?>"><?php echo $donnees['numContrat'];?></a>
            </td>
            <td>
              <a href="contrat.php?ecole=idrac&code=<?php echo $donnees['numContrat'];?>"> <?php echo $donnees['nom'];?></a>
            </td>
            <td>
              <a href="contrat.php?ecole=idrac&code=<?php echo $donnees['numContrat'];?>"><?php echo $donnees['prenom'];?></a>
            </td>
          </tr>
            <?php }
          }  ?>
        </table>
            </div>
            <div id="Info" class="tabcontent">
              <p>INFOS</p>
              <div class="row">
                <div class="column">
                  <h7 class="bold">Ici vous pouvez voir les différentes informations qui sont susceptibles de varier avec les années</h7>
                </div>
              </div>
              <div class="row medium-up-2">
                <div class="column">
                  <p>Pour modifier les valeurs, rien de plus simple ! Vous n'avez qu'à modifier la valeur dans la case et cliquer sur le bouton "Modifier"</p>
                </div>
                <div class="column">
                  <div class="cube"></div>
                </div>
                <div class="column">
                  <div class="cube"></div>
                </div>
                <div class="column" style="float:right;">
                  <p>Ces valeurs sont celles qu'on trouve dans les formulaires.</p>
                </div>
                <div class="column">
                  <p>C'est pourquoi il est important de les garader à jour au fur et à mesure des années.
                </div>
              </div>
              <div class="row">
                <div class="column">
                  <h3 class="title">Information pour les formations de l'IDRAC</h3>
                </div>
              </div>
              <div class="row medium-up-2 small-up-1 large-up-2" style="text-align:-moz-center;">
                <div class="column infos">
                  <h5>BAC +3</h5>
                  <form method="get" action="update.php">
                    <?php $p_reponse1 = $bdd2->query("select * from infos where id = 1");
                    while ($donnees1 = $p_reponse1->fetch()){?>
                      <span class="bold">DATE DEBUT : </span><input type="text" name="bacplus3idracDateDebut" value="<?php echo $donnees1['dateDebut']; ?>">
                      <span class="bold">DATE FIN : </span><input type="text" name="bacplus3idracDateFin" value="<?php echo $donnees1['dateFin']; ?>">
                      <span class="bold">INTITULE FORMATION : </span><input type="text" name="bacplus3idracIntitule" value="<?php echo $donnees1['intitule']; ?>">
                      <span class="bold">NOM DIPLOME : </span><input type="text" name="bacplus3idracDiplome" value="<?php echo $donnees1['diplome']; ?>">
                      <span class="bold">CALENDRIER : </span><input type="text" name="bacplus3idracCalendrier" value="<?php echo $donnees1['calendrier']; ?>">
                      <span class="bold">TARIF FORMATION : </span><input type="text" name="bacplus3idracTarif" value="<?php echo $donnees1['tarifFormation']; ?>">
                      <span class="bold">COUT FORMATION : </span><input type="text" name="bacplus3idracCout" value="<?php echo $donnees1['coutFormation']; ?>">
                      <span class="bold">COUT HORAIRE : </span><input type="text" name="bacplus3idracHoraire" value="<?php echo $donnees1['coutHoraire']; ?>">
                      <input type="hidden" name="bacplus3idracId" value="<?php echo $donnees1['id']; ?>">
                    <?php } ?>
        </div>
                <div class="column infos">
                  <h5>BAC +4/5</h5>
                  <?php $p_reponse1 = $bdd2->query("select * from infos where id = 2");
                  while ($donnees1 = $p_reponse1->fetch()){?>
                    <span class="bold">DATE DEBUT : </span><input type="text" name="bacplus45idracDateDebut" value="<?php echo $donnees1['dateDebut']; ?>">
                    <span class="bold">DATE FIN : </span><input type="text" name="bacplus45idracDateFin" value="<?php echo $donnees1['dateFin']; ?>">
                    <span class="bold">INTITULE FORMATION : </span><input type="text" name="bacplus45idracIntitule" value="<?php echo $donnees1['intitule']; ?>">
                    <span class="bold">NOM DIPLOME : </span><input type="text" name="bacplus45idracDiplome" value="<?php echo $donnees1['diplome']; ?>">
                    <span class="bold">CALENDRIER : </span><input type="text" name="bacplus45idracCalendrier" value="<?php echo $donnees1['calendrier']; ?>">
                    <span class="bold">TARIF FORMATION : </span><input type="text" name="bacplus45idracTarif" value="<?php echo $donnees1['tarifFormation']; ?>">
                    <span class="bold">COUT FORMATION : </span><input type="text" name="bacplus45idracCout" value="<?php echo $donnees1['coutFormation']; ?>">
                    <span class="bold">COUT HORAIRE : </span><input type="text" name="bacplus45idracHoraire" value="<?php echo $donnees1['coutHoraire']; ?>">
                    <input type="hidden" name="bacplus45idracId" value="<?php echo $donnees1['id']; ?>">
                  <?php } ?>
                </div>
              </div>
              <div class="row">
                <div class="column">
                  <h3 class="title">Information pour les formations de SUPDECOM</h3>
                </div>
              </div>
              <div class="row medium-up-3 small-up-1 large-up-3" style="text-align:-moz-center;">
                <div class="column infos">
                  <h5>BAC +3</h5>
                  <?php $p_reponse1 = $bdd->query("select * from infos where id = 1");
                  while ($donnees1 = $p_reponse1->fetch()){?>
                    <span class="bold">DATE DEBUT : </span><input type="text" name="bacplus3sdcDateDebut" value="<?php echo $donnees1['dateDebut']; ?>">
                    <span class="bold">DATE FIN : </span><input type="text" name="bacplus3sdcDateFin" value="<?php echo $donnees1['dateFin']; ?>">
                    <span class="bold">INTITULE FORMATION : </span><input type="text" name="bacplus3sdcIntitule" value="<?php echo $donnees1['intitule']; ?>">
                    <span class="bold">NOM DIPLOME : </span><input type="text" name="bacplus3sdcDiplome" value="<?php echo $donnees1['diplome']; ?>">
                    <span class="bold">CALENDRIER : </span><input type="text" name="bacplus3sdcCalendrier" value="<?php echo $donnees1['calendrier']; ?>">
                    <span class="bold">TARIF FORMATION : </span><input type="text" name="bacplus3sdcTarif" value="<?php echo $donnees1['tarifFormation']; ?>">
                    <span class="bold">COUT FORMATION : </span><input type="text" name="bacplus3sdcCout" value="<?php echo $donnees1['coutFormation']; ?>">
                    <span class="bold">COUT HORAIRE : </span><input type="text" name="bacplus3sdcHoraire" value="<?php echo $donnees1['coutHoraire']; ?>">
                    <input type="hidden" name="bacplus3sdcId" value="<?php echo $donnees1['id']; ?>">
                  <?php } ?>
                </div>
                <div class="column infos">
                  <h5>BAC +4/5</h5>
                  <?php $p_reponse1 = $bdd->query("select * from infos where id = 2");
                  while ($donnees1 = $p_reponse1->fetch()){?>
                    <span class="bold">DATE DEBUT : </span><input type="text" name="bacplus45sdcDateDebut" value="<?php echo $donnees1['dateDebut']; ?>">
                    <span class="bold">DATE FIN : </span><input type="text" name="bacplus45sdcDateFin" value="<?php echo $donnees1['dateFin']; ?>">
                    <span class="bold">INTITULE FORMATION : </span><input type="text" name="bacplus45sdcIntitule" value="<?php echo $donnees1['intitule']; ?>">
                    <span class="bold">NOM DIPLOME : </span><input type="text" name="bacplus45sdcDiplome" value="<?php echo $donnees1['diplome']; ?>">
                    <span class="bold">CALENDRIER : </span><input type="text" name="bacplus45sdcCalendrier" value="<?php echo $donnees1['calendrier']; ?>">
                    <span class="bold">TARIF FORMATION : </span><input type="text" name="bacplus45sdcTarif" value="<?php echo $donnees1['tarifFormation']; ?>">
                    <span class="bold">COUT FORMATION : </span><input type="text" name="bacplus45sdcCout" value="<?php echo $donnees1['coutFormation']; ?>">
                    <span class="bold">COUT HORAIRE : </span><input type="text" name="bacplus45sdcHoraire" value="<?php echo $donnees1['coutHoraire']; ?>">
                    <input type="hidden" name="bacplus45sdcId" value="<?php echo $donnees1['id']; ?>">
                  <?php } ?>
                </div>
                <div class="column infos">
                  <h5>BAC +5</h5>
                  <?php $p_reponse1 = $bdd->query("select * from infos where id = 3");
                  while ($donnees1 = $p_reponse1->fetch()){?>
                    <span class="bold">DATE DEBUT : </span><input type="text" name="bacplus5sdcDateDebut" value="<?php echo $donnees1['dateDebut']; ?>">
                    <span class="bold">DATE FIN : </span><input type="text" name="bacplus5sdcDateFin" value="<?php echo $donnees1['dateFin']; ?>">
                    <span class="bold">INTITULE FORMATION : </span><input type="text" name="bacplus5sdcIntitule" value="<?php echo $donnees1['intitule']; ?>">
                    <span class="bold">NOM DIPLOME : </span><input type="text" name="bacplus5sdcDiplome" value="<?php echo $donnees1['diplome']; ?>">
                    <span class="bold">CALENDRIER : </span><input type="text" name="bacplus5sdcCalendrier" value="<?php echo $donnees1['calendrier']; ?>">
                    <span class="bold">TARIF FORMATION : </span><input type="text" name="bacplus5sdcTarif" value="<?php echo $donnees1['tarifFormation']; ?>">
                    <span class="bold">COUT FORMATION : </span><input type="text" name="bacplus5sdcCout" value="<?php echo $donnees1['coutFormation']; ?>">
                    <span class="bold">COUT HORAIRE : </span><input type="text" name="bacplus5sdcHoraire" value="<?php echo $donnees1['coutHoraire']; ?>">
                    <input type="hidden" name="bacplus5sdcId" value="<?php echo $donnees1['id']; ?>">
                  <?php } ?>
                </div>
              </div>
              <div class="row medium-up-1 large-up-1 small-up-1" style="text-align:-moz-center;">
                <input type="submit" class="button" name="modifier" value="Modifier" id="modifier">
              </div>
            </form>
          </div>
    <div id="admin" class="tabcontent">
      <div class="row small-up-1 medium-up-2 large-up-2">
        <div class="column">
          <?php echo afficheFormNouveau();?>
        </div>
        <div class="column">
          <h4>Administrateurs</h4>
          <table>
            <tr>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Mail</th>
            </tr>
              <?php
              echo listeUtilisateurs();
              ?>
          </table>
        </div>
      </div>
  </div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

</script>
