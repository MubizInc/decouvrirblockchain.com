<?php
/**
 * E-mProvement SARL
 * All right reserved
 * @date	27/10/2014
 * @author	Albin CAUDERLIER
 */

/**
 * Détecte la langue du navigateur (déclaratif HTTP)
 */
function detectLang(){
	// Liste des langues connues par le site.
	// TODO - Déplacer cette liste dans la configuration de la lib "lang"
	$knownLanguage=array("ar","de","en","es","fr","it","ru");
	
	// Si le login est connecté + qu'il a une langue d'enregistrée
	if(isset($_SESSION['isConnected']) && !empty($_SESSION['isConnected']) && isset($_SESSION['login']) && !empty($_SESSION['login'])){
		require_once("/home/admin/git/mubiz-mo-api/controller/lib/authentication/authentication.php");
		// Inclusion des paramètres d"authentication
		if(is_login_confirmed($_SESSION["login"])){
			require_once("/home/admin/git/mubiz-mo-api/controller/lib/lang/php/lang.php");
			$userLang=get_authentification_lang($_SESSION["login"]);
			
			// Vérification que la lang indiquée est bien dans celles proposées par le site.
			if(in_array($userLang,$knownLanguage)){
				return $userLang;
			}
		}
	}
	
	// I. S'il s'agit d"un sous-domaine de lang, return la langue du sous-domaine
	if(isset($_SERVER["SERVER_NAME"])){
		$userLang=substr($_SERVER["SERVER_NAME"],0,2);
		
		// Vérification que la lang indiquée est bien dans celles proposées par le site.
		if(in_array($userLang, $knownLanguage)){
			return $userLang;
		}
	}
	
	// II. Si sur site www., alors comparaison avec la liste des langues préférées par l"utilisateur.
	if(isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])){
		$preferedLanguage=explode(",",$_SERVER["HTTP_ACCEPT_LANGUAGE"]);
		
		foreach ($preferedLanguage as $lang){
			$lang=substr($lang,0,2);
			if(in_array($lang, $knownLanguage)){
				return $lang;
			}
		}
	}
	
	// III. Si aucune langue trouvée, utilisation de la lang par défaut.
	require_once("./lib/lang/config/config.php");
	return LANG_DEFAULT;
}

function setLocalWithLang(){
	// TODO - Transformer en Switch
	
	$zone_euro=["fr","de","es","it"];
	
	if($_SESSION['lang']==="en"){
		define("SEPARATOR",".");
		define("CURRENCY",840);	// Code ISO
		setlocale(LC_ALL,'en_US');
		return;
	}
	
	else if($_SESSION['lang']==="fr"){
		define("SEPARATOR",",");
		define("CURRENCY",978);	// Code ISO
		setlocale(LC_ALL,'fr_FR');
		return;
	}
	
	else if($_SESSION['lang']==="de"){
		define("SEPARATOR",",");
		define("CURRENCY",978);	// Code ISO
		setlocale(LC_ALL,'de_DE');
		return;
	}
	
	else if(in_array($_SESSION['lang'],$zone_euro)){
		define("SEPARATOR",",");
		define("CURRENCY",978);	// Code ISO
		return;
	}
	
	else{
		define("SEPARATOR",".");
		define("CURRENCY",840);	// Code ISO
		return;
	}
	
}

?>