<footer>
	<nav class="container">
		<div class="col-md-3">
			<?php 
				if($_SESSION['page']==="home"){	echo('	<h3><img alt="'.LOGO_ALT.'" src="/img/logo/decouvrir-blockchain-logo-white.png"/></h3>
														<div class="footer_link">&copy; '.COMPANY_NAME_SHORT.' 2017</div>');
				}
				else{							echo('	<a href="/" title="'.LOGO_TITLE.'"><img alt="'.LOGO_ALT.'" src="/img/logo/decouvrir-blockchain-logo-white.png"/></a>
														<div class="footer_link">&copy; <a href="/" title="'.COMPANY_NAME_SHORT.'">'.COMPANY_NAME_SHORT.'</a> 2017</div>');
				}
			?>
			<p>
				<i class="fa fa-map-marker color-white"></i> 7 rue de la Cavée, 77500 Chelles - FRANCE<br/>
				<i class="fa fa-mobile color-white"></i> +33 6 27 38 32 31<br/>
				<i class="fa fa-envelope color-white"></i> contact@decouvrirblockchain.com
			</p>
		</div>
		<div class="col-md-3">
			<h3><?=FOOTER_RUBRIQUE_TITLE_1?></h3>
			<div class="footer_link">
				<?php 
					if($_SESSION['page']==="lexique"){	echo('<div class="active">'.FOOTER_ITEM_LEXIQUE.'</div>');}
					else{								echo('<a href="/lexique" title="'.FOOTER_ITEM_LEXIQUE_TITLE.'">'.FOOTER_ITEM_LEXIQUE.'</a>');}
				?>
			</div>
			<div class="footer_link">
				<?php 
					if($_SESSION['page']==="donation"){	echo('<div class="active">Don et Soutien</div>');}
					else{								echo('<a href="/donation" title="Don">Don et soutien</a>');}
				?>
			</div>
		</div>
		<div class="col-md-3">
			<h3><?=FOOTER_RUBRIQUE_TITLE_4?></h3>
			<div class="footer_link">
				<?php 
					if($_SESSION['page']==="about"){echo('<div class="active">'.FOOTER_ITEM_ABOUT.'</div>');}
					else{							echo('<a href="/about" title="'.FOOTER_ITEM_ABOUT_TITLE.'">'.FOOTER_ITEM_ABOUT.'</a>');}
				?>
			</div>
			<div class="footer_link">
				<?php 
					if($_SESSION['page']==="contact"){	echo('<div class="active">'.FOOTER_ITEM_CONTACT.'</div>');}
					else{								echo('<a href="/contact" title="'.FOOTER_ITEM_CONTACT_TITLE.'">'.FOOTER_ITEM_CONTACT.'</a>');}
				?>
			</div>
			<div class="footer_link">
				<?php 
					if($_SESSION['page']==="press"){echo('<div class="active">'.FOOTER_ITEM_PRESS.'</div>');}
					else{							echo('<a href="/press" title="'.FOOTER_ITEM_PRESS_TITLE.'">'.FOOTER_ITEM_PRESS.'</a>');}
				?>
			</div>
			<div class="footer_link">
				<?php 
					if($_SESSION['page']==="team"){	echo('<div class="active">'.FOOTER_ITEM_TEAM.'</div>');}
					else{							echo('<a href="/team" title="'.FOOTER_ITEM_TEAM_TITLE.'">'.FOOTER_ITEM_TEAM.'</a>');}
				?>
			</div>
			<div class="footer_link">
				<?php 	
					if($_SESSION['page']==="legal"){echo('<div class="active">'.LEGAL_INFORMATION.'</div>');}
					else{							echo('<a href="/legal" title="'.LEGAL_INFORMATION_TITLE.'">'.LEGAL_INFORMATION.'</a>');}
				?>
			</div>
		</div>
		<div class="col-md-3">
			<h3><?=FOOTER_RUBRIQUE_TITLE_5?></h3>
			<div class="footer_link">
				<div class="social">
					<a href="<?=FACEBOOK_MUBIZ_URL?>" title="<?=FACEBOOK_MUBIZ_TITLE?>" rel="nofollow" target="_blank">
						<div class="social_image" id="facebook_link">
							<img alt="facebook" src="/img/social/facebook.png"/>
						</div>
					</a>
				</div>
				<div class="social">
					<a href="<?=TWITTER_MUBIZ_URL?>" title="<?=TWITTER_MUBIZ_TITLE?>"	rel="nofollow" target="_blank">
						<div class="social_image" id="twitter_link">
							<img alt="twitter" src="/img/social/twitter.png"/>
						</div>
					</a>
				</div>
				<div class="social">
					<a href="<?=LINKEDIN_MUBIZ_URL?>"  title="<?=LINKEDIN_MUBIZ_TITLE?>" rel="nofollow" target="_blank">
						<div class="social_image" id="linkedin_link">
							<img alt="linkedin" src="/img/social/linkedin.png"/>
						</div>
					</a>
				</div>
				<div class="social">
					<a href="<?=PINTEREST_MUBIZ_URL?>"  title="<?=PINTEREST_MUBIZ_TITLE?>" rel="nofollow" target="_blank">
						<div class="social_image" id="pinterest_link">
							<img alt="pinterest" src="/img/social/pinterest.png"/>
						</div>
					</a>
				</div>
			</div>
			<?php 
				/*
					<div class="title"><?=FOOTER_ITEM_MOBILE?></div>
					<div class="footer_link">
						<?php 
							if($_SESSION['page']==="mobile"){	echo('<div class="active">'.FOOTER_ITEM_MOBILE.'</div>');}
							else{								echo('<a href="/mobile" title="'.FOOTER_ITEM_MOBILE_TITLE.'">'.FOOTER_ITEM_MOBILE.'</a>');}
						?>
					</div>
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>

				*/
			?>
		</div>
	</nav>
</footer>

<!-- jQuery -->
<script src="/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="/js/jqBootstrapValidation.js"></script>
<script src="/js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="/js/clean-blog.min.js"></script>