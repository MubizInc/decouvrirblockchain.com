<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content="Blockchain, découvrir, théorie, pratique">
    <meta name="description" content="">
    <meta name="author" content="Albin CAUDERLIER">

    <title>Découvrir Blockchain</title>

    <?php
        include_once(ROOT_PATH."/pages/common/head.php");

		// SOCIAL
		$shared_url = "http://".COOKIE_URL.$_SERVER["REDIRECT_URL"];
    ?>
</head>
<body>
    <!-- Navigation -->
    <?php
        include_once(ROOT_PATH."/pages/common/nav.php");
    ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('/img/background/start.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="post-heading">
                        <h1>De la théorie à la pratique</h1>
                        <h2 class="subheading">Vous donner envie d'essayer</h2>
                        <span class="meta">Publié par <a href="/about/">Albin CAUDERLIER</a> le 30/06/2017</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
					<ul class="col-md-6 crumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
						<li class="first" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a itemprop="item" href="/" title="DecouvrirBlockchain">
								<span itemprop="name"><i class="fa fa-home"></i> DecouvrirBlockchain</span>
							</a>
							<meta itemprop="position" content="1"/>
						</li>
						<li class="last" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a itemprop="item" title="Introduction">
								<span itemprop="name">Introduction</span>
							</a>
							<meta itemprop="position" content="2"/>
						</li>
					</ul>
					<div class="col-md-6" id="vendor_share_buttons">
						<div class="share_button">
							<?php 
								$tweet_text="";
								
								if(!empty($store_presentation['name']))	$tweet_text=$store_presentation['name'];
								
								$tweet_text.="%20@Mubiz_".$_SESSION['lang'];
								$tweet_text.="%20".ROOT_URL.$_SERVER["REDIRECT_URL"];
							?>
							<a href="https://twitter.com/intent/tweet?text=<?=$tweet_text?>" data-size="large" rel="nofollow" target="_blanck">
								<div class="link share_button twitter_share_button float-right">
									<img src="/img/social/twitter-square.png" alt="twitter"/> Partager
								</div>
							</a>
						</div>
						<div class="share_button">
							<a href="https://www.facebook.com/sharer/sharer.php?app_id=1261950717171137&sdk=joey&u=<?=ROOT_URL.$_SERVER["REDIRECT_URL"]?>&display=popup&ref=plugin&src=share_button" data-size="large" rel="nofollow" target="_blanck">
								<div class="link share_button facebook_share_button float-right">
									<img src="/img/social/facebook-square.png" alt="facebook"/> Partager
								</div>
							</a>
						</div>
					</div>
				</div>
    		</div>
    	</div>
    </section>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <h2 class="section-heading">Une technologie prometeuse</h2>
                    <p>
                        L'usage d'une blockchain apporte son lôt de promesses : décentralisation, égalité, transparence, éternité, immuabilité,... Autant de valeurs dont notre société et les entreprises ont grand besoin. Depuis 2015, cette technologie fait l'objet d'une grande poussée de notoriété, avec autant de projets ambitieux que de rêves utopistes. Dès lors, il est difficile d'identifier les bénéfices immédiats et les projets à long terme.
                    </p>

                    <h2 class="section-heading">La documentation ne manque pas</h2>
                    <p>
                        Il est désormais facile de se documenter concernant cette technologie. Quantité d'articles, de posts, de conférences, de hackathons ... ont permis de vulgariser les concepts de cette nouvelle solution technique. Parmis les références, citons <a href="https://bitcoin.fr" title="bitcoin.fr" target="_blank" rel="nofollow">le blog bitcoin.fr</a>, <a href="http://blockfest.fr" title="Hackathon blockchain" target="_blank" rel="nofollow">les hackathons du BlockFest</a> et les associations <a href="https://www.chaintech.fr/" title="La Chaintech" target="_blank" rel="nofollow">la ChainTech</a>, <a href="https://www.chaintech.fr/" title="le Cercle du Coin" target="_blank" rel="nofollow">le Cercle du Coin</a> et <a href="https://www.ethereum-france.com/" title="Ethereum France" target="_blank" rel="nofollow">Asseth</a>
                    </p>

                    <div class="row">
                        <div class="col-md-6"><img src="/img/about/bitcoinfr.png" alt="bitcoin.fr"/></div>
                        <div class="col-md-6"><img src="/img/about/blockfest-logo.png" alt="BlockFest - Le hackathon pédagogique de la Blockchain"/></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><img src="/img/about/chaintech-logo.png" alt=""/></div>
                        <div class="col-md-4"><img src="/img/about/cercleducoin-logo.png" alt="Le Cercle du Coin"/></div>
                        <div class="col-md-4"><img src="/img/about/asseth-logo.jpg" alt="Asseth et Ethereum France"/></div>
                    </div>



                    <h2 class="section-heading">La force de l'expérience</h2>
                    <p>
                        On peut être surpris par l'écart de compétence - et indirectement de pertinence - qui se crée entre les personnes ayant vu et pratiqué, et celles qui ont étudié, parfois en détails,... sans jamais expérimenter. Comme toute innovation, la blockchain apporte son lot d'experts, aux savoirs théoriques impressionnants, qui n'ont pourtant jamais pratiqué.
                    </p>
                    <p>
                        Probablement par peur de la complexité technique, certains cols blancs préfèrent rester loin de l'utilisation réelle. En nouvelle technologie, "se remonter les manches et mettre les mains dans le cambouis" se limite bien souvent à télécharger quelques applications, saisir des données sur un clavier et cliquer sur quelques boutons. Rien de bien salissant. Pourquoi alors cet écart entre "les théoriciens" et "les explorateurs" ?
                    </p>

                    <h2 class="section-heading">Faciliter l'accès et guider</h2>
<!--                <p>
                        La réponse est arrivée la semaine dernière lors d'une démonstration. Pour illustrer une idée lors d'une présentation, un directeur que j'ai la chance de côtoyer accepte de télécharger une application et de faire un test avec une transaction. Dès lors, la seule idée qu'il a souhaité développer de cette technologie est son usage pour les micro-paiements. Dans son caractère, c'est comme si cette simple expérience avait remplacé les dizaines d'articles qu'il a lu sur le sujet depuis un an.
                    </p>
 -->
                    <p>
                        Ce constat a déclenché la création de <strong>DécouvrirBlockchain</strong>. Ce site a vocation à faciliter le passage à la pratique, sans nécessiter de compétence technique. Tous les auteurs sont les bienvenus. La seule condition est de faire pratiquer le lecteur, sans nécessiter de manipulation technique, afin qu'il n'ait pas uniquement appris, mais qu'il ait réalisé et vécu quelque chose.
                    </p>
                    <p>
                        Il est temps de découvrir, voir, tester, explorer, essayer, pratiquer, vivre cette technologie,... et nous espérons que <strong>DecouvrirBlockchain</strong> vous y aidera.
                    </p>
                    <hr/>
                    <div class="">
	                    <h3>A propos de l'auteur</h3>
	                    <div class="row">
	                    	<div class="col-md-3"></div>
	                    	<div class="col-md-9"></div>
	                    </div>
                    </div>
                    <hr/>
	                <a href="/1/">
	                    <button type="button" class="btn btn-info float-right">
	                        1. Acheters des crypto-monnaies (bitcoins, ethers, ...) avec quelques euros
	                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
	                    </button>
	                </a>
	                <hr/>
                </div>
            </div>
        </div>
    </article>
    

<!--     <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <a href="/1/">
                    <button type="button" class="btn btn-info float-right">
                        1. Acheters des crypto-monnaies (bitcoins, ethers, ...) avec quelques euros
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                    </button>
                </a>
            </div>
        </div>
    </div>
 -->

    <!-- Footer -->
    <?php
        include_once(ROOT_PATH."/pages/common/footer.php");
    ?>
</body>
</html>
