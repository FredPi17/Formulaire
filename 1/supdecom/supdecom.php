  <?php
  include('../include/config.php');
  include('../include/outils.php');
  echo Menu();
  global $bdd;
  if(isset($_GET['id'])){
    if($_GET['id'] == '1'){
      $p_reponse=$bdd->query("select * from infos where idFormation = 1 ");
    }
    elseif($_GET['id'] == '2'){
      $p_reponse=$bdd->query("select * from infos where idFormation = 2 ");
    }
    elseif($_GET['id'] == '3'){
      $p_reponse=$bdd->query("select * from infos where idFormation = 3 ");
    }
    elseif($_GET['id'] == NULL){
      echo 'Désolé, mais si tu joues avec les URL je vais pas etre content !';
    }
  }
  else{
    echo "Désolé ça va pas marcher entre nous !";
  }
  ?>
            <a href="index.php"><h1>FORMULAIRE</h1></a>
          </div>
        </div>
        <div class="row">
          <div class="column">
            <h1 id="title">FICHE DE RENSEIGNEMENT</h1><img src="../img/sdc.png" style="max-height:150px">
            <p class="subheader">CONTRAT DE PROFESSIONNALISATION</p>
          </div>
          <div class="tab">
            <a href="index.php"><button class="tablinks">Retour</button></a>
            <button class="tablinks" onclick="openCity(event, 'Conditions')" id="defaultOpen">Conditions générales</button>
            <button class="tablinks" onclick="openCity(event, 'Formation')">Formations</button>
            <button class="tablinks" onclick="openCity(event, 'Formulaire')">Formulaire</button>
          </div>
          <br />
          <div class="container">
            <div id="Conditions" class="tabcontent">
              <div class="column">
                <div class="back-gray">
                  <p><span class="red">Merci de compléter cette fiche de renseignement et de nous la transmettre dès que possible</span><br/>
                    <span class="italic">Dès réception, nous pourrons vous transmettre :</span><br />
                    <ul>
                      <li>La convention de formation, calendrier et programme en 3 exemplaires</li>
                      <li>La liasse cerfa du contrat de professionnalisation en 3 exemplaires</li>
                    </ul>
                  </p>
                </div>
              </div>
              <?php
                while ($donnees=$p_reponse->fetch()){?>
                <div class="column">
                  <div class="border">
                    <p class="bold-red">CONDITIONS ET MODALITES</p>
                    <p><span class="bold">Intitulé de la formation</span> : <?php echo $donnees['intitule']; ?><br />
                      <span class="bold">Diplôme visé</span> : <?php echo $donnees['diplome']; ?> <br />
                      <span class="bold">Date de début de la formation: </span><?php echo $donnees['dateDebut']; ?> <span class="bold">Date de fin de la formation: </span><?php echo $donnees['dateFin']; ?><br/>
                      <span class="bold">Volume horaire: 560 heures Coût total: </span><?php echo $donnees['coutFormation']; ?>€ HT <span class="bold">Coût horaire : </span><?php echo $donnees['coutHoraire']; ?>€ HT
                    </p>
                  </div>
                </div>
                <div class="column">
                  <div class="border">
                    <p class="bold-red">RAPPEL DES ELEMENTS A VALIDER AVEC VOTRE OPCA* :</p>
                    <ul>
                      <li>Prise en charge et financement de la formation</li>
                      <li>Montant du salaire de référence (SMIC ou SMC)</li>
                      <li>Montant des aides financières et exonérations</li>
                      <li>Démarches administratives à réaliser pour la mise en oeuvre du contrat</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div id="Formation" class="tabcontent">
                <hr>
                <div class="row">
                  <div class="column">
                    <div class="center">
                      <h1 class="bold-red">Formation Tuteurs</h1>
                      <span class="red">Pour tout renseignement <a href="http://www..fc-idrac.com">http://www.fc-idrac.com</a> ou 04 76 09 15 72</span>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row  medium-up-2 ">
                  <div class="column">
                    <span class="bold">Objectifs</span>
                    <p>Former à la transmission de connaissances.<br />Intégrer durablement un nouveau collaborateur / Alternant</p>
                    <span class="bold">Méthodes pédagogiques</span>
                    <p>Programme intensif et dynamique qui alterne mises en relation, apports opérationnels et mise en application par le participant dans son contexte professionnel. Le mode séquentiel facilite le suivi et la mise en application</p>
                    <span class="bold">Public concerné</span>
                    <p>Ce programme s'adresse à toute personne amenée à exercer une fonction Tuteur, d'un jeune (apprentissage, professionnalisation), ou d'un adulte.</p>
                    <span class="bold">Prérequis</span>
                    <p>Cette formation ne requiert aucun prérequis.</p>
                  </div>
                  <div class="column">
                    <span class="bold">Compétences</span>
                    <p>A l'issue de cette formation, les participants seront capables de:
                      <ul>
                        <li>Jouer leur rôle et assumer leurs missions en tant que TUTEUR</li>
                        <li>Développer l'esprit d'équipe, la culture de l'entreprise</li>
                        <li>Faire comprendre et faire passer un message, savoir expliquer</li>
                        <li>Développer les compétences du nouveau collaborateur</li>
                      </ul>
                    </p>
                    <span class="bold">Intervenant</span>
                    <p>Consultant - Formateur depuis plus de 10ans <br />Plus de 20ans d'expérience en entreprise dont 10ans en développement RH.</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="column">
                    <h1 class="bold-red">Programmes</h1>
                  </div>
                </div>
                <hr>
                <div class="row  medium-up-2 ">
                  <div class="column">
                    <h3 class="bold-red">Les rôles et missions du Tuteur</h3>
                    <span class="bold">Les qualités du Tuteur</span><br />
                    <p>
                      <span class="bold">Les 5 missions fondamentales du Tuteur:</span>
                      <ul>
                        <li>Accueillir</li>
                        <li>Sensibiliser</li>
                        <li>Accompagner</li>
                        <li>Servir de lien</li>
                        <li>Avaluer</li>
                      </ul>
                    </p>
                  </div>
                  <div class="column">
                    <h3 class="bold-red">Rappel de l'importance de l'accueil</h3>
                    <span class="bold">La préparation de l'accueil</span>
                    <p>
                      <ul>
                        <li>Avant son arrivée</li>
                        <li>Le jour de son arrivée</li>
                      </ul>
                    </p>
                  </div>
                  <div class="column">
                    <h3 class="bold-red">La transmission des savoirs en entreprise</h3>
                    <span class="bold">L'acquisition des compétences professionnelles</span>
                    <p>
                      <span class="bold">Les 6 étapes pédagogiques : </span>
                      <ul>
                        <li>Expliquer</li>
                        <li>Montrer</li>
                        <li>Faire-faire</li>
                        <li>Intéragir</li>
                        <li>Evaluer</li>
                        <li>Réagir</li>
                      </ul>
                    </p>
                  </div>
                  <div class="column">
                    <h3 class="bold-red">Le suivi et l'évaluation</h3>
                    <span class="bold">L'évaluation des compétences</span>
                    <p>
                      <span class="bold">Faire face aux objections</span>
                      <ul>
                        <li>Les objections les plus fréquentes</li>
                        <li>Le comportement à adopter face aux objections</li>
                      </ul>
                    </p>
                    <p class="bold">Les erreurs les plus courantes à ne pas commettre pendant l'entretien d'évaluation</p>
                    <p class="bold">La mise en place et le suivi de la fiche d'évaluation individuelle</p>
                    <p class="bold">L'accompagnement de l'Alternant pour les dossiers professionnels</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="column">
                    <div class="center">
                      <h1 class="bold-red">Une journée pour vous former au Tutorat</h1>
                      <span class="red">Pour tout renseignement <a href="http://www..fc-idrac.com">http://www.fc-idrac.com</a> ou 04 72 85 18 07</span>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row  medium-up-2 ">
                  <div class="column">
                    <span class="bold">Objectifs</span>
                    <p>Former à la transmission de connaissances.<br />Intégrer durablement un nouveau collaborateur / Alternant</p>
                    <span class="bold">Méthodes pédagogiques</span>
                    <p>Programme intensif et dynamique qui alterne mises en situation, apports opérationnels et mise en application par le participant dans son contexte professionnel. Le mode séquentiel facilite le suivi et la mise en application</p>
                    <span class="bold">Public concerné</span>
                    <p>Ce programme s'adresse à toute personne amenée à exercer une fonction Tuteur, d'un jeune (apprentissage, professionnalisation), ou d'un adulte.</p>
                    <span class="bold">Prérequis</span>
                    <p>Cette formation ne requiert aucun prérequis.</p>
                    <span class="bold">Calendrier</span>
                    <span class="bold">Grenoble : <?php echo $donnees['calendrier']; ?></span>
                  </div>
                  <div class="column">
                    <span class="bold">Compétences</span>
                    <p>A l'issue de cette formation, les participants seront capables de:
                      <ul>
                        <li>Jouer leur rôle et assumer leurs missions en tant que TUTEUR</li>
                        <li>Développer l'esprit d'équipe, la culture de l'entreprise</li>
                        <li>Faire comprendre et faire passer un message, savoir expliquer</li>
                        <li>Développer les compétences du nouveau collaborateur</li>
                      </ul>
                    </p>
                    <span class="bold">Intervenant</span>
                    <p>Consultant - Formateur depuis plus de 10ans <br />Plus de 20ans d'expérience en entreprise dont 10ans en développement RH.</p>
                    <span class="bold">Tarif</span>
                    <p><?php echo $donnees['tarifFormation']; ?>€ HT (déjeuner inclus)</p>
                    <?php $nomFormation = $donnees['intitule']; } ?>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="column">
                    <h1 class="bold-red">Programmes</h1>
                  </div>
                </div>
                <hr>
                <div class="row  medium-up-2 ">
                  <div class="column">
                    <h3 class="bold-red">Les rôles et missions du Tuteur</h3>
                    <span class="bold">Les qualités du Tuteur</span><br />
                    <p>
                      <span class="bold">Les missions fondamentales du Tuteur:</span>
                      <ul>
                        <li>Sensibiliser</li>
                        <li>Accompagner</li>
                        <li>Servir de lien</li>
                        <li>Evaluer</li>
                      </ul>
                    </p>
                  </div>
                  <div class="column">
                    <h3 class="bold-red">Rappel de l'importance de la communication</h3>
                    <span class="bold">Savoir communiquer avec son Alternant</span>
                    <p>
                      <ul>
                        <li>Effectuer et planifier des entretiens réguliers</li>
                        <li>Fixer des objectifs SMART</li>
                      </ul>
                    </p>
                  </div>
                  <div class="column">
                    <h3 class="bold-red">La transmission des savoirs en entreprise</h3>
                    <span class="bold">L'acquisition des compétences professionnelles</span>
                    <p>
                      <span class="bold">Les 6 étapes pédagogiques : </span>
                      <ul>
                        <li>Expliquer</li>
                        <li>Montrer</li>
                        <li>Faire-faire</li>
                        <li>Intéragir</li>
                        <li>Evaluer</li>
                        <li>Réagir</li>
                      </ul>
                    </p>
                  </div>
                  <div class="column">
                    <h3 class="bold-red">L'évaluation des compétences'</h3>
                    <span class="bold">La préparation de l'entretien d'évaluation</span>
                    <p>
                      <span class="bold">Faire face aux objections</span>
                      <ul>
                        <li>Les objections les plus fréquentes</li>
                        <li>Le comportement à adopter face aux objections</li>
                      </ul>
                    </p>
                    <p class="bold">Les erreurs les plus courantes à ne pas commettre pendant l'entretien d'évaluation</p>
                    <p class="bold">La mise en place et le suivi de la fiche d'évaluation individuelle</p>
                    <p class="bold">L'accompagnement de l'Alternant pour les dossiers professionnels</p>
                  </div>
                </div>
              </div>
              <div id="Formulaire" class="tabcontent">
                <div class="row small-up-1 medium-up-1 large-up-3 ">
                  <div class="column">
                    <div class="block">
                      <div class="header">
                        <h3 class="white">L'APPRENANT</h3>
                      </div>
                      <form method="get" action="sdcpost.php">
                      TITRE: <input type="text" name="titre1" id="titre1"> NOM: <input type="text" name="nom-apprenant" id="nom-apprenant"> PRENOM: <input type="text" name="prenom" id="prenom-apprenant"> FORMATION: <input type="text" name="formation" id="formation">
                    </div>
                  </div>
                  <div class="column">
                    <div class="block">
                      <div class="header">
                        <h3 class="white">LE CONTRAT DE PROFESSIONNALISATION</h3>
                      </div>
                      <span>NATURE DU CONTRAT : </span><br />CDD <input type="checkbox" name="contrat" id="contrat" value="cdd"><br />
                      <span> CDI </span><input type="checkbox" name="contrat" id="contrat" value="cdi"><br />
                      <span>DATE DE DEBUT DU CONTRAT : </span><input type="text" name="dateDebutContrat" id="dateDebutContrat" placeholder="AAAA-MM-JJ"><br />
                      <span>DATE DE FIN DU CONTRAT : </span><input type="text" name="dateFinContrat" id="dateFinContrat" placeholder="AAAA-MM-JJ"><br />
                      <span>INTITULE DU POSTE : </span><input type="text" name="intitulePoste" id="intitulePoste"><br />
                      <span>DUREE HEBDOMADAIRE DE TRAVAIL : 35H </span><input type="checkbox" name="dureeHebdo" id="dureeHebdo"><br />AUTRE, préciser : <input type="text" name="dureeHebdo"><br />
                      <span>REMUNERATION MENSUELLE BRUTE : </span><input type="text" name="remunBrute" id="remunBrute" placeholder="€ brut/mois à la date d'embauche"><br />
                    </div>
                  </div>
                  <div class="column">
                    <div class="block">
                      <div class="header">
                        <h3 class="white">LE FINANCEMENT DE LA FORMATION</h3>
                      </div><br />
                      <span>VOTRE OPCA : </span><input type="text" name="OCPA" id="OCPA"><br />
                      <span>ADRESSE 1 : </span><input type="text" name="adresse1OCPA" id="adresse1OCPA">
                      <span>ADRESSE 2 : </span><input type="text" name="adresse2OCPA" id="adresse2OCPA">
                      <span>CODE POSTAL : </span><input type="text" name="codePostalOCPA" id="codePostalOCPA">
                      <span>VILLE : </span><input type="text" name="villeOCPA" id="villeOCPA"><br />
                      <span>SUBROGATION : </span><br/>
                      <span>Oui</span><input type="radio" name="subrogation" id="subrogation" value="oui"><br/>
                      <span>Non</span><input type="radio" name="subrogation" id="subrogation" value="non"><br/>
                      <span>Commentaire facturation : </span><input type="text" name="commentaireFactu" id="commentaireFactu"><br />
                      <div class="block">
                        <span>INSCRIPTION A LA FORMATION TUTEUR DU 28/11/2017 : <span><input type="checkbox" name="formTuteur" id="formTuteur">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="header">
                      <h3 class="bold-white">INFORMATIONS SUR L'ENTREPRISE D'ACCUEIL</h3>
                    </div>
                  </div>
                  <div class="row small-up-1 medium-up-2 large-up-2 ">
                    <div class="column">
                      <div class="block">
                        <h3 class="bold" class="white"> 1- ETABLISSEMENT SIGNATAIRE DU CONTRAT</h3>
                        <div class="etab1">
                          <span>RAISON SOCIALE</span><input type="text" name="RS1" id="RS1">
                          <span>N° DE SIRET</span><input type="text" name="SIRET1" id="SIRET1">
                          <span>CODE NAF</span><input type="text" name="NAF1" id="NAF1">
                          <span>SECTEUR D'ACTIVITE</span><input type="text" name="sectActi1" id="sectActi1">
                          <span>ADRESSE</span><input type="text" name="adresse1" id="adresse1">
                          <span>TELEPHONE</span><input type="text" name="tel1" id="tel1">
                          <span>CP</span><input type="text" name="CP1" id="CP1">
                          <span>VILLE</span><input type="text" name="ville1" id="ville1">
                          <span>EFFECTIF</span><input type="text" name="effectif1" id="effectif1">
                        </div>
                      </div>
                    </div>
                    <div class="column">
                      <div class="block">
                        <h3 class="bold"> 2- ETABLISSEMENT D'EXECUTION DU CONTRAT :</h3>
                        <div class="etab2">
                          <span>RAISON SOCIALE</span><input type="text" name="RS2" id="RS2">
                          <span>N° DE SIRET</span><input type="text" name="SIRET2" id="SIRET2">
                          <span>CODE NAF</span><input type="text" name="NAF2" id="NAF2">
                          <span>SECTEUR D'ACTIVITE</span><input type="text" name="sectActi2" id="sectActi2">
                          <span>ADRESSE</span><input type="text" name="adresse2" id="adresse2">
                          <span>TELEPHONE</span><input type="text" name="tel2" id="tel2">
                          <span>CP</span><input type="text" name="CP2" id="CP2">
                          <span>VILLE</span><input type="text" name="ville2" id="ville2">
                          <span>EFFECTIF</span><input type="text" name="effectif2" id="effectif2">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="header">
                      <h3 class="bold-white">COORDONNEES DES CONTACTS</h3>
                    </div>
                  </div>
                  <div class="row large-up-2">
                    <div class="column">
                      <div class="block">
                        <h3 class="white">TUTEUR / TUTRICE</h3>
                        <span>TITRE</span><input type="text" name="titre2" id="titre2"><span>FONCTION</span><input type="text" name="fonction1" id="fonction1"><br />
                        <span>NOM</span><input type="text" name="nom2" id="nom2"><span>PRENOM</span><input type="text" name="prenom2" id="prenom2"><br />
                        <span>TELEPHONE</span><input type="text" name="tel2" id="tel2"><span>EMAIL</span><input type="email" name="mail1" id="mail1"><br />
                        <span>ADRESSE : </span><span class="etab1">ETABLISSEMENT 1 <input type="checkbox" name="etab11" id="etab11"></span><span class="etab2"> ETABLISSEMENT 2 <input type="checkbox" name="etab12" id="etab12"></span><br />
                      </div>
                    </div>
                    <div class="column">
                      <div class="block">
                        <h3 class="white">SIGNATAIRE DU CONTRAT</h3>
                        <span>TITRE</span><input type="text" name="titre3" id="titre3"><span>FONCTION</span><input type="text" name="fonction2" id="fonction2"><br />
                        <span>NOM</span><input type="text" name="nom3" id="nom3"><span>PRENOM</span><input type="text" name="prenom3" id="prenom3"><br />
                        <span>TELEPHONE</span><input type="text" name="tel3" id="tel3"><span>EMAIL</span><input type="email" name="mail2" id="mail2"><br />
                        <span>ADRESSE : </span><span class="etab1"> ETABLISSEMENT 1 <input type="checkbox" name="etab21" id="etab21"></span><span class="etab2"> ETABLISSEMENT 2 <input type="checkbox" name="etab22" id="etab22"></span><br />
                      </div>
                    </div>
                    <div class="column">
                      <div class="block">
                        <h3 class="white">CONTACT ADMINISTRATION DU DOSSIER</h3>
                        <span>TITRE</span><input type="text" name="titre4" id="titre4"><span>FONCTION</span><input type="text" name="fonction3" id="fonction3"><br />
                        <span>NOM</span><input type="text" name="nom4" id="nom4"><span>PRENOM</span><input type="text" name="prenom4" id="prenom4"><br />
                        <span>TELEPHONE</span><input type="text" name="tel4" id="tel4"><span>EMAIL</span><input type="email" name="mail3" id="mail3"><br />
                        <span>ADRESSE :</span><span class="etab1"> ETABLISSEMENT 1 <input type="checkbox" name="etab31" id="etab31"></span><span class="etab2"> ETABLISSEMENT 2 <input type="checkbox" name="etab32" id="etab32"></span><br />
                      </div>
                    </div>
                    <div class="column">
                      <div class="block">
                        <h3 class="white">CONTACT FACTURATION</h3>
                        <span>TITRE</span><input type="text" name="titre5" id="titre5"><span>FONCTION</span><input type="text" name="fonction4" id="fonction4"><br />
                        <span>NOM</span><input type="text" name="nom5" id="nom5"><span>PRENOM</span><input type="text" name="prenom5" id="prenom5"><br />
                        <span>TELEPHONE</span><input type="text" name="tel5" id="tel5"><span>EMAIL</span><input type="email" name="mail4" id="mail4"><br />
                        <span>ADRESSE : </span><span class="etab1">ETABLISSEMENT 1 <input type="checkbox" name="etab41" id="etab41"></span><span class="etab2"> ETABLISSEMENT 2 <input type="checkbox" name="etab42" id="etab42"></span><br />
                      </div>
                    </div>
                    <div class="column">
                      <div class="block">
                        <h3 class="white">CONTACT ABSENCES</h3>
                        <span>TITRE</span><input type="text" name="titre6" id="titre6"><span>FONCTION</span><input type="text" name="fonction5" id="fonction5"><br />
                        <span>NOM</span><input type="text" name="nom6" id="nom6"><span>PRENOM</span><input type="text" name="prenom6" id="prenom6"><br />
                        <span>TELEPHONE</span><input type="text" name="tel6" id="tel6"><span>EMAIL</span><input type="email" name="mail5" id="mail5"><br />
                        <span>ADRESSE : </span><span class="etab1">ETABLISSEMENT 1<input type="checkbox" name="etab51" id="etab51"></span><span class="etab2"> ETABLISSEMENT 2<input type="checkbox" name="etab52" id="etab52"></span><br />
                      </div>
                    </div>
                    <div class="column">
                      <div class="block">
                        <h3 class="white">CONTACT TAXE D'APPRENTISSAGE</h3>
                        <span>TITRE</span><input type="text" name="titre7" id="titre7"><span>FONCTION</span><input type="text" name="fonction6" id="fonction6"><br />
                        <span>NOM</span><input type="text" name="nom7" id="nom7"><span>PRENOM</span><input type="text" name="prenom7" id="prenom7"><br />
                        <span>TELEPHONE</span><input type="text" name="tel7" id="tel7"><span>EMAIL</span><input type="email" name="mail6" id="mail6"><br />
                        <span>ADRESSE : </span><span class="etab1">ETABLISSEMENT 1 <input type="checkbox" name="etab61" id="etab61"></span><span class="etab2"> ETABLISSEMENT 2 <input type="checkbox" name="etab62" id="etab62"></span>
                      </div>
                    </div>
                  </div>
                  <div class="row large-up-2">
                    <div class="column">
                      <input type="submit" name="annuler" class="button" id="annuler" value="Annuler"><span> </span><input type="submit" class="button" name="soumettre" id="soumettre" value="Soumettre">
                      <input type="hidden" name="nomFormation" value="<?php echo $nomFormation; ?>">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php echo piedPage();?>
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
