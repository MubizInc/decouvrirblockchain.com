<!DOCTYPE html>
<html lang="<?=$_SESSION['lang']?>">
<head>
    <title>Decouvrir Blockchain</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <?php
        include_once(ROOT_PATH."/pages/common/head.php");
    ?>
</head>
<body>
    <!-- Navigation -->
    <?php
        include_once(ROOT_PATH."/pages/common/nav.php");
    ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('/img/blockchain/network.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Découvrir Blockchain</h1>
                        <hr class="small">
                        <span class="subheading">Vous donner envie d'essayer</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                <div class="post-preview row">
                    <div class="col-md-9">
                        <a href="/0/">
                            <h2 class="post-title">
                                <?=ARTICLE_0_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_0_SUBTITLE?>
                            </h3>
                        </a>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_0_AUTHOR?></a> le <?=ARTICLE_0_PUBLISHED_DATE?></p>
                    </div>
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_0_PICTURE?>" alt="Start"/>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_1_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                    <div class="col-md-9">
                        <a href="/1/">
                            <h2 class="post-title">
                                1. <?=ARTICLE_1_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_1_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Paiement</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_1_AUTHOR?></a> le <?=ARTICLE_1_PUBLISHED_DATE?></p>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-9">
                        <a href="/2/">
                            <h2 class="post-title">
                                2. <?=ARTICLE_2_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_2_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Paiement</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_2_AUTHOR?></a> le <?=ARTICLE_2_PUBLISHED_DATE?></p>
                    </div>
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_2_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_3_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                    <div class="col-md-9">
                        <a href="/3/">
                            <h2 class="post-title">
                                3. <?=ARTICLE_3_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_3_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Paiement</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_3_AUTHOR?></a> le <?=ARTICLE_3_PUBLISHED_DATE?></p>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-9">
                        <a href="/4/">
                            <h2 class="post-title">
                                4. <?=ARTICLE_4_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_4_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Paiement</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_4_AUTHOR?></a> le <?=ARTICLE_4_PUBLISHED_DATE?></p>
                    </div>
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_4_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_5_PICTURE?>"" alt="Mobile Wallet"/>
                    </div>
                    <div class="col-md-9">
                        <a href="/5/">
                            <h2 class="post-title">
                                5. <?=ARTICLE_5_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_5_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Paiement</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_5_AUTHOR?></a> le <?=ARTICLE_5_PUBLISHED_DATE?></p>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-9">
                        <a href="/6/">
                            <h2 class="post-title">
                                6. <?=ARTICLE_6_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_6_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-error">Notaire</span> <span class="badge badge-pill badge-error">INPI</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_6_AUTHOR?></a> le <?=ARTICLE_6_PUBLISHED_DATE?></p>
                    </div>
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_6_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_7_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                    <div class="col-md-9">
                        <a href="/7/">
                            <h2 class="post-title">
                                7. <?=ARTICLE_7_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_7_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-default">Ethereum</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_7_AUTHOR?></a> le <?=ARTICLE_7_PUBLISHED_DATE?></p>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-9">
                        <a href="/8/">
                            <h2 class="post-title">
                                8. <?=ARTICLE_8_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_8_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-default">Ethereum</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_8_AUTHOR?></a> le <?=ARTICLE_8_PUBLISHED_DATE?></p>
                    </div>
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_8_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_9_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                    <div class="col-md-9">
                        <a href="/9/">
                            <h2 class="post-title">
                                9. <?=ARTICLE_9_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                 <?=ARTICLE_9_TITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-default">Ethereum</span> <span class="badge badge-pill badge-default">Développeurs</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_9_AUTHOR?></a> le <?=ARTICLE_9_PUBLISHED_DATE?></p>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-9">
                        <a href="/10/">
                            <h2 class="post-title">
                                10. Préserver son identité
                            </h2>
                            <h3 class="post-subtitle">
                                 Coinb.in et LightWallet
                            </h3>
                        </a>
                        <p class="post-meta">Publié par <a href="#">Albin CAUDERLIER</a> le 30 septembre 2017</p>
                    </div>
                    <div class="col-md-3">
                        <img src="/img/blockchain/hd_wallet.jpg" alt="Mobile Wallet"/>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-3">
                        <img src="/img/blockchain/openbazaar.jpg" alt="Mobile Wallet"/>
                    </div>
                    <div class="col-md-9">
                        <a href="/11/">
                            <h2 class="post-title">
                                11. Acheter un produit sur une place de marché décentralisée
                            </h2>
                            <h3 class="post-subtitle">
                                 OpenBazaar, Particl et Mubiz
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Commerce</span>
                        <p class="post-meta">Publié par <a href="#">Albin CAUDERLIER</a> le 30 septembre 2017</p>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-9">
                        <a href="/12/">
                            <h2 class="post-title">
                                12. Créer ma propre monnaie (altcoin)
                            </h2>
                            <h3 class="post-subtitle">
                                 Build a coin
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Développeur</span>
                        <p class="post-meta">Publié par <a href="#">Albin CAUDERLIER</a> le 30 septembre 2017</p>
                    </div>
                    <div class="col-md-3">
                        <img src="/img/bitcoin/crypto-logo.png" alt="Mobile Wallet"/>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-3">
                        <img src="/img/blockchain/mobile-wallet.jpg" alt="Mobile Wallet"/>
                    </div>
                    <div class="col-md-9">
                        <a href="/13/">
                            <h2 class="post-title">
                                13. 
                            </h2>
                            <h3 class="post-subtitle">
                                
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Développeur</span>
                        <p class="post-meta">Publié par <a href="#">Albin CAUDERLIER</a> le 30 septembre 2017</p>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-9">
                        <a href="/14/">
                            <h2 class="post-title">
                                14. Lancer une ICO
                            </h2>
                            <h3 class="post-subtitle">
                                TokenFactory
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Ethereum</span>
                        <p class="post-meta">Publié par <a href="#">Albin CAUDERLIER</a> le 30 septembre 2017</p>
                    </div>
                    <div class="col-md-3">
                        <img src="/img/blockchain/mobile-dapps.jpg" alt="Mobile Wallet"/>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-3">
                        <img src="/img/blockchain/mobile-wallet.jpg" alt="Mobile Wallet"/>
                    </div>
                    <div class="col-md-9">
                        <a href="/15/">
                            <h2 class="post-title">
                                15. Outils grand-public de trading en crypto-monnaies
                            </h2>
                            <h3 class="post-subtitle">
                                CoinMarketCap, CoinCap.io et CryptoWatch et BitcoinWidget (mobile)
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Trading</span>
                        <p class="post-meta">Publié par <a href="#">Albin CAUDERLIER</a> le 30 septembre 2017</p>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-9">
                        <a href="/16/">
                            <h2 class="post-title">
                                16. Outils techniques de trading en crypto-monnaies
                            </h2>
                            <h3 class="post-subtitle">
                                Postman et liste des API (dont Mubiz, CoinMarketCap, CryptoWatch, BlockStack, ...)
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Développeurs</span>
                        <p class="post-meta">Publié par <a href="#">Albin CAUDERLIER</a> le 30 septembre 2017</p>
                    </div>
                    <div class="col-md-3">
                        <img src="/img/blockchain/mobile-wallet.jpg" alt="Mobile Wallet"/>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-3">
                        <img src="/img/blockchain/mobile-wallet.jpg" alt="Mobile Wallet"/>
                    </div>
                    <div class="col-md-9">
                        <a href="/17/">
                            <h2 class="post-title">
                                17. Enregistrer mon identité ou ma marque
                            </h2>
                            <h3 class="post-subtitle">
                                Onename et BitNation
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Registre d'Identité</span> <span class="badge badge-pill badge-success">KYC</span> <span class="badge badge-pill badge-success">INPI</span>
                        <p class="post-meta">Publié par <a href="#">Albin CAUDERLIER</a> le 30 septembre 2017</p>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-9">
                        <a href="/18/">
                            <h2 class="post-title">
                                18. Indicateurs et suivi de l'évolution de la technologie
                            </h2>
                            <h3 class="post-subtitle">
                                Principaux baromètres, Google Trends, lien vers taille blockchain, CoinMarketCap, ...
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Indicateurs</span> <span class="badge badge-pill badge-success">KPI</span>
                        <p class="post-meta">Publié par <a href="#">Albin CAUDERLIER</a> le 30 septembre 2017</p>
                    </div>
                    <div class="col-md-3">
                        <img src="/img/blockchain/mobile-wallet.jpg" alt="Mobile Wallet"/>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-3">
                        <img src="/img/blockchain/augur.png" alt="Mobile Wallet"/>
                    </div>
                    <div class="col-md-9">
                        <a href="/19/">
                            <h2 class="post-title">
                                19. Faire un pari décentralisé
                            </h2>
                            <h3 class="post-subtitle">
                                Augur ou Gnosys
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Assurance</span> <span class="badge badge-pill badge-success">Paris</span>
                        <p class="post-meta">Publié par <a href="#">Albin CAUDERLIER</a> le 30 septembre 2017</p>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-9">
                        <a href="/20/">
                            <h2 class="post-title">
                                20. Suivre les ICO (mais de loin...)
                            </h2>
                            <h3 class="post-subtitle">
                                ICO List et ICO Stat
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Investissement</span>
                        <p class="post-meta">Publié par <a href="#">Albin CAUDERLIER</a> le 30 septembre 2017</p>
                    </div>
                    <div class="col-md-3">
                        <img src="/img/blockchain/mobile-wallet.jpg" alt="Mobile Wallet"/>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-3">
                        <img src="/img/blockchain/mobile-wallet.jpg" alt="Mobile Wallet"/>
                    </div>
                    <div class="col-md-9">
                        <a href="/post/">
                            <h2 class="post-title">
                                21. Tokenisation, inventaire et traçabilité avec les ColoredCoins
                            </h2>
                            <h3 class="post-subtitle">
                                CoPay, CoinPris, Colu, ... et les ERC#20
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Logistique</span>
                        <p class="post-meta">Publié par <a href="#">Albin CAUDERLIER</a> le 30 septembre 2017</p>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-9">
                        <a href="/post/">
                            <h2 class="post-title">
                                22. Fidélité et billeterie avec les ColoredCoins
                            </h2>
                            <h3 class="post-subtitle">
                                CoPay, CoinPris, Colu, Czam ... et les ERC#20
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Commerce</span> <span class="badge badge-pill badge-success">Billeterie</span>
                        <p class="post-meta">Publié par <a href="#">Albin CAUDERLIER</a> le 30 septembre 2017</p>
                    </div>
                    <div class="col-md-3">
                        <img src="/img/blockchain/mobile-wallet.jpg" alt="Mobile Wallet"/>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-3">
                        <img src="/img/blockchain/mobile-wallet.jpg" alt="Mobile Wallet"/>
                    </div>
                    <div class="col-md-9">
                        <a href="/post/">
                            <h2 class="post-title">
                                23. Créer une adresse personnalisée
                            </h2>
                            <h3 class="post-subtitle">
                                Vanity
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Logistique</span>
                        <p class="post-meta">Publié par <a href="#">Albin CAUDERLIER</a> le 30 septembre 2017</p>
                    </div>
                </div>
                <hr>
                <!-- Pager -->
                <!--       
                <hr>
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php
        include_once(ROOT_PATH."/pages/common/footer.php");
    ?>
</body>
</html>