<!doctype html>
  <html>

  <?php
    $pageTitle = "Ajout d'un film";
    require_once "includes/head.php";
    ?>

    <body style="background-color: beige">
      <div class="container">
        <?php require_once "includes/header.php"; ?>

        <div class="container-fluid">
			<h1>Gestion de projet</h1>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 contenu">
				<h3>Vision</h3>
				<p>Comprendre, analyser et exploiter les signaux que peuvent renvoyer les plantes autant d’un point de vue fonctionnel qu’artistique. Les deux projets s’inscrivent dans la démarche d’étudier et de comprendre les ressentis des plantes avec leur environnement. Par les capteurs, il sera autant possible de les orienter vers une source lumineuse pour leur bien-être que de créer des sons qui reflètent leur état général à un moment donné. </p>
				
				<h3>Mission</h3>
				<ul><li>Concevoir un robot motorisé s’orientant vers la source lumineuse de façon à exposer les plantes qui se trouvent à son bord.</li>
				<li>Exploiter les sensations des plantes soumises à des conditions particulières (température, eau, bruit, lumière) afin de composer notre propre expérience musicale.</li>
				<li>Rendre accessible à un public le plus vaste possible ces deux projets par le biais de documentation et d’ateliers pédagogiques.</li></ul>
				
				<h3>North star : Degré de satisfaction du public présent aux ateliers arts et sciences</h3>
				<p>Nous avons choisi cette North Star car elle rassemble l’ensemble des spécificités souhaitées par le client. Dans un premier temps, la conception et le développement des projets doivent constituer un travail de qualité, nous serons particulièrement attachés à la documentation qui est attachée à nos travaux, en accord avec les volonté de notre client. Dans un second temps, il sera demandé de diriger des ateliers à l'attention de jeunes ou très jeunes. Ces ateliers auront pour but de les sensibiliser à l'art et à la science au travers des applications citées plus tôt.  </p>
				
				<h3>KPI (Key performance Indicator)</h3>
				<ul><li>Temps mis par le Robot Go-west pour suivre la bonne direction. Évaluer la réactivité du robot et du programme quant à la poursuite d’une source lumineuse.</li>
				<li>Richesse de la bibliothèque des sons possibles. Évaluer à partir du nombre de sons différents que peut produire la plante face aux stimulations qui lui sont présentées (hydratation, température, vent).</li>
				<li>Nombre de créations personnelles réalisées par les personnes ayant suivi les ateliers. Dans une démarche d’autonomie, les élèves sont invités à prendre des initiatives.</li>
				<li>Nombre de questions posées pendant les ateliers sur la documentation. Connaître le nombre de questions relatives aux incompréhensions de la documentation nous permettra d’évaluer la qualité de celle-ci. </li></ul>
				
				<h3>User Journey</h3>
				<img src="img/user_journey.png" height="1000" width="1700" class="photo">
				<br>
				<h3>Road Map</h3>
				<p>Pour la réalisation de la roadmap, nous ne pouvons pas réellement nous fier aux blocs de notre user journey dans le sens ou nos futurs utilisateurs interviennent dans le cadre d’ateliers. Ces ateliers nécessitent que le robot Go-west et le projet TSRS (Transformation du Signal Racinaire en Son) soient terminés. Or, ce n’est pas le cas pour le moment. C’est pourquoi, cette roadmap est donc une préparation en amont des ateliers, décrivant donc toutes les actions nécessaires pour dispenser les dits ateliers. De plus, le fait d’être une équipe de 4 étudiants nous permet de nous répartir les tâches par groupe de deux par exemple, c’est pourquoi il y a deux chemins en parallèle. Cependant, certaines tâches nécessitent que d’autres soient terminées, comme les phases de tests typiquement.</p>
				<br>
				<img src="img/roadmap.png" height="1000" width="1000" class="photo">
				<img src="img/MatriceImpact.JPG" height="700" width="700" class="photo">
				<br>
				<ul>
				<li><b>Travailler sur la boucle signal (S) :</b> Ce travail a déjà été fait au préalable par les anciens groupes de transdi, cependant, nous devons nous assurer que toute cette chaîne est bien opérationnelle pour que le projet fonctionne, c’est donc une étape qui n’est pas forcément très importante mais qui est primordiale pour les deux applications que nous allons en faire.</li>
				<li><b>Recueil des pièces pour le robot (S) :</b> Cette étape consiste à créer à l’aide de l’impression 3D les pièces manquantes pour la construction du robot Go-West. Le travail de modélisation des pièces étant déjà réalisé, il ne s’agit plus que de les imprimer dans la bonne quantité.</li>
				<li><b>Assemblage du robot (M) :</b> Cette étape consiste à assembler le robot, le temps accordé à cette étape est d’un mois car il peut y avoir des problèmes et des pièces à modifier ou à réimprimer.</li>
				<li><b>Passage vers synchrone (M) :</b> Cette étape inclut une quantité assez importante de code. De plus, nous aurons besoin de l’aide d'experts et d’une formation adaptée pour que notre programme soit adapté à la transmission de son à partir de signaux enregistrés en direct. C’est pourquoi nous avons décidé de la définir sur un mois.</li>
				<li><b>Développement du programme principal (L) :</b> Cette phase inclut par exemple les recherches nécessaires pour comprendre quels signaux des plantes indiquent une forte exposition au soleil, une traduction de ces signaux pour créer un code à envoyer au moteur, des formations sur l’utilisation d’un raspberry-pi embarqué… C’est pourquoi elle constitue la tâche la plus longue et importante de notre projet.</li>
				<li><b>Liaison de la partie signal au robot (S) :</b> Une fois que la partie programmation et l’assemblage du robot sera complété, la liaison devra être faite entre les deux branches du projet pour que le robot soit complété. C’est une tâche qui peut être assez courte.</li>
				<li><b>Phase de tests (S) * 2 :</b> Ces deux phases sont présentes respectivement à la fin des travaux sur le projet Go-West et de transformation du signal racinaire en son (TSRS). Elles permettent de vérifier le bon fonctionnement de nos projets. Ce sont donc des tâches assez courtes.</li>
				<li><b>Réalisation d’un script sur Ossia-score (S) :</b> Cette tâche consiste à créer un script sur le logiciel Ossia-score permettant d’avoir une représentation musicale des signaux reçu par les plantes. On va donc chercher simplement à associer les signaux à des instruments par exemple. Cette tâche est assez courte.</li>
				<li><b>Préparer l’organisation des ateliers (M) :</b> Durant cette tâche, l’équipe devra se charger de préparer le contenu des ateliers (préparation des robots, une documentation simplifiée pour apporter un plus pédagogique, etc…). C’est pourquoi nous avons choisi de lui accorder un mois.</li>
				<li><b>Recrutement des visiteurs pour les ateliers (S) :</b> Cette tâche est assez courte prenant en compte le fait que le fablab a déjà sa base de jeunes pouvant participer à ce genre d’ateliers. Le tout est donc de réaliser une tâche de communication.</li>
				<li><b>Rédaction de la documentation (L) :</b> C’est une tâche primordiale pour assurer la valeur scientifique de notre projet. Le but étant de pouvoir paraître dans des journaux comme Hackaday par exemple. Il faut donc que la documentation soit extrêmement précise pour que notre travail soit reproductible. C’est donc une tâche fastidieuse qui prend beaucoup de temps.</li>
				<li><b>Lancement des ateliers (S) :</b> C’est la dernière étape de notre projet, le lancement des ateliers. C’est plutôt une ligne d’arrivée qu’une tâche étant donné qu’elle représente la fin de notre roadmap, il ne reste plus qu’à animer les ateliers !</li>
				</ul>
				
				<h3>Outils utilisés</h3>
				<h4>Communication</h4>
				<ul class="row" style="list-style: none;">
				<li class="col-lg-6 col-md-6 col-sm-12 centre"><u>Gmail</u><br><img src="img/gmail.png" height="100" width="100" class="photo"></li>
				<li class="col-lg-6 col-md-6 col-sm-12 centre"><u>Messenger</u><br><img src="img/messenger.png" height="100" width="100" class="photo"></li>
				</ul>
				<p>Pour gérer les communications au sein de notre équipe d'étudiants, nous avons principalement utilisé messenger. Nous avons décidé d'abandonner l’application Discord que nous avions utilisée au premier semestre car elle ne représentait pas une réelle plus-value. Enfin, nous avons continué d’interagir avec notre tuteur ainsi que d’autres intervenants via Gmail.</p>
				<h4>Partage de ressources</h4>
				<ul class="row" style="list-style: none;">
				<li class="col-lg-6 col-md-6 col-sm-12 centre"><u>Google Drive</u><br><img src="img/drive.png" height="100" width="100" class="photo"></li>
				<li class="col-lg-6 col-md-6 col-sm-12 centre"><u>Wiki du Fablab Coh@bit</u><br><img src="img/cohabit.png" height="100" width="200" class="photo"></li>
				</ul>
				<p>Nous avons décidé d’effectuer le partage de ressources via google drive. C’est un outil très pratique qui permet d'échanger rapidement des documents et interagir tous ensemble dessus. Néanmoins, l’une des problématiques de notre projet était la présence de données pouvant être sensibles. En effet, c’est un domaine de recherche très convoité. C’est donc l’une des raisons qui nous a également poussé à utiliser le wiki du fablab Coh@bit. L’autre raison, qui est plus évidente, est la nécessité de rédiger une documentation précise de notre travail, afin qu’il ait une valeur scientifique. Ce wiki est donc l’endroit idéal pour remplir cet objectif car il dépend de la structure responsable du projet.</p>
				
			</div>
		</div>

		</div>

          <?php require_once "includes/footer.php"; ?>
      </div>

      <?php require_once "includes/scripts.php"; ?>
    </body>

  </html>


    <html>

    <body>
      <img src="https://sd.keepcalm-o-matic.co.uk/i/don-t-mess-with-me-bro.png" />
    </body>

    </html>
    