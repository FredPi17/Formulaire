<?php

			/* -------------------- FONCTION MENU() ------------------ */

  function Menu()
  /**
  *\author Frederic Pinaud
  *\Menu affiche la partie haute de la page avec la déclaration des dépendences
  * elle n'a pas de paramaètres
  *\return un string $menu qu'il faudra afficher.
  */
  {
    $menu = "";/* Déclaration de ma variable menu string  */

		$menu .= '<!doctype html>
		<html class="no-js" lang="en">
		  <head>
		    <meta charset="utf-8" />
		    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		    <link rel="icon" type="image/jpg" href="../img/logo.png" />
		    <title>FORMULAIRE</title>
		    <link rel="stylesheet" href="../css/foundation.css">
		    <link rel="stylesheet" href="../css/app.css">
		    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		    <link rel="stylesheet" href="../fonts/foundation-icons/foundation-icons.css">
		  </head>
		<body>
		<div class="off-canvas-wrapper">
	    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
	      <div class="off-canvas-content" data-off-canvas-content>
	        <div class="callout primary">
	          <div class="row column">';
    return $menu; /* Je renvoit $menu le menu donc. */
  }

	/* -------------------- FONCTION PIED PAGE() ------------------ */

	function piedPage()
	/**
	*\author Frederic Pinaud
	*\piedPage renvoie une valeur qui contient le bas de la page
	* elle n'a pas de paramaètres
	*\return un string $piedpage qu'il faudra afficher.
	*/
	{
		$footer = "";
		$footer.= '<div class="footer">
	    <div class="row small-up-1 medium-up-1 large-up-3">
	      <div class="column">
	        <span class="bold">IDRAC SARL</span>
	        <span>3 Bis rue de la Condamine</span>
	        <span>38610 GIERES</span>
	        <span>+33(0) 4 76 09 72</span>
	        <span class="red"><a href="http://www.ecoles-idrac.com">WWW.ECOLES-IDRAC.COM</a></span>
	      </div>
	      <div class="column">
	        <span>Société au capital de 127 000€</span>
	        <span>Organisme de formation n°</span>
	        <span>N° TVA FR 67 330 377</span>
	        <span>A.P.E. : 8542Z</span>
	      </div>
	      <div class="column">
	        <span>SIRET 330 377 524 00047</span><br/>
	        <span>SIEGE SOCIAL: 7-11 AVENUE DES CHASSEURS<br /> 75017 PARIS FRANCE</span>
	      </div>
	    </div>
	  </div>
	</body>';
		return $footer;
	}
?>
