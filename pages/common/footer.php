<footer>
	<nav class="container">
		<div class="col-md-3">
			<?php 
				if($_SESSION['page']==="home"){	echo('	<img alt="'.LOGO_ALT.'" src="/images/mubiz/mubiz-logo-white.png"/> beta
														<div class="footer_link">&copy; '.COMPANY_NAME_SHORT.' 2017</div>');
				}
				else{							echo('	<a href="/" title="'.LOGO_TITLE.'"><img alt="'.LOGO_ALT.'" src="/images/mubiz/mubiz-logo-white.png"/> beta</a>
														<div class="footer_link">&copy; <a href="/" title="'.COMPANY_NAME_SHORT.'">'.COMPANY_NAME_SHORT.'</a> 2017</div>');
				}
			?>
			<p><i class="fa fa-map-marker color-white"></i> 7 rue de la Cavée, 77500 Chelles - FRANCE</p>
			<p><i class="fa fa-mobile color-white"></i> +33 6 27 38 32 31</p>
			<p><i class="fa fa-envelope color-white"></i> contact@mubiz.com</p>
		</div>
		<div class="col-md-3">
			<div class="title"><?=FOOTER_RUBRIQUE_TITLE_1?></div>
			<div class="footer_link">
				<?php 
					if($_SESSION['page']==="buy"){	echo('<div class="active">'.FOOTER_ITEM_BUY.'</div>');}
					else{							echo('<a href="/buy" title="'.FOOTER_ITEM_BUY_TITLE.'">'.FOOTER_ITEM_BUY.'</a>');}
				?>
			</div>
			<?php 	
				/*
				<div class="footer_link">
					<?php 
						if($_SESSION['page']==="seller"){	echo('<div class="active">'.FOOTER_ITEM_SELLER.'</div>');}
						else{								echo('<a href="/seller" title="'.FOOTER_ITEM_SELLER_TITLE.'">'.FOOTER_ITEM_SELLER.'</a>');}
					?>
				</div>
				<div class="footer_link">
					<?php 
						if($_SESSION['page']==="logistic"){	echo('<div class="active">'.FOOTER_ITEM_LOGISTIC.'</div>');}
						else{								echo('<a href="/logistic" title="'.FOOTER_ITEM_LOGISTIC_TITLE.'">'.FOOTER_ITEM_LOGISTIC.'</a>');}
					?>
				</div>
				<div class="footer_link">
					<?php 
						if($_SESSION['page']==="payment"){	echo('<div class="active">'.FOOTER_ITEM_PAYMENT.'</div>');}
						else{								echo('<a href="/payment" title="'.FOOTER_ITEM_PAYMENT_TITLE.'">'.FOOTER_ITEM_PAYMENT.'</a>');}
					?>
				</div>
	 			<div class="footer_link">
					<?php 
						if($_SESSION['page']==="loyalty"){	echo('<div class="active">'.FOOTER_ITEM_LOYALTY.'</div>');}
						else{								echo('<a href="/loyalty" title="'.FOOTER_ITEM_LOYALTY_TITLE.'">'.FOOTER_ITEM_LOYALTY.'</a>');}
					?>
				</div>
				<div class="footer_link">
					<?php 
						if($_SESSION['page']==="funding"){	echo('<div class="active">'.FOOTER_ITEM_FUNDING.'</div>');}
						else{								echo('<a href="/funding" title="'.FOOTER_ITEM_FUNDING_TITLE.'">'.FOOTER_ITEM_FUNDING.'</a>');}
					?>
				</div>
				*/
			?>
			<div class="footer_link">
				<?php 
					if($_SESSION['page']==="launcher"){	echo('<div class="active">'.FOOTER_ITEM_LAUNCHER.'</div>');}
					else{								echo('<a href="/launcher" title="'.FOOTER_ITEM_LAUNCHER_TITLE.'">'.FOOTER_ITEM_LAUNCHER.'</a>');}
				?>
			</div>
			<div class="footer_link">
				<?php 
					if($_SESSION['page']==="institute"){	echo('<div class="active">'.FOOTER_ITEM_INSTITUTE.'</div>');}
					else{								echo('<a href="/institute" title="'.FOOTER_ITEM_INSTITUTE_TITLE.'">'.FOOTER_ITEM_INSTITUTE.'</a>');}
				?>
			</div>
		</div>
		<div class="col-md-3">
			<div class="title"><?=FOOTER_RUBRIQUE_TITLE_4?></div>
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
			<div class="title"><?=FOOTER_RUBRIQUE_TITLE_5?></div>
			<div class="footer_link">
				<div class="social">
					<a href="<?=FACEBOOK_MUBIZ_URL?>" title="<?=FACEBOOK_MUBIZ_TITLE?>" rel="nofollow" target="_blank">
						<div class="social_image" id="facebook_link">
							<img alt="facebook" src="/images/social/facebook.png"/>
						</div>
					</a>
				</div>
				<div class="social">
					<a href="<?=TWITTER_MUBIZ_URL?>" title="<?=TWITTER_MUBIZ_TITLE?>"	rel="nofollow" target="_blank">
						<div class="social_image" id="twitter_link">
							<img alt="twitter" src="/images/social/twitter.png"/>
						</div>
					</a>
				</div>
				<div class="social">
					<a href="<?=LINKEDIN_MUBIZ_URL?>"  title="<?=LINKEDIN_MUBIZ_TITLE?>" rel="nofollow" target="_blank">
						<div class="social_image" id="linkedin_link">
							<img alt="linkedin" src="/images/social/linkedin.png"/>
						</div>
					</a>
				</div>
				<div class="social">
					<a href="<?=PINTEREST_MUBIZ_URL?>"  title="<?=PINTEREST_MUBIZ_TITLE?>" rel="nofollow" target="_blank">
						<div class="social_image" id="pinterest_link">
							<img alt="pinterest" src="/images/social/pinterest.png"/>
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