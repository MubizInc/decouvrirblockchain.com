	<meta charset="UTF-8" />

	<meta name="robots"         content="index,follow"/>
	<meta name="rating"         content="safe for kids"/>
	<meta name="revisit-after"  content="14 days"/>
	<meta name="author"         content="Mubiz"/>

	<meta name="geo.placename"	content="France"/>

	<?php 
		if(!isset($_SERVER["REDIRECT_URL"])){
			$_SERVER["REDIRECT_URL"]="";
		}
		// TODO - A transférer dans les pages "simples". Adapter les pages des produits / des vendeurs / d'exploration des blockchains
	?>
	<meta property="og:type"		content="website"/>
	<meta property="og:site_name"	content="Mubiz"/>
	<meta property="og:url"			content="<?=ROOT_URL.$_SERVER["REDIRECT_URL"]?>"/>
	<meta property="og:locale"		content="fr_FR"/>

	<meta property="fb:app_id" content="1261950717171137" />

	<meta name="twitter:site"		content="@mubiz_<?=$_SESSION['lang']?>"/>
	<meta name="twitter:card" 		content="summary_large_image">
	<meta name="twitter:creator"	content="@mubiz_<?=$_SESSION['lang']?>">
	<meta name="twitter:url"		content="<?=ROOT_URL.$_SERVER["REDIRECT_URL"]?>"/>
	
	<meta name="theme-color" content="#009999">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap Core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="/css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<?php 
		if(isMobile()){
			echo('<meta name="viewport" content="width=device-width, initial-scale=1.0, target-densitydpi=device-dpi"/>');
		}
		
		require_once("lib/lang/config/config.php");
		
		// Si navigation sur le site principal 
		if($_SESSION['lang']===LANG_DEFAULT){
			echo('<link rel="canonical" href="'.ROOT_URL.$_SERVER["REDIRECT_URL"].'" />');
		}
		// Si navigation sur un sous-domaine (avec une langue définie)
		else{
			echo('<link rel="canonical" href="http://'.$_SESSION['lang'].'.'.COOKIE_URL.$_SERVER["REDIRECT_URL"].'" />');
		}
		
		if($_SESSION['lang']!=="de"){
			echo('<link rel="alternate" hreflang="de" href="https://de.'.COOKIE_URL.$_SERVER["REDIRECT_URL"].'"/>');
		}
		if($_SESSION['lang']!=="en"){
			echo('<link rel="alternate" hreflang="en" href="https://en.'.COOKIE_URL.$_SERVER["REDIRECT_URL"].'"/>');
		}
		if($_SESSION['lang']!=="fr"){
			echo('<link rel="alternate" hreflang="fr" href="https://fr.'.COOKIE_URL.$_SERVER["REDIRECT_URL"].'"/>');
		}

		//include('lib/bootstrap/bootstrap_header.php');
	?>

	<link rel="stylesheet"    		media="all"		type="text/css" 	href="/style/design.css"   />
	<link rel="stylesheet"    		media="all"		type="text/css" 	href="/style/style_screen.css"   />
	<!-- <link rel="stylesheet"    	media="print"	type="text/css"  	href="/style/style_print.css"    />  -->
	<link rel="shortcut icon"   					type="image/ico"	href="/images/favicon.png" 	/>
	
    <!-- <script type="text/javascript" src="/lib/highlight/highlight.pack.js"></script> -->
	<!-- <script type="text/javascript" src="/js/design.js"></script> -->
	
	<?php // TODO - Adapter si page produit ?>
	<script type="application/ld+json">
	/*
	{
		"@context" : "http://schema.org",
		"@type" : "Organization",
		"name" : "Mubiz",
		"url" : "https://mubiz.com",
		"sameAs" : [
						"https://twitter.com/mubiz_en",
						"https://plus.google.com/108238030869718293720",
						"https://www.facebook.com/mubizinc",
						"https://www.pinterest.com/mubizcom"
					]
	}
	*/
	</script>


