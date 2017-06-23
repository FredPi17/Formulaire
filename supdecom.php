<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/jpg" href="img/logo.jpg" />
    <title>FORMULAIRE</title>
    <!--<link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">-->
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/foundation-icons/foundation-icons.css">
  </head>
  <body>
  <?php
  include("include/utilisateur.php");
  session_start();

   if(!isset($_SESSION['code'])){
    header('Location: login.php');
    die();
    }
  ?>
  <div class="off-canvas-wrapper">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <div class="off-canvas-content" data-off-canvas-content>
          <div class="callout primary">
            <div class="row column">
              <a href="index.php"><h1>BIENVENUE</h1></a>
            </div>
          </div>
          <div class="row">
            <div class="column">
              <h1 id="title">Choisissez l'école</h1>
              <p class="subheader"></p>
              <p></p>
            </div>
          </div>
          <div class="row small-up-2 medium-up-3 ">
            <div class="column">
          <div class="card">

            <a href="idrac.php"><img src="img/idrac.png"></a>
            <div class="card-section">
              <p></p>
            </div>
          </div>
        </div>
          <div class="column">
          <div class="card">
            <a href="supdecom.php"><img src="img/sdc.png"></a>
            <div class="card-section">
              <p></p>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
</div>
