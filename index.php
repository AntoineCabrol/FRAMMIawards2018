<!DOCTYPE html>
<html>
  <head>
	<?php include("include/inc_meta.php") ?>
        <?php include("include/inc_analytics.php") ?>
        <link rel="stylesheet" href="global.css" />
        <title>Festival audiovisuel étudiant - FRAMMI Awards</title>
  </head>

  <body>
        <input type="checkbox" class="lien-tactile-menu"/>
        <input type="radio" name="option-menu" class="lien-tactile-inscription" onClick="location.href='#'"/>
        <input type="radio" name="option-menu" class="lien-neutre" checked/>
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
                        <a href="https://www.facebook.com/frammiawards/" target="_blank"><img src="images/icones/facebook-white.svg" width="100%"/></a>
                        <a href="https://www.instagram.com/frammi_awards/" target="_blank"><img src="images/icones/instagram-white.svg" width="100%"/></a>
                        <a href="https://www.youtube.com/channel/UCrFkdKO0A1VvjbN36g0fUrg" target="_blank"><img src="images/icones/youtube-white.svg" width="100%"/></a>
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
                        <video poster="videos/poster1.png" id="bgvideo" autoplay loop muted>
                                <source src="videos/bgvideo.mp4" type="video/mp4">
                        </video>
                </header>

                <section id="description"> <!-- DESCRIPTION -->
                        <p>
                                Le festival des FRAMMI Awards récompense les réalisations audiovisuelles étudiantes de passionnés pour la 9<sup>ème</sup> édition consécutive. Son objectif principal est de faire découvrir les productions de jeunes talents et permettre aux participants d’être récompensés pour leur travail.
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
        			<h1>RETROSPECTIVE <span>DE L'EDITION 2017</span></h1>
                                <video src="videos/FRAMMI2017.mp4" controls poster="images/miniature.png" width="100%"></video>
        			<div class="cat">
        				<p class="cat1"><span>Bande-son :</span>
                                                <a href="https://goo.gl/BM7Fnz" target="_blank">Massacre au GEC</a></p>
        				<p class="cat2"><span>Scénario :</span>
                                                <a href="https://goo.gl/pc9nEU" target="_blank">Versus dating</a></p>
        				<p class="cat3"><span>Prix du public :</span>
                                                <a href="https://goo.gl/QXbAU2" target="_blank">Relative Liberté</a></p>
        				<p class="cat4"><span>Prix du jury :</span>
                                                <a href="https://goo.gl/zhPwjY" target="_blank">Too Menu Choices</a></p>
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
			<a href="http://www.olivermichael.com/" target="_blank"><img src="images/partenaires/OliverMichael.png" width="auto"/></a>
			<a href="http://www.lasergame-evolution.com/fr/5/Chambery/" target="_blank"><img src="images/partenaires/lasergame.png" width="auto"/></a>
			<a href="http://www.toulontoutcourt.com/" target="_blank"><img src="images/partenaires/logoToulontoutcourt.png" width="auto"/></a>
			<!--a href="" target="_blank"><img src="images/partenaires/votrelogo.jpg" width="auto"/></a>
			<a href="" target="_blank"><img src="images/partenaires/votrelogo.jpg" width="auto"/></a-->
		</section>

                <?php include("include/inc_pied.php") ?>
        </section>

  </body>

 </html>
