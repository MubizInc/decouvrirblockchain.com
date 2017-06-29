				<form class="param" action="/controller/lang/set_lang.php" method="post">
					<label for="user_lang"  class="small_left"><?=PARAM_LANGUAGE_TITLE?></label>
					<div class="large_right">
						<select name="user_lang">
							<?php	include_once("lib/lang/lang/".$_SESSION['lang'].".lang.php");	?>
							<option value="ar" <?php if(strcmp($_SESSION['lang'],"ar")==0){echo("selected");}?>>العربية - Arabe</option>
							<!-- <option value="id" <?php if(strcmp($_SESSION['lang'],"id")==0){echo("selected");}?>>Bahasa Indonesia - Indonésien</option> -->
							<!-- <option value="msa" <?php if(strcmp($_SESSION['lang'],"msa")==0){echo("selected");}?>>Bahasa Melayu - Malais</option> -->
							<!-- <option value="ca" <?php if(strcmp($_SESSION['lang'],"ca")==0){echo("selected");}?>>Català - Catalan (bêta)</option> -->
							<!-- <option value="cs" <?php if(strcmp($_SESSION['lang'],"cs")==0){echo("selected");}?>>Čeština - Tchèque</option> -->
							<!-- <option value="da" <?php if(strcmp($_SESSION['lang'],"da")==0){echo("selected");}?>>Dansk - Danois</option> -->
							<option value="de" <?php if(strcmp($_SESSION['lang'],"de")==0){echo("selected");}?>>Deutsch - Deutsche</option>
							<option value="en" <?php if(strcmp($_SESSION['lang'],"en")==0){echo("selected");}?>>English - English</option>
							<option value="es" <?php if(strcmp($_SESSION['lang'],"es")==0){echo("selected");}?>>Español - Spanish</option>
							<!-- <option value="fil" <?php if(strcmp($_SESSION['lang'],"fil")==0){echo("selected");}?>>Filipino</option> -->
							<option value="fr" <?php if(strcmp($_SESSION['lang'],"fr")==0){echo("selected");}?>>Français - French</option>
							<!-- <option value="gl" <?php if(strcmp($_SESSION['lang'],"gl")==0){echo("selected");}?>>Galego - Galicien (bêta)</option> -->
							<!-- <option value="hr" <?php if(strcmp($_SESSION['lang'],"hr")==0){echo("selected");}?>>Hrvatski - Croate (bêta)</option> -->
							<option value="it" <?php if(strcmp($_SESSION['lang'],"it")==0){echo("selected");}?>>Italiano - Italian</option>
							<!-- <option value="hu" <?php if(strcmp($_SESSION['lang'],"hu")==0){echo("selected");}?>>Magyar - Hongrois</option> -->
							<!-- <option value="nl" <?php if(strcmp($_SESSION['lang'],"nl")==0){echo("selected");}?>>Nederlands - Néerlandais</option> -->
							<!-- <option value="no" <?php if(strcmp($_SESSION['lang'],"no")==0){echo("selected");}?>>Norsk - Norvégien</option> -->
							<!-- <option value="pl" <?php if(strcmp($_SESSION['lang'],"pl")==0){echo("selected");}?>>Polski - Polonais</option> -->
							<!-- <option value="pt" <?php if(strcmp($_SESSION['lang'],"pt")==0){echo("selected");}?>>Português - Portugais</option> -->
							<!-- <option value="ro" <?php if(strcmp($_SESSION['lang'],"ro")==0){echo("selected");}?>>Română - Roumain</option> -->
							<!-- <option value="fi" <?php if(strcmp($_SESSION['lang'],"fi")==0){echo("selected");}?>>Suomi - Finnois</option> -->
							<!-- <option value="sv" <?php if(strcmp($_SESSION['lang'],"sv")==0){echo("selected");}?>>Svenska - Suédois</option> -->
							<!-- <option value="vi" <?php if(strcmp($_SESSION['lang'],"vi")==0){echo("selected");}?>>Tiếng Việt - Vietnamien</option> -->
							<!-- <option value="tr" <?php if(strcmp($_SESSION['lang'],"tr")==0){echo("selected");}?>>Türkçe - Turc</option> -->
							<!-- <option value="el" <?php if(strcmp($_SESSION['lang'],"el")==0){echo("selected");}?>>Ελληνικά - Grec (bêta)</option> -->
							<option value="ru" <?php if(strcmp($_SESSION['lang'],"ru")==0){echo("selected");}?>>Русский - Russian</option>
							<!-- <option value="uk" <?php if(strcmp($_SESSION['lang'],"uk")==0){echo("selected");}?>>Українська мова - Ukrainien</option> -->
							<!-- <option value="he" <?php if(strcmp($_SESSION['lang'],"he")==0){echo("selected");}?>>עִבְרִית - Hébreu</option> -->
							<!-- <option value="fa" <?php if(strcmp($_SESSION['lang'],"fa")==0){echo("selected");}?>>فارسی - Persan</option> -->
							<!-- <option value="hi" <?php if(strcmp($_SESSION['lang'],"hi")==0){echo("selected");}?>>हिन्दी - Hindi</option> -->
							<!-- <option value="bn" <?php if(strcmp($_SESSION['lang'],"bn")==0){echo("selected");}?>>বাংলা - Bengali</option> -->
							<!-- <option value="th" <?php if(strcmp($_SESSION['lang'],"th")==0){echo("selected");}?>>ภาษาไทย - Thaï</option> -->
							<!-- <option value="ko" <?php if(strcmp($_SESSION['lang'],"ko")==0){echo("selected");}?>>한국어 - Coréen</option> -->
							<!-- <option value="ja" <?php if(strcmp($_SESSION['lang'],"ja")==0){echo("selected");}?>>日本語 - Japonais</option> -->
							<!-- <option value="zh-cn" <?php if(strcmp($_SESSION['lang'],"zh-cn")==0){echo("selected");}?>>简体中文 - Chinois simplifié</option> -->
							<!-- <option value="zh-tw" <?php if(strcmp($_SESSION['lang'],"zh-tw")==0){echo("selected");}?>>繁體中文 - Chinois traditionnel</option> -->
						</select>
						<input type="submit" value="<?=PARAM_SAVE_BUTTON?>"/>
						<?php
							if(session_isset("set_lang_form_error_message")){
								echo $_SESSION['set_lang_form_error_message'];
							}
						?>
					</div>
				</form>