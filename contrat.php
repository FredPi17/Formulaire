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

    <?php

    /***
    J'initialise quelques variables communes aux deux écoles pour éviter de les écrire en double.
    ***/

    $adresse = '3, rue de la condamine';
    $CP = '38610';
    $ville = 'Gières';
    $siegeSocial = '7-11 AVENUE DES CHASSEURS';
    $SSville = 'PARIS';
    $SSCP = "75017";

    /***
    On vérifie quelle école fait la demande d'ouverture de contrat pour:
    - récupérer le bon fichier de configuration de connexion à la base de données
    - initialiser quelques variables propres à l'école en question
    ***/

    /***
    Ici je vérifie si c'est supdecom qui fait la demande
    ***/

    if ($_GET['ecole'] == "sdc"){
      include('supdecom/config.php');
      echo '<img src="img/sdc.png" style="width:250px;">';
      $ecole = 'SUPDECOM';
      $SIRET = '330 377 524 00047';
      $telephone = '+33(0) 4 58 00 54 41';
    }

    /***
    Sinon c'est idrac
    ***/

    else{
      include('idrac/config.php');
      echo '<img src="img/idrac.png" style="width:250px;">';
      $ecole = 'IDRAC';
      $SIRET = '330 377 524 00047';
      $telephone = '+33(0) 4 58 00 54 41';
    }
    ?>

        <!--
        Je me connecte à la base de données avec le global $bdd
        Je récupère le code passé en paramètre pour savoir quel valeurs je devrai récupéremuneration
        Puis je récupère mes données dans les tables de la base de données
        -->

        <?php
        global $bdd;
        $id = $_GET['code'];
        $p_reponse1 = $bdd->query('select * from absences where numContrat='.$id.'');
        $p_reponse2 = $bdd->query('select * from apprenant where numContrat='.$id.'');
        $p_reponse3 = $bdd->query('select * from administration where numContrat='.$id.'');
        $p_reponse4 = $bdd->query('select * from contratpro where numContrat='.$id.'');
        $p_reponse5 = $bdd->query('select * from execution where numContrat='.$id.'');
        $p_reponse6 = $bdd->query('select * from facturation where numContrat='.$id.'');
        $p_reponse7 = $bdd->query('select * from financement where numContrat='.$id.'');
        $p_reponse8 = $bdd->query('select * from signataire where numContrat='.$id.'');
        $p_reponse9 = $bdd->query('select * from signatairecontrat where numContrat='.$id.'');
        $p_reponse10 = $bdd->query('select * from taxeapprentissage where numContrat='.$id.'');
        $p_reponse11 = $bdd->query('select * from tuteur where numContrat='.$id.'');

        /***
        J'affiche le titre avec le nom et prénom du contrat
        ***/

        while ($donnees2= $p_reponse2->fetch()){?>
          <div class="row">
            <div class="column">
              <h4 id="title" >Contrat de <?php echo $donnees2['nom'] . ' ' . $donnees2['prenom'];?></h4>
            </div>
          </div>
          <?php

          /***
          Je mets sous forme de variables mes autres données non utilisées de ma premiere requete.
          ***/

          $nomApprenant = $donnees2['nom'];
          $prenomApprenant = $donnees2['prenom'];
          $formation = $donnees2['formation']; } ?>

        <!--
        Puis on affiche toutes les données sur la page de cette manière.
        -->
  <div class="container">
    <div class="row">
      <div class="column">
        <h5 class="bold">Entre les soussignés :</h5>
        <h5 class="bold">L'entreprise, </h5>
        <!--
        Les informations sur l'entreprise
        -->
        <?php while ($donnees8= $p_reponse8->fetch()){?>
        <h7><span class="bold">Société : </span></span><?php echo $donnees8['raisonSociale']; ?></h7><br />
        <h7><span class="bold">Activité principale : </span><?php echo $donnees8['secteurActivite']; ?> </h7><br />
      </div>
    </div>
    <div class="row  medium-up-2">
      <div class="column">
        <h7><span class="bold">N° SIRET : <?php echo $donnees8['SIRET']; ?></h7>
      </div>
      <div class="column">
        <h7><span class="bold">Code APE/NAF : </span><?php echo $donnees8['NAF']; ?></h7>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <h7><span class="bold">Adresse de l'entreprise : </span><?php echo $donnees8['adresse']; ?></h7><br />
      </div>
    </div>
    <div class="row medium-up-2">
      <div class="column">
        <h7><span class="bold">CP : </span><?php echo $donnees8['cp']; ?></h7>
      </div>
      <div class="column">
        <h7><span class="bold">Ville : </span><?php echo $donnees8['ville'];?></h7><br />
      </div>
    </div>
    <div class="row">
      <div class="column">
        <h7><span class="bold">Tél : </span><?php echo $donnees8['telephone']; ?></h7><br />
        <?php } ?>
        <?php while ($donnees9= $p_reponse9->fetch()){?>
        <h7><span class="bold">Représenté par : </span><?php echo $donnees9['nom'] . ' ' . $donnees9['prenom'];?></h7><br />
      </div>
    </div>
      <?php } ?>
    <div class="row">
      <div class="column">
        <p class="italic-bold">Ci-après dénommée l'organisme d'accueil partenaire d'une part,</p>
        <h5 class="bold">Et l'école, </h5>
        <br />
        <!--
        Les informations sur l'école
        -->
        <h7><span class="bold">Nom : </span><?php echo $ecole; ?></h7><br />
        <h7><span class="bold">Programme : </span><?php echo $formation; ?></h7><br />
        <h7><span class="bold">N° SIRET :</span> <?php echo $SIRET; ?></h7><br />
      </div>
    </div>
    <div class="row medium-up-2">
      <div class="column">
        <h7><span class="bold">Adresse : </span><?php echo $adresse; ?></h7>
      </div>
      <div class="column">
        <h7><span class="bold">Tél : </span><?php echo $telephone; ?></h7>
      </div>
      <div class="column">
        <h7><span class="bold">CP : </span><?php echo $CP; ?></h7>
      </div>
      <div class="column">
        <h7><span class="bold">Ville : </span><?php echo $ville; ?></h7>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <h7><span class="bold">Adresse siège social : </span><?php echo $siegeSocial; ?></h7>
      </div>
    </div>
    <div class="row medium-up-2">
      <div class="column">
        <h7><span class="bold">CP : </span><?php echo $SSCP; ?></h7>
      </div>
      <div class="column">
        <h7><span class="bold">Ville : </span><?php echo $SSville; ?></h7>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <p class="italic-bold">Ci-après dénommée l'école d'autre part, </p>
        <h5 class="bold">Et l'étudiant, </h5>
        <!--
        Les informations sur l'étudiant
        -->
        <h7><span class="bold">Nom et prénom : </span><?php echo $nomApprenant . ' ' . $prenomApprenant; ?></h7><br />
        <h7><span class="bold">Adresse : </span></h7><br />
      </div>
    </div>
    <div class="row medium-up-2">
      <div class="column">
        <h7><span class="bold">CP : </span></h7>
      </div>
      <div class="column">
        <h7><span class="bold">Ville : </span></h7>
      </div>
      <div class="column">
        <h7><span class="bold">Tél : </span></h7>
      </div>
      <div class="column">
        <h7><span class="bold">Portable : </span></h7>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <p class="italic-bold">Ci-après dénommé l'étudiant, </p>
        <p class="italic">Pour régler les rapports entre les différentes parties à la présente convention dans le cadre de la mission confiée à l'étudiant.</p>
      </div>
    </div>
    <div class="row">
      <div class="row medium-up-2">
        <div class="column">
          <div class="row">
            <div class="column">
              <!--
              Les informations sur le contrat de professionnalisation
              -->
              <h5 class="bold">Le contrat de professionnalisation</h5>
              <?php while ($donnees4= $p_reponse4->fetch()){?>
              <h7><span class="bold">Nature du contrat : </span><?php echo $donnees4['contrat']; ?></h7>
            </div>
          </div>
          <div class="row medium-up-2">
            <div class="column">
              <h7><span class="bold">Date de début du contrat : </span><?php echo $donnees4['dateDebut']; ?></h7>
            </div>
            <div class="column">
              <h7><span class="bold">Date de fin du contrat : </span><?php echo $donnees4['dateFin']; ?></h7>
            </div>
          </div>
          <div class="row">
            <div class="column">
              <h7><span class="bold">Intitulé du poste : </span><?php echo $donnees4['intitule']; ?></h7><br />
              <h7><span class="bold">Durée hebdomadaire de travail : </span><?php echo $donnees4['dureeHebdo']; ?></h7><br />
              <h7><span class="bold">Rémunération mensuelle brute : </span><?php echo $donnees4['remuneration']; ?></h7><br />
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="column">
          <div class="row">
            <div class="column">
              <!--
              Les informations sur le fincancement de la formation
              -->
              <h5 class="bold">Le financement de la formation</h5>
              <?php while($donnees7=$p_reponse7->fetch()){?>
                <h7><span class="bold">OCPA : </span><?php echo $donnees7['ocpa']; ?></h7><br />
                <h7><span class="bold">Adresse : </span><?php echo $donnees7['adresse1']; ?></h7>
            </div>
          </div>
          <div class="row medium-up-2">
            <div class="column">
              <h7><span class="bold">CP : </span><?php echo $donnees7['cp']; ?></h7>
            </div>
            <div class="column">
              <h7><span class="bold">Ville : </span><?php echo $donnees7['ville']; ?></h7>
            </div>
          </div>
          <div class="row">
            <div class="column">
              <h7><span class="bold">Subrogation : </span><?php echo $donnees7['subrogation']; ?></h7><br />
              <h7><span class="bold">Inscription à la formation : </span><?php echo $donnees7['formation']; ?></h7><br />
              <h7><span class="bold">Commentaire : </span><?php echo $donnees7['commentaire']; ?></h7><br />
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <br />
    <hr>
    <br />
    <div class="row">
      <div class="row medium-up-2">
        <div class="column">
          <!--
          Les informations sur le tuteur/tutrice
          -->
          <h5 class="bold">Tuteur/tutrice</h5>
          <?php while ($donnees11=$p_reponse11->fetch()){?>
          <h7><span class="bold">Titre : </span><?php echo $donnees11['titre']; ?></h7><br />
          <h7><span class="bold">Fonction : </span><?php echo $donnees11['fonction']; ?></h7><br />
          <h7><span class="bold">Nom et prénom : </span><?php echo $donnees11['nom'] . ' ' . $donnees11['prenom']; ?></h7><br />
          <h7><span class="bold">Tél : </span><?php echo $donnees11['telephone']; ?></h7><br />
          <h7><span class="bold">Email : </span><?php echo $donnees11['email']; ?></h7><br />
          <h7><span class="bold">Adresse : </span><?php echo $donnees11['adresse']; ?></h7><br />
          <?php } ?>
        </div>
        <div class="column">
          <!--
          Les informations sur le signataire du contrat
          -->
          <h5 class="bold">Le signataire du contrat</h5>
          <?php while ($donnees9=$p_reponse9->fetch()){?>
          <h7><span class="bold">Titre : </span><?php echo $donnees9['titre']; ?></h7><br />
          <h7><span class="bold">Fonction : </span><?php echo $donnees9['fonction']; ?></h7><br />
          <h7><span class="bold">Nom et prénom : </span><?php echo $donnees9['nom'] . ' ' . $donnees9['prenom']; ?></h7><br />
          <h7><span class="bold">Tél : </span><?php echo $donnees9['telephone']; ?></h7><br />
          <h7><span class="bold">Email : </span><?php echo $donnees9['email']; ?></h7><br />
          <h7><span class="bold">Adresse : </span><?php echo $donnees9['adresse']; ?></h7><br />
          <?php } ?>
        </div>
      </div>
    </div>

    <br />
    <hr>
    <br />

    <div class="row">
      <div class="row medium-up-2">
        <div class="column">
          <!--
          Les informations sur le contact administratif du dossier
          -->
          <h5 class="bold">Contact administration du dossier</h5>
          <?php while ($donnees3=$p_reponse3->fetch()){?>
          <h7><span class="bold">Titre : </span><?php echo $donnees3['titre']; ?></h7><br />
          <h7><span class="bold">Fonction : </span><?php echo $donnees3['fonction']; ?></h7><br />
          <h7><span class="bold">Nom et prénom : </span><?php echo $donnees3['nom'] . ' ' . $donnees3['prenom']; ?></h7><br />
          <h7><span class="bold">Tél : </span><?php echo $donnees3['telephone']; ?></h7><br />
          <h7><span class="bold">Email : </span><?php echo $donnees3['email']; ?></h7><br />
          <h7><span class="bold">Adresse : </span><?php echo $donnees3['adresse']; ?></h7><br />
          <?php } ?>
        </div>
        <div class="column">
          <!--
          Les informations sur le contact de facturation
          -->
          <h5 class="bold">Contact facturation</h5>
          <?php while ($donnees6=$p_reponse6->fetch()){?>
          <h7><span class="bold">Titre : </span><?php echo $donnees6['titre']; ?></h7><br />
          <h7><span class="bold">Fonction : </span><?php echo $donnees6['fonction']; ?></h7><br />
          <h7><span class="bold">Nom et prénom : </span><?php echo $donnees6['nom'] . ' ' . $donnees6['prenom']; ?></h7><br />
          <h7><span class="bold">Tél : </span><?php echo $donnees6['telephone']; ?></h7><br />
          <h7><span class="bold">Email : </span><?php echo $donnees6['email']; ?></h7><br />
          <h7><span class="bold">Adresse : </span><?php echo $donnees6['adresse']; ?></h7><br />
          <?php } ?>
        </div>
      </div>
    </div>

    <br />
    <hr>
    <br />

    <div class="row">
      <div class="row medium-up-2">
        <div class="column">
          <!--
          Les informations sur le contact absences
          -->
          <h5 class="bold">Contact absences</h5>
          <?php while ($donnees1=$p_reponse1->fetch()){?>
          <h7><span class="bold">Titre : </span><?php echo $donnees1['titre']; ?></h7><br />
          <h7><span class="bold">Fonction : </span><?php echo $donnees1['fonction']; ?></h7><br />
          <h7><span class="bold">Nom et prénom : </span><?php echo $donnees1['nom'] . ' ' . $donnees1['prenom']; ?></h7><br />
          <h7><span class="bold">Tél : </span><?php echo $donnees1['telephone']; ?></h7><br />
          <h7><span class="bold">Email : </span><?php echo $donnees1['email']; ?></h7><br />
          <h7><span class="bold">Adresse : </span><?php echo $donnees1['adresse']; ?></h7><br />
          <?php } ?>
        </div>
        <div class="column">
          <!--
          Les informations sur le contact de taxe d'apprentissage
          -->
          <h5 class="bold">Contact taxe d'apprentissage</h5>
          <?php while ($donnees10=$p_reponse10->fetch()){?>
          <h7><span class="bold">Titre : </span><?php echo $donnees10['titre']; ?></h7><br />
          <h7><span class="bold">Fonction : </span><?php echo $donnees10['fonction']; ?></h7><br />
          <h7><span class="bold">Nom et prénom : </span><?php echo $donnees10['nom'] . ' ' . $donnees10['prenom']; ?></h7><br />
          <h7><span class="bold">Tél : </span><?php echo $donnees10['telephone']; ?></h7><br />
          <h7><span class="bold">Email : </span><?php echo $donnees10['email']; ?></h7><br />
          <h7><span class="bold">Adresse : </span><?php echo $donnees10['adresse']; ?></h7><br />
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</div>

<!-- Web2PDF Converter Button BEGIN -->
<script type="text/javascript">
var pdfbuttonlabel="Exporter"
</script>
<script src="http://www.web2pdfconvert.com/pdfbutton2.js" id="Web2PDF" type="text/javascript"></script>
<!-- Web2PDF Converter Button END -->

</body>
