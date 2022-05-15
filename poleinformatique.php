<!doctype html>
  <html>

  <?php
    $pageTitle = "Pole Informatique";
    require_once "includes/head.php";
    ?>

    <body style="background-color: beige">
      	<div class="container">
        	<?php require_once "includes/header.php"; ?>
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
					<li>Récupérer les données envoyées par les capteurs en temps réel</li>
					<li>Traiter ces données</li>
					<li>À partir des informations obtenues, faire déplacer le robot</li>
				</ul>
			</div>
		</div>
				<h1>Travail réalisé</h1>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 contenu">
						<h3>Progression du projet</h3>
						<p><b>Première partie : reprise du projet</b>
						</p><ul>
							<li>Le travail du pole informatique en octobre a commencé par une reprise du projet et des différents scripts laissé sur le wiki par le groupe d'étudiants de l'année précédente. Deux scripts ont été laissée : un en C et un en python. Les membres du pôle ayant déja fait du python. Nous avons décidé de nous concentré d'abord sur le scripts python lors de notre travail de reprise.</li>
							<li>Les scripts laissées permettaient de transformer des valeurs héxadécimales contenus dans un fichier en des valuers décimales. C'est scripts ont pour objectif de transformé les valeurs envoyés par le capteur Végétal Signal afin de rendre leur traitement plus facile par la suite.</li>
							<li>Néanmoins le code était très peu commenté et donc peu compréhensible, dans un soucis de partage nous avons décidé de le commenter plus précisement et de le documenté sur notre page wiki.</li>
						</ul>
						<b>Deuxème partie : traitement du signal</b>
						<ul>
							<li>Une fois le scrtipt python documenté nous avons souhaité ajouter au script python une partie de traitement du signal obtenu en étudiant sur moyenne au cours du temps mais aussi en décompant le sigal en série de Fourier.</li>
							<li>Une rencontre avec les ingénieurs de Vegetal Signals nous a permis d'en apprendre plus sur les possibilités de traitement de signal avec leur capteur mais aussi leurs conseils nous ont permis de recaadrer notre travail.</li>
						</ul>
						<b>Troisième partie : changement de language de code </b>
						<ul>
							<li>Le pyhton avait été choisis car c'était un language déjà utilisé par les membres du pôle informatique mais celui-ci ne permettait pas de réaliser les opérations nécessaires de traitement des valeurs assez vite.</li>
							<li>Nous avons donc décider de coder à prtésent en C en reprenant le script de transformation de valuer héxadécimales vers décimales.</li>
							<li>Le C étant un language nouveau pour tout les membres du groupe, une période de formation a été nécessaire ce qui nous a retardé.</li>
						</ul>
						<p></p>
						
					</div>
				</div>
				<h1>Suite du projet</h1>

				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 contenu">
						<h3>Travail restant</h3>
						<ul>
							<li>Finir les scripts C permettant de traiter les valurs renvoyé par le capteurs Vegetal Signals.</li>
							<li>Réalisé des expériences afin de déterminer une loi permettant de diriger efficacement le robot vers le soleil.</li>
							<li>Documenter le travail réalisé.</li>
						</ul>
						<p>Ce travail sera poursuivi par Quentin qui effectura son stage d'innitaition au fablab Coh@bit.</p>
						<p>L'ensemble des scripts écrits est disponible sur le <a href='https://git.cohabit.fr/pgp/Traitement-signal-plantes' target="_blank">GitTea</a> du projet </p>
					</div>
				</div>

			</div>
		</div>
		<?php require_once "includes/footer.php"; ?>
		<?php require_once "includes/scripts.php"; ?>
    </body>
  </html>    