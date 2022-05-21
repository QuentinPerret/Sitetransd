<!doctype html>
  <html>

  <?php
    $pageTitle = "Pôle Informatique";
    require_once "includes/head.php";
    ?>

    <body style="background-color: beige">
      	<div class="container">
        	<?php require_once "includes/header.php"; ?>
			<h3>Outils utilisés</h3>
				<h4>Outils utilisés</h4>
				<ul class="row" style="list-style: none;">
				<li class="col-lg-4 col-md-4 col-sm-12 centre"><u>C</u><br/><img src="images/linguagem-c.png" height="100" class="photo"></li>
				<li class="col-lg-4 col-md-4 col-sm-12 centre"><u>Python</u><br/><img src="images/python.png" height="100" class="photo"></li>
				<li class="col-lg-4 col-md-4 col-sm-12 centre"><u>GitTea</u><br/><img src="images/gitea.png" alt="logo gitTea" height="100"></li>
				</ul>
			<div class="container-fluid">
			<h1>Objectifs du pôle informatique</h1>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 contenu">
				<h3>Objectif principal</h3>
				<p>L'objectif principal du pôle informatique était de récupérer les valeurs renvoyées par les capteurs placés sur les plantes et les traiter, afin d'utiliser les données obtenues pour diriger le robot vers le soleil.</p>
				<p>Pour cela, le pôle était composé de deux membres : </p>
				<ul>
					<li>Clara Courtois</li>
					<li>Quentin Perret</li>
				</ul>
				<h3>Sous-objectifs</h3>
				<p>Le pôle informatique commençant pratiquement de 0 ce travail, il a fallu découper cet objectif majeur en plusieurs tâches.</p>
				<ul>
					<li>Compléter la documentation, et notamment commenter le code laissé par les élèves de l'an dernier</li>
					<li>Récupérer les données envoyées par les valeurs en temps réel</li>
					<li>Traiter ces valeurs</li>
					<li>À partir des informations obtenues, faire déplacer le robot</li>
				</ul>
			</div>
		</div>
				<h1>Travail réalisé</h1>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 contenu">
						<h3>Progression du projet</h3>
						<p><b>Ce qui a été fait depuis janvier</b></p>
						<div class="text-center">
							<img class="illustration" src="images/mapjanvier_info.PNG" alt="progression du pôle informatique depuis janvier"  height=400 width=900/>
						</div>
						<br/>
						<p><b>Première partie : reprise du projet</b>
						</p><ul>
							<li>Le travail du pôle informatique en octobre a commencé par une reprise du projet et des différents scripts laissés sur le wiki par le groupe d'étudiants de l'année précédente. Deux scripts ont été laissés : un en C et un en python. Les membres du pôle ayant déja fait du python, nous avons décidé de nous concentrer d'abord sur le scripts python lors de notre travail de reprise.</li>
							<li>Les scripts laissés permettaient de transformer des valeurs héxadécimales contenues dans un fichier en des valeurs décimales. Ces scripts ont pour objectif de transformer les valeurs envoyées par le capteur Végétal Signal afin de rendre leur traitement plus facile par la suite.</li>
						<li>Néanmoins le code était très peu commenté et donc peu compréhensible, donc, dans un soucis de partage, nous avons décidé de le commenter plus précisement et de le documenter sur notre page wiki.</li>
						</ul>
						<p><b>Deuxème partie : traitement du signal</b></p>
						<ul>
							<li>Une fois le script python documenté, nous avons souhaité lui ajouter une partie de traitement du signal obtenu en étudiant sa moyenne au cours du temps, mais aussi en décomposant le signal en séries de Fourier.</li><br/><br/> 	
							<div class="centre"><img src="images/plotFramboisier.png" height="500" class="graph"><br/><u>Figure représentant le signal d'un pied de Framboisier et son spectre</u><br/><br/></div>
							<div class="centre"><img src="images/plotFramboisierZoom.png" height="500" class="graph"><br/><u>Figure représentant le signal d'un pied de Framboisier et son spectre zoomé</u><br/><br/></div></li>
							<li>Une rencontre avec les ingénieurs de Vegetal Signals nous a permis d'en apprendre plus sur les possibilités de traitement de signal avec leur capteur, et leurs conseils nous ont permis de recadrer notre travail.</li>
						</ul>
						<p><b>Troisième partie : portage de code en C</b></p>
						<ul>
							<li>Le python avait été choisi car c'était un langage déjà utilisé par les membres du pôle informatique, mais celui-ci ne permettait pas de réaliser les opérations nécessaires de traitement des valeurs assez rapidement.
							<li>Nous avons donc décidé de coder à présent en C, en reprenant le script de transformation de valeurs héxadécimales vers les valeurs décimales.</li>
							<li>Le C étant un langage nouveau pour tous les membres du groupe, une période de formation a été nécessaire, et nous a retardés.</li>
						</ul>
					</div>
				</div>
				<h1>Suite du projet</h1>

				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 contenu">
						<h3>Travail restant</h3>
						<ul>
							<li>Finir les scripts C permettant de traiter les valeurs renvoyées par les capteurs Vegetal Signals.</li>
							<li>Réaliser des expériences afin de déterminer une loi permettant de diriger efficacement le robot vers le soleil.</li>
							<li>Documenter le travail réalisé.</li>
						</ul>
						<p>Ce travail sera poursuivi par Quentin qui effectura son stage d'initiation au fablab Coh@bit.</p>
						<p>L'ensemble des scripts écrits est disponible sur le <a href='https://git.cohabit.fr/pgp/Traitement-signal-plantes' target="_blank">GitTea</a> du projet. </p>
					</div>
				</div>

			</div>
		</div>
		<?php require_once "includes/footer.php"; ?>
		<?php require_once "includes/scripts.php"; ?>
    </body>
  </html>    