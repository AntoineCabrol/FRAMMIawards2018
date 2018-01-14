<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <?php include("include/inc_analytics.php") ?>
        <link rel="stylesheet" href="global.css" />
        <title>FRAMMI Awards</title>
  </head>

  <body>
        <input type="checkbox" class="lien-tactile-menu"/>
        <input type="radio" name="option-menu" class="lien-tactile-inscription" onClick="location.href='#'"/>
        <input type="radio" name="option-menu" class="lien-neutre" />
        <div class="bouton">
                <div class="ligne-menu"></div>
                <div class="ligne-menu"></div>
                <div class="ligne-menu"></div>
        </div>
        <div class="fond-bouton"></div>

        <nav id="menu"> <!-- MENU -->
                <ul class="elements-menu">
                        <li><a href="#description">Le concept</a></li>
                        <li><a href="#edition2017">L'édition 2017</a></li>
                        <li><a href="#localisation">Localisation</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li>Inscription</li>
                </ul>
                <div class="social">
                        <a href="https://goo.gl/36aCRL" target="_blank"><img src="images/icones/facebook-white.svg" width="100%"/></a>
                        <a href="https://goo.gl/Yz5tVD" target="_blank"><img src="images/icones/instagram-white.svg" width="100%"/></a>
                        <a href="https://goo.gl/hJQdtk" target="_blank"><img src="images/icones/youtube-white.svg" width="100%"/></a>
                </div>
        </nav>

        <div id="zone-expend">
                <section id="inscription">
                        <?php include("include/inc_details-inscription.php") ?>
                </section>
        </div>

        <section id="grid-index">
                <header> <!-- ENTETE -->
                        <img src="images/logo_blanc.png" id="logo" alt="logo">
                </header>

                <section id="description"> <!-- DESCRIPTION -->
                        <p>
                                Le festival des FRAMMI Awards est un <span>Festival de réalisations audiovisuelles pour étudiants</span>.
                                Depuis la première édition de 2010, l’événement invite à découvrir des courts-métrages réalisés par des étudiants qui souhaitent présenter leur réalisation. Notre objectif principal est de <span>partager</span> autour d’un événement qui alliera professionnalisme et convivialité en regroupant des étudiants autour d’une <span>passion commune</span>.
                        </p>
                        <p>
                                Nous souhaitons faire découvrir les productions de jeunes talents et permettre aux participants d’être <span>récompensés</span> pour leur travail et leur dévouement.
                                De plus, cet événement leur permettra d’avoir une première expérience en tant qu’amateur dans ce domaine. Nous avons pour objectif de <span>diffuser</span> notre passion pour l’audiovisuel et inviter des personnes à la <span>découvrir</span>.
                        </p>
                </section>

                <section id="explications"> <!-- ICONES EXPLICATIVES -->
                        <div>
                                <a class="idee"></a>
                                <img src="images/icones/target.svg" class="idee"/>
                                <legend>Trouvez <span>le scénario</span></legend>
                                <a class="clap"></a>
                                <img src="images/icones/clapperboard.svg" class="clap"/>
                                <legend><span>Faites votre film</span> de maximum 5 minutes</legend>
                                <a class="fusee"></a>
                                <img src="images/icones/rocket.svg" class="fusee"/>
                                <legend><span>Envoyez nous</span> votre oeuvre !</legend>
                                <a class="trophee"></a>
                                <img src="images/icones/trophy.svg" class="trophee"/>
                                <legend><span>Remportez</span> un prix</legend>
                                <a class="tapis"></a>
                                <img src="images/icones/red-carpet.svg" class="tapis"/>
                                <legend>Venez le <span>lundi 5 Mars 2018</span></legend>
                        </div>
                </section>

                <section id="participer"> <!-- BOUTON INSCRIPTION -->
                        <input type="radio" name="inscription-accueil" class="bouton-accueil"/>
                        <input type="radio" name="inscription-accueil" class="bouton-accueil-close" checked/>
                        <div class="inscription-popup">
                                <div class="traits-inscription-popup">
                                        <div class="trait"></div>
                                        <div class="trait"></div>
                                </div>
                                <?php include("include/inc_details-inscription.php") ?>
                        </div>
                        <div class="bouton-index">INSCRIPTION</div>
                        </form>

                </section>

                <section id="edition2017">  <!-- EDITION 2017 -->
                        <div class="edition-contenu">
        			<h1>RETOSPECTIVE <span>DE L'EDITION 2017</span></h1>
                                <video src="images/Aftermovie - FRAMMI AWARDS 2017 [720p].mp4" controls poster="images/miniature.png" width="100%"></video>
        			<div class="cat">
        				<p class="cat1"><span>Bande-son :</span>
                                                <a href="https://goo.gl/BM7Fnz" target="_blank">Massacre au GEC</a></p>
        				<p class="cat2"><span>Scénario :</span>
                                                <a href="https://goo.gl/pc9nEU" target="_blank">Versus dating</a></p>
        				<p class="cat3"><span>Prix du public :</span>
                                                <a href="https://goo.gl/QXbAU2" target="_blank">Relative Liberté</a></p>
        				<p class="cat4"><span>Prix du jury :</span>
                                                <a href="https://goo.gl/zhPwjY" target="_blank">Too Menu Choices</a></p>
        				<p> (2018 inaugurera la catégorie écoles)</p>
        			</div>
                        </div>
                </section>

                <section id="localisation"> <!-- LOCALISATION -->
                        <div class="localisation-bande">
                                <div class="localisation-contenu">
                                        <h1>Localisation</h1>
                                        <h2>
                                                Salle Jean-Renoir<br />
                                                30 rue Nicolas Parent<br />
                                                73000 Chambéry<br />
                                                FRANCE<br />
                                        </h2>
                                </div>
                        </div>
                        <a class="localisation-bouton" href="https://goo.gl/maps/i1jbWyNuhmx" target="_blank">itinéraire</a>
                </section>

                <section id="partenaires">
                        <h1>Nos partenaires</h1>
			<img src="images/partenaires/logoMMI.png" width="auto"/>
			<img src="images/partenaires/logoUSMB.png" width="auto"/>
			<img src="images/partenaires/logoToulontoutcourt.png" width="auto"/>
			<img src="images/partenaires/votrelogo.jpg" width="auto"/>
			<img src="images/partenaires/votrelogo.jpg" width="auto"/>
		</section>

                <?php include("include/inc_pied.php") ?>
        </section>

  </body>

 </html>
