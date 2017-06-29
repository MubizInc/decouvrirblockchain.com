<?php
/**
 * E-mProvement SARL
 * All right reserved
 * @date	02/2015
 * @author	Albin CAUDERLIER
 */

/**
 *	Fonction de nettoyage d'un texte
 *
 *	@param	$text	Texte à nettoyer
 *
 *	@return		Texte nettoyé
 */
function cleanText($text){
	$text=trim($text); // delete white spaces after & before text

	if(1 === get_magic_quotes_gpc()){
		$stripslashes=create_function('$txt','return stripslashes($txt);');
	}
	else{
		$stripslashes=create_function('$txt','return $txt;');
	}

	// magic quotes ?
	$text=$stripslashes($text);
	$text=htmlentities($text,ENT_QUOTES); // converts to string with " and ' as well
	//$text=nl2br($text);
	return $text;
}


// TODO - Faire de même avec les adresse e-mail, à l'inscription et à la connexion => Transparent pour l'utilisateur.
/**
 *	Fonction de nettoyage d'un lien
 *
 *	@param	$text	Lien à nettoyer
 *
 *	@return		Lien nettoyé
 */
function cleanLink($text) {
	//Suppression des espaces en début et fin de chaine
	$text=trim($text);

	//Suppression des accents
	$text=remove_accents($text,$charset='utf-8');
	//$text=strtr($text,'àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ','aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
	
	//mise en minuscule
	$text=strtolower($text);

	//Suppression des espaces et caracteres speciaux
	$text=str_replace(" ",'-',$text);
	$text=preg_replace('#([^a-z0-9-])#','-',$text);

	//Suppression des tirets multiples
	$text=preg_replace('#([-]+)#','-',$text);

	//Suppression du premier caractere si c'est un tiret
	if($text{0} == '-')
		$texte=substr($text,1);

	//Suppression du dernier caractere si c'est un tiret
	if(substr($text, -1, 1) == '-')
		$text=substr($text, 0, -1);

	return $text;
}


/**
 * 
 * @param
 * @return		
 *
 */
function unhtmlentities($chaineHtml) {
	$tmp=get_html_translation_table(HTML_ENTITIES);
	$tmp=array_flip($tmp);
	$chaineTmp=strtr($chaineHtml, $tmp);
	$chaineTmp=str_replace('&#039;', '\'', $chaineTmp);
	return $chaineTmp;
}


/**
 * Détecte le navigateur utilisé par l'utilisateur (déclaratif HTTP)
 *
 * @return		L'OS détecté à l'aide des données déclaratives HTTP
 *
 */
function detect_os(){
	$a=$_SERVER['HTTP_USER_AGENT'];

	if (preg_match('#windows\snt\s5\.1#i',$a))return('Microsoft Windows XP');
	if (preg_match('#linux\sx86_64#i',$a))return('Linux (64 bits)');
	if (preg_match('#khtml#i',$a))return('Linux');
	if (preg_match('#linux#i',$a))return('Linux');
	if (preg_match('#libwww-fm#i',$a))return('Linux');
	if (preg_match('#freebsd#i',$a))return('FreeBSD');
	if (preg_match('#mac\sos\sx#i',$a))return('Mac OS X');
	if (preg_match('#windows\snt\s6\.1#i',$a))return('Microsoft Windows 7');
	if (preg_match('#haiku#i',$a))return('Haiku');
	if (preg_match('#windows\snt\s6\.0;\swow64#i',$a))return('Microsoft Windows Vista (64bits)');
	if (preg_match('#windows\snt\s6\.0;\swin64#i',$a))return('Microsoft Windows Vista (64bits)');
	if (preg_match('#windows\snt\s6\.0#i',$a))return('Microsoft Windows Vista');
	if (preg_match('#sunos#i',$a))return('Open Solaris');
	if (preg_match('#android#i',$a))return('Android');
	if (preg_match('#windows\s95#i',$a))return('Microsoft Windows 95');
	if (preg_match('#windows\snt\s5\.0#i',$a))return('Microsoft Windows 2000');
	if (preg_match('#windows\snt\s5\.3#i',$a))return('Microsoft Windows Server 2003');
	if (preg_match('#windows\snt#i',$a))return('Microsoft Windows NT');
	if (preg_match('#windows\s98#i',$a))return('Microsoft Windows 98');
	if (preg_match('#windows\sce#i',$a))return('Microsoft Windows Mobile');
	if (preg_match('#windows\sphone\sos[\s\/]([0-9v]{1,7}(?:\.[0-9a-z]{1,7}){0,7})#i',$a,$c))return('Microsoft Windows Phone version '.$c[1]);
	if (preg_match('#mac_powerpc#i',$a))return('Mac OS X');
	if (preg_match('#macintosh#i',$a))return('Macintosh');
	if (preg_match('#cygwin_nt#i',$a))return('Microsoft Windows 2000');
	if (preg_match('#os\/2#i',$a))return('Microsoft OS/2');
	if (preg_match('#symbianos[\s\/]([0-9v]{1,7}(?:\.[0-9a-z]{1,7}){0,7})#i',$a,$c))return('Symbian OS version '.$c[1]);
	if (preg_match('#symbian-crystal[\s\/]([0-9v]{1,7}(?:\.[0-9a-z]{1,7}){0,7})#i',$a,$c))return('Symbian OS version '.$c[1]);
	if (preg_match('#offbyone;\swindows\s2000#i',$a))return('Microsoft Windows XP');
	if (preg_match('#windows\s2000#i',$a))return('Microsoft Windows 2000');
	if (preg_match('#nintendo\swii#i',$a))return('Nintendo Wii');
	if (preg_match('#playstation\sportable#i',$a))return('PlayStation Portable');
	if (preg_match('#iphone\sos\s[\s\/]([0-9v]{1,7}(?:[\._][0-9a-z]{1,7}){0,7})#i',$a,$c))return('iPhone OS version '.$c[1]);

	return 'OS non identifie';
}


function isMobile(){
	// Array des navigateurs mobiles connus
	$knownMobileUserAgent=array('iphone','ipod','android','blackberry','windows phone','symbian','series60','palm');
	$userAgent=strtolower($_SERVER['HTTP_USER_AGENT']);
	
	// Initialisation de la valeur à PC
	$_SESSION['isMobile']="pc";
	
	// Vérification que le navigateur indiqué est pour mobile.
	foreach($knownMobileUserAgent as $knowUserAgent){
		if(strstr($userAgent,$knowUserAgent)){
			$_SESSION['isMobile']="mobile";
			return true;
		}
	}
	
	return false;
}



/**
 * Détecte le navigateur utilisé par l'utilisateur (déclaratif HTTP)
 *
 * @return	Le navigateur détecté à l'aide des données déclaratives HTTP
 */
function detect_browser(){
	$a=$_SERVER['HTTP_USER_AGENT'];
	return get_browser(null, true);
}


/**
 * RequestDispatcher
 * Processing of the request uri
 * 
 * TODO - Optimiser, car ici, p1 est djà le premier niveau d'arborescence et p2 est, par contre, tout le reste de l'arbo.
 */
function getRequestedUri(){
	$dossier_pages='pages/';
	$page_home='home';

	// Default=home page
	if(empty($_GET)){
		// Get page to display
		if(isset($_SESSION['isConnected']) && !empty($_SESSION['isConnected']) && isset($_SESSION['login']) && !empty($_SESSION['login'])){
			return('user-home');
		}
		return($page_home);
	}

	// SEARCH LISTING
	if(substr($_SERVER["REQUEST_URI"],0,2)==='/?'){
		return('buy');
	}
	
	// ONENAME USER PRESENTATION
	// TODO - A déplacer dans la page /onename/
	if(substr($_SERVER["REQUEST_URI"],0,10)==='/onename/@'){
		return('onename/user');
	}
	
	/*
	// SEARCH IN MUBIZ DATABASE
	if(substr($_SERVER["REQUEST_URI"],0,9)==='/search/?'){
		// TODO - A supprimer et à déplacer dans /directory, ...
		return('search-result');
	}
	*/
	
	// Directory protection
	if(isset($_GET['p1'])){
		$page=cleanText($_GET['p1']);
		$temp=explode('/',$page);

		// Existing page?
		if(isset($_GET['p2'])){
			$p2=cleanText($_GET['p2']);
			$temp2=explode('/',$p2);
	
			// Get page if user is logged
			if(isset($_SESSION['isConnected']) && !empty($_SESSION['isConnected']) && isset($_SESSION['login']) && !empty($_SESSION['login']) && file_exists($dossier_pages.'user-'.$temp[0].'/'.$temp2[0].'/index.php')){
				return('user-'.$temp[0].'/'.$temp2[0]);
			}
	
			// For the same URL, get page if user is Not logged
			if(file_exists($dossier_pages.$temp[0].'/'.$temp2[0].'/index.php')){
				return($temp[0].'/'.$temp2[0]);
			}
		}
	
		
		if(isset($_SESSION['isConnected']) && !empty($_SESSION['isConnected']) && isset($_SESSION['login']) && !empty($_SESSION['login']) && file_exists($dossier_pages.'user-'.$temp[0].'/index.php')){
			return('user-'.$temp[0]);
		}
		
		if(file_exists($dossier_pages.$temp[0].'/index.php')){
			return($temp[0]);
		}
		
		
		// Interprétation du 1er caractère
		if(substr($temp[0],0,1)==='@'){
			// EXISTING USER ?
			$user_url=substr(strtolower($temp[0]),1);
			
			// TODO - Adapter la page 'users' pour qu'elle affiche un message si l'url n'est pas enregistrée.
			$user_public_data=json_decode(file_get_contents('https://api.mubiz.com/@'.$user_url),true);
			if(!$user_public_data["is_a_recorded_user_url"]){
				// Affiche que la user_url indiquée n'est pas utilisée.
				return('users');
			}

			// Existing project?
			if(isset($_GET['p2']) && !empty($_GET['p2'])){
				$p2=cleanText($_GET['p2']);
				
				// Attention, p2 embarque peut-être tout ce qu'il y a après p1, ... donc toute l'arborescence, "/" inclus !
		
				// Recherche des pages de l'utilisateur
				$temp2=explode('/',$p2);
				if(file_exists($dossier_pages.'users/'.$temp2[0].'/index.php')){
					return('users/'.$temp2[0]);
				}
					
				// Recherche dans les projets de l'utilisateur
				// TODO - Remplacer cet appel à api.mubiz.com/controller par une analyse des données de $user_public_data, obtenu plus haut.
				require_once("/home/admin/git/mubiz-mo-api/controller/lib/project/project.php");
				if(is_project_url_recorded($user_url,$p2)){
					// TODO : S'il s'agit d'une des pages du project (/account, /news, ...)
					return('project');
				}
			}
		
			// Récupérer les autres paramètres de l'URL, voir, chercher en BdD s'il s'agit d'un user connu et actif.
			return('users');
		}
		
		
		// RECYCLAGE
		// Recyclage si oubli du @ de l'utilisateur => Routage vers l'utilisateur ou le projet ou la sous-page
		$user_url=strtolower($page);
		$user_public_data=json_decode(file_get_contents('https://api.mubiz.com/@'.$user_url),true);
		if($user_public_data["is_a_recorded_user_url"]){
			if(isset($_GET['p2'])){
				header("Location: /@".$user_url."/".$_GET['p2']."/");
				exit;
			}
			header("Location: /@".$user_url);
			exit;
		}
	}
	
	// Redirection, faute de page trouvée, vers la page error
	return('error');
}


/**
 * 
 */
function remove_accents($string,$charset='utf-8'){
	$string=htmlentities($string,ENT_NOQUOTES,$charset);

	$string=preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#','\1',$string);
	$string=preg_replace('#&([A-za-z]{2})(?:lig);#','\1',$string); // pour les ligatures e.g. '&oelig;'
	$string=preg_replace('#&[^;]+;#', '',$string); // supprime les autres caractères

	return $string;
}




/**
 *
 */
function str2url($string){
	// Suppression des accents
	$string=remove_accents($string,$charset='utf-8');
	
	// Tout en minuscule
	$string=strtolower($string);
	
	// Supprime les espaces
	$string=trim($string," \t\n\r\0\x0B");
	
	// Remplacement des espaces par des "."
	$string=str_replace(' ','',$string);
	
	// Retire les caractères spéciaux non voulus dans les URL
	// TODO - Simplifier, potentiellement, avec un preg_replace
	$string=str_replace('{','',$string);
	$string=str_replace('}','',$string);
	$string=str_replace('(','',$string);
	$string=str_replace(')','',$string);
	$string=str_replace('[','',$string);
	$string=str_replace(']','',$string);
	$string=str_replace('<','',$string);
	$string=str_replace('>','',$string);
	$string=str_replace('?','',$string);
	$string=str_replace('!','',$string);
	$string=str_replace('§','',$string);
	$string=str_replace(',','',$string);
	$string=str_replace(';','',$string);
	$string=str_replace('.','',$string);
	$string=str_replace(':','',$string);
	$string=str_replace('/','',$string);
	//$string=str_replace('*','',$string);
	$string=str_replace('=','',$string);
	$string=str_replace('+','',$string);
	$string=str_replace('°','',$string);
	$string=str_replace('²','',$string);
	//$string=str_replace('&','',$string);
	$string=str_replace('@','',$string);
	$string=str_replace('%','',$string);
	$string=str_replace('#','',$string);
	$string=str_replace('$','',$string);
	$string=str_replace('£','',$string);
	$string=str_replace('"','',$string);
	
	return $string;
}




/**
 *
 *	@param		Session_label		Le label du champ.
 *	@return		Indique si ce label est utilisé et renseigné.
 *
 *	Permet d'éviter une nouvelle authentification si l'utilisateur est toujours connecté.
 */
/*
function session_isset($label){
	// On teste si la variable de session existe et contient une valeur
	if(isset($_SESSION[$label]) && !empty($_SESSION[$label])){
		return true;
	}
	return false;
}
*/


/**
 *
 *
 */
function unlog_user(){
	// Destruction des variables de la session
	session_unset();

	// Réinitialisation du tableau de session - On le vide int�gralement
	$_SESSION = array();

	// Destruction de la session
	session_destroy();

	// Destruction du tableau de session
	unset($_SESSION);

	// TODO - Enregistrer l'action dans l'historisation d'authentication

}



function parseHTTPHeader($headers){
	$head=array();
	foreach($headers as $k=>$v){
		$t=explode(':',$v,2);
		if(isset($t[1]))
			$head[trim($t[0])]=trim($t[1]);
		else{
			$head[]=$v;
			if(preg_match("#HTTP/[0-9\.]+\s+([0-9]+)#",$v,$out))
				$head['reponse_code']=intval($out[1]);
		}
	}
	return $head;
}


function get_curl_call($url){
	$ch=curl_init($url);
	//curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies.txt');
	//curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookies.txt');
	// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE); => = curl -L ?
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	//curl_setopt($ch,CURLOPT_HEADER, false);
	$result=curl_exec($ch);
	curl_close($ch);
	return $result;
}


function is_a_valid_url($url){
	$file_headers = @get_headers($url);
	if(!$file_headers || strpos($file_headers[0],'200')===false || strpos($url,'http')===false){
		return false;
	}
	return true;
}


function get_currency_symbol($currency_code){
	// Complete list : http://www.xe.com/symbols.php
	switch($currency_code){
		case 'USD': return '$';
		case 'EUR': return '€';
		case 'BTC': return '฿';
		case 'GBP': return '£';
		case 'CNY': return '¥';
		case 'INR': return '₹';
		default: 	return $currency_code;
	}
}

function get_country_name($country_code){
	// TODO - Remplacer les noms de pays par leurs labels dans un fichier .lang !
	switch($country_code){
		case "AFGHANISTAN":		return "Afghanistan";
		case "ALAND_ISLANDS":	return "Iles d'Alan";
		case "ALBANIA":			return "Albanie";
		case "ALGERIA":			return "Algérie";
		case "AMERICAN_SAMOA":	return "Samoa";
		case "ANDORRA":			return "Andorra";
		case "ANGOLA":			return "Angola";
		case "ANGUILLA":		return "Anguilla";
		//case "ANTIGUA":			return "Antigua";
		case "AZERBAIJAN":		return "Azerbaijan";
		case "ARGENTINA":		return "Argentine";
		case "ARMENIA":			return "Arménie";
		case "ARUBA":			return "Aruba";
		case "AUSTRALIA":		return "Australie";
		case "AUSTRIA":			return "Autriche";
		case "BAHAMAS":			return "Bahamas";
		case "BELGIUM":			return "Belgique";
		case "BULGARIA":		return "Bulgarie";
		case "CANADA":			return "Canada";
		case "COLOMBIA":		return "Colombie";
		case "SWITZERLAND":		return "Suisse";
		case "CHINA":			return "Chine";
		case "CYPRUS":			return "Chypre";
		case "CZECH_REPUBLIC":	return "République Tchèque";
		case "GERMANY":			return "Allemagne";
		case "DENMARK":			return "Danemark";
		case "SPAIN":			return "Espagne";
		case "ESTONIA":			return "Estonie";
		case "FINLAND":			return "Filande";
		case "FRANCE":			return "France";
		case "UNITED_KINGDOM":	return "Royaume-Uni";
		case "GREECE":			return "Grèce";
		case "GUATEMALA":		return "Guatemala";
		case "CROATIA":			return "Croatie";
		case "HUNGARY":			return "Hongrie";
		case "INDONESIA":		return "Indonésie";
		case "IRELAND":			return "Irlande";
		case "INDIA":			return "Inde";
		case "ITALY":			return "Italie";
		case "JAPAN":			return "Japon";
		case "LATVIA":			return "Latvia";
		case "LITHUANIA":		return "Lithuanie";
		case "LUXEMBOURG":		return "Luxembourg";
		case "MALTA":			return "Malte";
		case "MOLDOVA":			return "Moldavie";
		case "NETHERLANDS":		return "Pays-Bas";
		case "POLAND":			return "Pologne";
		case "PUERTO_RICO":		return "Porto Rico";
		case "PORTUGAL":		return "Portugal";
		case "ROMANIA":			return "Roumanie";
		case "RUSSIA":			return "Russie";
		case "SINGAPORE":		return "Singapour";
		case "SLOVAKIA":		return "Slovaquie";
		case "SLOVENIA":		return "Slovénie";
		case "SWEDEN":			return "Suède";
		case "TAIWAN":			return "Taïwan";
		case "THAILAND":		return "Thaïlande";
		case "UKRAINE":			return "Ukraine";
		case "UNITED_STATES":	return "Etats-Unis";
	}
	
	// TODO - MIEUX !!! Ecrire COUNTRY_CODE_.$country_code ET METTRE LES NOMS DES PAYS DANS LES FICHIERS LANG => SUPPRESSION DE CETTE FONCTION !!!
}

function get_flag_id_name($country_code){
	switch($country_code){
		case "AFGHANISTAN":		return "af";
		case "ALAND_ISLANDS":	return "aland";
		case "ALBANIA":			return "al";
		case "ALGERIA":			return "algeria";
		case "AMERICAN_SAMOA":	return "american_samoa";
		case "ANDORRA":			return "ad";
		case "ANGOLA":			return "ao";
		case "ANGUILLA":		return "anguilla";
		//case "ANTIGUA":			return "Australie";
		case "AZERBAIJAN":		return "az";
		case "ARGENTINA":		return "ar";
		case "ARMENIA":			return "am";
		case "ARUBA":			return "aruba";
		case "AUSTRALIA":		return "au";
		case "AUSTRIA":			return "at";
		case "BAHAMAS":			return "bs";
		case "BELGIUM":			return "be";
		case "BULGARIA":		return "bg";
		case "CANADA":			return "ca";
		case "COLOMBIA":		return "co";
		case "SWITZERLAND":		return "ch";
		case "CHINA":			return "cn";
		case "CYPRUS":			return "cy";
		case "CZECH_REPUBLIC":	return "cz";
		case "GERMANY":			return "de";
		case "DENMARK":			return "dk";
		case "SPAIN":			return "es";
		case "ESTONIA":			return "ee";
		case "FINLAND":			return "fi";
		case "FRANCE":			return "fr";
		case "UNITED_KINGDOM":	return "gb";
		case "GREECE":			return "gr";
		case "GUATEMALA":		return "gt";
		case "CROATIA":			return "hr";
		case "HUNGARY":			return "hu";
		case "INDONESIA":		return "id";
		case "IRELAND":			return "ie";
		case "INDIA":			return "in";
		case "ITALY":			return "it";
		case "JAPAN":			return "jp";
		case "LATVIA":			return "lv";
		case "LITHUANIA":		return "lt";
		case "LUXEMBOURG":		return "lu";
		case "MALTA":			return "mt";
		case "MOLDOVA":			return "md";
		case "NETHERLANDS":		return "nl";
		case "POLAND":			return "pl";
		case "PORTUGAL":		return "pt";
		case "ROMANIA":			return "ro";
		case "PUERTO_RICO":		return "pr";
		case "RUSSIA":			return "ru";
		case "SINGAPORE":		return "sg";
		case "SLOVAKIA":		return "sk";
		case "SLOVENIA":		return "si";
		case "SWEDEN":			return "se";
		case "TAIWAN":			return "tw";
		case "THAILAND":		return "th";
		case "UKRAINE":			return "ua";
		case "UNITED_STATES":	return "us";
	}
	
	// TODO - MIEUX !!! Ecrire COUNTRY_CODE_.$country_code ET METTRE LES NOMS DES PAYS DANS LES FICHIERS LANG => SUPPRESSION DE CETTE FONCTION !!!
}



function clean_about($about){
	// Suppression des commentaires
	$about=remove_html_comments($about);

	// Suppression des liens
	$about=remove_html_links($about);
	
	// Suppression des balises non supportées
	//$about=str_replace($about,"<div>","");
	//$about=str_replace($about,"</div>","");
	//$about=str_replace($about,"<br/>","");
	//$about=str_replace($about,"<br>","");
	//$about=str_replace($about,"</br>","");
	//$about=str_replace($about,"<u>","");
	//$about=str_replace($about,"</u>","");
	
	return $about;
}

// Remove unwanted HTML comments
function remove_html_comments($content=''){
	return preg_replace('/<!--(.|\s)*?-->/','',$content);
}

// Remove unwanted HTML links
function remove_html_links($content=''){
	//return preg_replace('/<a(.|\s)*a>/','',$content);
	$content = preg_replace("/<a href=\'(.*?)\'>(.*?)<\/a>/", "\\2", $content);
	return preg_replace('/<a href=\"(.*?)\">(.*?)<\/a>/', "\\2", $content);
}



// TODO - Retirer cette fonction du F.O. - C'est une action de M.O. !
/**
 *	Key generator
 *
 *	@param	$nombre_caractere	Longueur souhaité de la clé aléatoire
 *	@param	$chaine				Caractères autorisés
 *									Rq : le zéro est retiré pour éviter qu'il ne soit interprété.
 *
 */
function getRandomKeyForCart($nombre_caractere,$chaine){ // = 'azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN123456789-_'){
	$nombre_lettres = strlen($chaine)-1;
	$key = '';

	for($i=0; $i < $nombre_caractere; $i++){
		$key .= $chaine[mt_rand(0, $nombre_lettres)];
	}

	return $key;
}


/**
 * Génération du numéro aléatoire de cart_id
*/
function random(int $car) {
	$string = "";
	$chaine = "1234567890abcdefghijklmnpqrstuvwxy";
	srand((double)microtime()*1000000);

	for($i=0; $i<$car; $i++) {
		$string .= $chaine[mt_rand()%strlen($chaine)];
	}
	return $string;
}


/**
 *	Parse a Unix time stamp to a date
 *
 *	@param	$unix_time	Time stamp
 *
 *  @return				A string with the date
 *
 */
function unixtime_to_delay($unix_timedelay){
	$seconds = Math.floor($unix_timedelay/1000);
	$minutes = Math.floor($seconds/60);
	$hours = Math.floor($minutes/60);
	$days = Math.floor($hours/24);

	$hours = $hours-($days*24);
	$minutes = $minutes-($days*24*60)-($hours*60);
	$seconds = $seconds-($days*24*60*60)-($hours*60*60)-($minutes*60);

	$result='';
	if($days>0)		$result .= $days.'days ';
	if($hours>0)	$result .= $hours.'hours ';
	if($minutes>0)	$result .= $minutes.'min ';
	if($seconds>0)	$result .= $seconds.'sec ';

	return $result;
}



function get_order_status_value(string $order_status){
	switch($order_status){
		case "CREATED":
			return 1;
		case "SET":
			return 10;
		case "BOUGHT":
			return 20;
		case "ORDERED":
			return 30;
		case "VENDOR_EXPEDETED":
			return 40;
		case "IN_STOCK":
			return 50;
		case "MUBIZ_EXPEDITED":
			return 60;
		case "CLOSED":
			return 79;
		case "CANCELLED":
			return 19;
		case "REFUNDED":
			return 99;
		default:
			return 0;
	}
}

?>