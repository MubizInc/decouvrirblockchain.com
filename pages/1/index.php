<!DOCTYPE html>
<html lang="<?=$_SESSION['lang']?>">
<head>
    <?php
        include_once(ROOT_PATH."/pages/common/head.php");
        include_once(ROOT_PATH."/pages/1/head.php");

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
    <header class="intro-header" style="background-image: url('<?=ARTICLE_1_PICTURE?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="post-heading">
                        <h1><?=ARTICLE_1_TITLE?></h1>
                        <h2 class="subheading"><?=ARTICLE_1_SUBTITLE?></h2>
                        <span class="meta">Publié par <a href="/about/"><?=ARTICLE_1_AUTHOR?></a> le <?=ARTICLE_1_PUBLISHED_DATE?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="col-md-8 crumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="first" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/" title="DecouvrirBlockchain">
                                <span itemprop="name"><i class="fa fa-home"></i> <?=SITE_NAME?></span>
                            </a>
                            <meta itemprop="position" content="1"/>
                        </li>
                        <li class="last" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" title="<?=ARTICLE_1_TITLE?>">
                                <span itemprop="name"><?=ARTICLE_1_TITLE?></span>
                            </a>
                            <meta itemprop="position" content="2"/>
                        </li>
                    </ul>
                    <div class="col-md-4" id="vendor_share_buttons">
                        <div class="share_button">
                            <?php 
                                $tweet_text="";
                                
                                if(!empty($store_presentation['name'])) $tweet_text=$store_presentation['name'];
                                
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

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="jumbotron">
                    Difficulté : 1/5 - Newby<br/>
                    Matériel : Un PC / Un compte bancaire / Une pièce d'identité / Une adresse e-mailA <br/>
                    Durée : 30min<br/>
                </div>
            </div>
        </div>
    </div>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p>
                        Avant de tester des services complexes sur des blockchains, je vous propose de débuter simplement par l'achat de bitcoins avec quelques euros. Pas d'inquiétude, vous pourrez, à chaque instant, les revendre si vous le jugez nécessaire.
                    </p>

                    <h2 class="section-heading">Acheter pour quelques euros de bitcoin sur Paymium</h2>
                    <p>
                        Pour essayer avec quelques euros, je vous conseille le site français Paymium : <a href="https://paymium.com" title="Paymium - Exchange français">https://paymium.com</a>
                        Suite à votre inscription et à la vérification de votre identité (lutte contre le blanchiment oblige), vous pourrez émettre un virement vers le compte créé et acheter votre première portion de bitcoin.

                        Des bureaux de change américains, tels que <a href="https://www.kraken.com" title="">kraken</a> et <a href="https://www.coinbase.com" title="">coinbase</a>, et chinois, tel que <a href="https://gatecoin.com" title="">gatecoin</a>, proposent également ces services.
                    </p>
                    <hr/>
                    <div class="about_author">
                        <h3>A propos de l'auteur</h3>
                        <div class="row">
                            <div class="col-xs-4">
                                <img src="/img/team/albin-cauderlier.png" alt="Albin CAUDERLIER"/>
                                <a href="http://www.plferrer.photos/" alt="Pierre-Louis FERRER">&copy; Pierre-Louis FERRER</a>
                            </div>
                            <div class="col-xs-8">
                                <p>
                                    <strong><?=ARTICLE_1_AUTHOR?></strong><br/>
                                    <i>Fondateur de <a href="https://fr.mubiz.com" title="Mubiz">Mubiz</a></i><br/>
                                    <?=TEAM_ALBIN_CAUDERLIER_PRESENTATION?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
            </div>
        </div>
    </article>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <a href="/0/">
                    <button type="button" class="btn btn-info float-left">
                        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                        <?=ARTICLE_0_TITLE?>
                    </button>
                </a>
                <a href="/2/">
                    <button type="button" class="btn btn-info float-right">
                        2. <?=ARTICLE_2_TITLE?>
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                    </button>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php
        include_once(ROOT_PATH."/pages/common/footer.php");
    ?>
</body>
</html>