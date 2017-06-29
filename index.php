<?php
	require_once("configuration.php");
	
	// Initialisation de la session avec le même domaine pour l'ensemble des sous-domaines.
	ini_set('session.cookie_domain',COOKIE_URL);
	session_set_cookie_params(300,'/',COOKIE_URL);
	session_start();

	// Rapporter toutes les erreurs PHP
	//error_reporting(E_ALL);

	require_once('includes/functions.php');
	
	// Détection de la langue à utiliser
	require_once('lib/lang/php/lang.php');
	$_SESSION['lang']=detectLang();
	setLocalWithLang();
	
	// Loading language file
	require_once('lang/'.$_SESSION['lang'].'.lang.php');

	// Détection du navigateur pour adaptation des pages aux smartphones
	if(!isset($_SESSION['isMobile'])){
		isMobile();
	}
	
	// Get page to display
	$_SESSION['page']=getRequestedUri();
	
	// Call the dispatcher to process the request
	include_once('pages/'.$_SESSION['page'].'/index.php');
?>