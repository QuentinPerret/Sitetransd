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
			<h1>Pole mécanique</h1>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 contenu">
				<h3>Objectif principal de cette année</h3>
				<p>Cette section illustre tous les points qui ont été pensés tout au long de l'année. La mécanique s'avère souvent être un processus plutot lent avec des petites avancées et des retours en arrière. Néanmoins, nous avons gardé la motivation de parvenir à satisfaire ces objectifs en allant au Fablab le plus de fois possible.
				</p><ul>
					<li>Améliorer les plans du robot de l'année dernière.</li>
					<li>Tendre la chenille du robot. Créer un mecanisme de ressort complexe.</li>
					<li>Assembler toutes les pièces du robot et faire un premier test.</li>
					
				</ul>
				<b>Ce qui avait été fait d'octobre à janvier </b>
				<div class="text-center">
            <img class="illustration" src="images/mapjanvier.png" alt="ecran-accueil" height="400" width="900"  >
            </div>
			
				
				<h3>Aide interne et externe pour mener à bien ces objectifs</h3>
				<p>Nous disposions de l'aide de plusieurs étudiants en stage au fablab. A partir de janvier Hugo en stage pour un mois nous a aidé sur le plan du robot. Malheureusement, ses plans n'étaient pas optimaux et ne fonctionnaient pas à l'assemblage. Un autre étudiant en stage pour quelques mois nous a aidé sur le mécanisme des ressorts. Il a pu répondre à nos besoins et a créé des pièces fonctionnelles. Au niveau interne, notre tuteur Pierre a énormement contribué à la conception et l'assemblage du robot. Il a pu se rendre disponible malgré son emploi du temps chargé et ses autres projets. Quand nous ne savions pas quelle orientation prendre, Pierre nous a donné des conseils et nous a transmis des connaissances en modélisation, impréssion 3D et éléctronique. Pour cela, nous lui devons beaucoup.
				<p></p>
				
				<h3>Ce qui a été fait de janvier à aujourd'hui</h3>
				<ul><li>Nouvelle chenille imprimée avec un matériau plus flexible. Elle est maintenant assez tendu.</li>
				<div class="text-center">
            <img class="illustration" src="images/chenillevf.jpg" alt="ecran-accueil" height="400" width="500"  >
            </div><br/>
			  <li>Un nouveau système de ressorts a été assemblé. Permet à la chenille d'être suffisamment tendue.</li>
				<div class="text-center">
            <img class="illustration" src="images/ressortvf.jpg" alt="ecran-accueil" height="400" width="500"  >
            </div><br/>
        <li>Changement des engrenages du block moteur pour réduire le couple. On a donc choisi des engrenages de plus grand diamètre ce qui nous a obligé à redesigner et réimprimer le block moteur en accord avec les nouvelles dimentions des engrenages.
        </li>
				<div class="text-center">
            <img class="illustration" src="images/changement_engrenage.png" alt="ecran-accueil" height="400" width="500"  >
            </div><br/>
</ul>
				
				<h3>Test du robot en action :</h3>
				
        <p>Nous avons pu tester le système de chenille en branchant le moteur à une prise. Le système fonctionne : la chenille roule sans frottement. <br/>
        Nous avons néanmoins décelé un problème : l'ampérage nécessaire pour démarrer la chenille est très élevé. Cela est dû au choix du moteur qui est trop puissant pour l'utilisation que l'on veut en faire. <br/>
        Un prochain objectif sera donc de changer ce moteur pour un moteur de la même taille mais moins puissant qui aura donc besoin de moins d'ampérage au démarrage.
        </p>
				
				<ul><li>Mettre ici vidéo du robot qui roule (si on l'aura)</li>

				</ul>
				
				
				<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 contenu">
            <h2>Formations</h2>
            <h4>Formation Freecad</h4>
            <p>
            FreeCad est un logiciel gratuit et libre de conception paramétrique, il nous permet également de créer des modèles 3D, notamment pour les domaines de la mécanique. Grâce à ce logiciel, notre encadrant à pu nous fournir un modèle 3D de chaque pièce de notre tank-solaire, le robot Go-West. Une fois les modèles créés sur FreeCad, il ne reste plus qu’à les importer dans le format stl, qui est le format accepté par les imprimantes 3D.
            <br/>Bien que nous n’ayons pas fait les modèles 3D des composants, nous avons néanmoins appris à faire des formes de bases ou encore à poser des contraintes qui vont donc venir figer notre objet. Ces contraintes sont très fortes, elles nous permettent de pouvoir revenir facilement sur la conception de nos objets. 
            <br/>Par exemple, un cas concret de notre projet, construire les chenilles nous a posé problème car les trous nous permettant de relier 2 pièces de la chenille sont pile de la taille des trombones que nous devons mettre dedans. Ainsi, lors de la construction de la deuxième chenille, les pièces n’étant pas encore imprimées nous avons donc pu aller modifier la pièce dans FreeCad. Une fois la contrainte sur le diamètre du trou trouvée, nous avons pu augmenter ce diamètre pour nous faciliter la tâche.
            <br><br>
			<div class="text-center">
            <img src="images/rouedentée.png" height="300" width="300" class="illustration">
</div>
            </p><p class="centre"><u>Modélisation d'une roue dentée sur le logiciel Freecad</u></p>
            <p></p>
            <h4>Formation impression 3D</h4>
            <p>
            De manière à pouvoir poursuivre notre projet, nous avons appris à nous servir d’une imprimante 3D et notamment du logiciel Cura Ultimaker. En effet, bien que notre encadrant nous ai imprimé la majorité des pièces, il n'empêche que nous pouvons toujours améliorer des points ou réimprimer des pièces si nous les cassons (ce qui a pu se produire). Ainsi, nous avons vu quelques fonctionnalités de base comme par exemple le remplissage des pièces en pourcentage qui permet de moduler la solidité de la pièce fabriquée, l’épaisseur des contours, l’ajout d’un support de manière à pouvoir décoller les petites pièces plus facilement. 
Néanmoins, nous avons pu constater qu’il y a parfois de léger défauts dans la conception des pièces, quelques millimètres sont en trop et dans certains cas, nous avons dû limer des parties des pièces pour que tout puisse s’emboiter.
<br><br>
        <div class="text-center">
            <img src="images/imprimante3D.png" height="300" width="300" class="illustration">
            </p><p class="centre"><u>Mise en perspective et impression de la roue dentée</u></p>
            <p></p>
        </div>
            

          <?php require_once "includes/footer.php"; ?>
      </div>

      <?php require_once "includes/scripts.php"; ?>
    </body>

  </html>


