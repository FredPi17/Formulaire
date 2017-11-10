<?php include('include/utilisateur.php');

session_start();
?>
<title>Se connecter</title>
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/foundation.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
      <div class="off-canvas-content" data-off-canvas-content>
        <div class="callout primary">
          <div class="row column">
            <h1>Se connecter</h1>
          </div>
        </div>
        <div class="row medium-up-3" style="height:200px;">
          <div class="column">
            <img src="img/idrac.png" style="width:200px;">
          </div>
          <div class="column" style="margin-top:25px;">
            <a href="index.php" class="button" >Retour formulaire</a>
          </div>
          <div class="column">
            <img src="img/sdc.png" style="width:200px;">
          </div>
        </div>
            <div class="row medium-up-1">
              <div class="column">
                    <?php echo menuConnexion();
                    if (estConnecte()){
                      header("Location: administration.php");
                      die();
                    }
                    ?>
            </div>
          </div>
        </div>
      </div>
    </div>
