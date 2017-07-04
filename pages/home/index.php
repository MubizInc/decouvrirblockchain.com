<!DOCTYPE html>
<html lang="<?=$_SESSION['lang']?>">
<head>
    <?php
        include_once(ROOT_PATH."/pages/common/head.php");
        include_once(ROOT_PATH."/pages/home/head.php");
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
                        <h1><?=SITE_NAME?></h1>
                        <hr class="small">
                        <span class="subheading"><?=HOMEPAGE_PITCH?></span>
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
                                 <?=ARTICLE_9_SUBTITLE?>
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
                                10. <?=ARTICLE_10_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                 <?=ARTICLE_10_SUBTITLE?>
                            </h3>
                        </a>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_10_AUTHOR?></a> le <?=ARTICLE_10_PUBLISHED_DATE?></p>
                    </div>
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_10_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_11_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                    <div class="col-md-9">
                        <a href="/11/">
                            <h2 class="post-title">
                                11. <?=ARTICLE_11_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                 <?=ARTICLE_11_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Commerce</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_11_AUTHOR?></a> le <?=ARTICLE_11_PUBLISHED_DATE?></p>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-9">
                        <a href="/12/">
                            <h2 class="post-title">
                                12. <?=ARTICLE_12_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_12_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Développeur</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_12_AUTHOR?></a> le <?=ARTICLE_12_PUBLISHED_DATE?></p>
                    </div>
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_12_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_13_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                    <div class="col-md-9">
                        <a href="/13/">
                            <h2 class="post-title">
                                13. <?=ARTICLE_13_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_13_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Développeur</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_13_AUTHOR?></a> le <?=ARTICLE_13_PUBLISHED_DATE?></p>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-9">
                        <a href="/14/">
                            <h2 class="post-title">
                                14. <?=ARTICLE_14_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_14_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Ethereum</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_14_AUTHOR?></a> le <?=ARTICLE_14_PUBLISHED_DATE?></p>
                    </div>
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_14_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_15_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                    <div class="col-md-9">
                        <a href="/15/">
                            <h2 class="post-title">
                                15. <?=ARTICLE_15_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_15_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Trading</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_15_AUTHOR?></a> le <?=ARTICLE_15_PUBLISHED_DATE?></p>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-9">
                        <a href="/16/">
                            <h2 class="post-title">
                                16. <?=ARTICLE_16_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_16_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Développeurs</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_16_AUTHOR?></a> le <?=ARTICLE_16_PUBLISHED_DATE?></p>
                    </div>
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_16_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_17_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                    <div class="col-md-9">
                        <a href="/17/">
                            <h2 class="post-title">
                                17. <?=ARTICLE_17_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_17_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Registre d'Identité</span> <span class="badge badge-pill badge-success">KYC</span> <span class="badge badge-pill badge-success">INPI</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_17_AUTHOR?></a> le <?=ARTICLE_17_PUBLISHED_DATE?></p>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-9">
                        <a href="/18/">
                            <h2 class="post-title">
                                18. <?=ARTICLE_18_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_18_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Indicateurs</span> <span class="badge badge-pill badge-success">KPI</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_18_AUTHOR?></a> le <?=ARTICLE_18_PUBLISHED_DATE?></p>
                    </div>
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_18_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_19_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                    <div class="col-md-9">
                        <a href="/19/">
                            <h2 class="post-title">
                                19. <?=ARTICLE_19_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_19_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Assurance</span> <span class="badge badge-pill badge-success">Paris</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_19_AUTHOR?></a> le <?=ARTICLE_19_PUBLISHED_DATE?></p>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-9">
                        <a href="/20/">
                            <h2 class="post-title">
                                20. <?=ARTICLE_20_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_20_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Investissement</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_20_AUTHOR?></a> le <?=ARTICLE_20_PUBLISHED_DATE?></p>
                    </div>
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_20_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_21_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                    <div class="col-md-9">
                        <a href="/post/">
                            <h2 class="post-title">
                                21. <?=ARTICLE_21_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_21_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Logistique</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_21_AUTHOR?></a> le <?=ARTICLE_21_PUBLISHED_DATE?></p>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-9">
                        <a href="/post/">
                            <h2 class="post-title">
                                22. <?=ARTICLE_22_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_22_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Commerce</span> <span class="badge badge-pill badge-success">Billeterie</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_22_AUTHOR?></a> le <?=ARTICLE_22_PUBLISHED_DATE?></p>
                    </div>
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_22_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                </div>
                <hr>
                <div class="post-preview row">
                    <div class="col-md-3">
                        <img src="<?=ARTICLE_23_PICTURE?>" alt="Mobile Wallet"/>
                    </div>
                    <div class="col-md-9">
                        <a href="/post/">
                            <h2 class="post-title">
                                23. <?=ARTICLE_23_TITLE?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?=ARTICLE_23_SUBTITLE?>
                            </h3>
                        </a>
                        <span class="badge badge-pill badge-success">Logistique</span>
                        <p class="post-meta">Publié par <a href="#"><?=ARTICLE_23_AUTHOR?></a> le <?=ARTICLE_23_PUBLISHED_DATE?></p>
                    </div>
                </div>
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