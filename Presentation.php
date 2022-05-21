

  <!doctype html>
  <html>
<body style="background-color: beige">
  <?php
    $pageTitle = "Historique";
    require_once "includes/head.php";
    ?>
  <div class="container">
        <?php require_once "includes/header.php"; ?>

        <div class="container-fluid">
<div class="container-fluid">
	
    <h1 class="titre"> <b>Robot Go-West </b></h1>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 contenu">
            <h2 class="centre">Projet repris de l'année dernière</h2>
        
            <p>Le <b>Robot Go-West</b> a été commencé l'année dernière par un groupe d'élèves de l'ENSC. Cette section retrace la synthèse de ce qui avait été fait. Pour rappel, les principaux objectifs du projet général sont les suivants :</p>
            <br/>
            <div class="text-center">
            <img class="illustration" src="images/ecran-acueil.png" alt="ecran-accueil" height="600" width="1000"  >
            </div>
            <p class="centre"><u>Schéma illustrant les deux parties de l'objectif</u></p>
            <p>Sur ce schéma, nous pouvons observer les deux différentes chaînes que nous devons réaliser. Commençons tout d’abord par un aperçu plus détaillé de ces deux chaînes :</p>
            <br/>
            <h4><b>La chaîne Signal</b></h4>
            <p>La partie signal est commune pour le projet Go-West et pour le projet nous permettant de transformer les signaux des plantes en son. Cette chaîne se décompose de la façon suivante :
            Tout d’abord nous avons les plantes, munies de capteurs directement reliés à notre CAN (convertisseur analogique vers numérique) VegetalSignals, ensuite nous avons l’opto-coupleur, qui permet de séparer les signaux de l’ordinateur de ceux des plantes, afin donc d’isoler les informations en provenance des plantes et de ne pas avoir d’informations parasites. Enfin l’opto-coupleur est relié à notre raspberry-pi pour entrer dans la deuxième chaîne. Nous avons donc pour l’instant le travail des années précédentes à savoir l’opto-coupleur muni de son programme de traitement de signal, ainsi qu’un deuxième programme nous permettant de convertir les informations obtenues en décimal. Durant cette année, nous n’avons pas continué à travailler sur la chaîne signal pour le robot Go-West.</p>
            <br/>
            <h4><b>La chaîne Assemblage mécanique</b></h4>
            <p>En ce qui concerne la partie assemblage mécanique, ce ne sont pas les élèves de l’année précédente mais directement notre superviseur et client, Pierre Grangé-Praderas, qui s’est occupé de nous fournir le matériel nécessaire pour ce projet.
            Pour cela, nous avons eu accès à une boîte contenant tout le matériel nécessaire pour concevoir le robot Go-West. Muni également d’un modèle 3D réalisé sur le logiciel FreeCad, nous avons pu commencer à assembler. Il est important de préciser que le but de la partie assemblage mécanique est de transmettre les informations en sortie, c’est-à-dire interpréter des informations et les transformer en commande moteur.</p>
            <br><br>
            <div class="text-center">
            <img class="illustration" src="images/boitier.png" height="250" width="400" >
            </div>
            <p class="centre"><u>Modèle 3D de l'architecture du robot</u></p>
            <p></p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 contenu">
            <h2>Travail effectué l'an passé</h2>
            <p>
            Le tuteur du projet, Pierre, a assemblé la caisse du robot en assemblant des plaques de bois découpées préalablement à la découpe laser.</p>
           <br/>
           <p> Au niveau <b> mécanique, </b> l'ancien groupe a réalisé principalement :</p>
            <li>l'assemblage des chenilles </li>
            <li>le choix de locomotion pour le robot </li>
            <li>impression des roues dentées </li>
            <li> revision de la taille du tank et modification des plans sur freecad</li>
           
           
            <br/>
            <h2>Anciens matériaux</h2>
            <br/>
            <div class="text-center">
            <img class="illustration" src="images/chenille.png" height="400" width="500" >
            </div>
            <p class="centre"><u> Ancienne chenille du robot Go-West</u></p>
            <p>Cette ancienne chenille était constitué d'un plastique rigide, obtenu grâce à l'imprimante 3D. Nous avons fait le choix de choisir une chenille plus souple.</p>
            <br/>
            <div class="text-center">
            <img class="illustration" src="images/oscilloscope.png" height="400" width="500" >
            </div>
            <p class="centre"><u>Tests à l'oscilloscope</u></p>
            <p>Des branchements avaient été fait pour la commande moteur.</p>
            
            <br/>
            <div class="text-center">
            <img class="illustration" src="images/carte.png" height="350" width="400" >
            </div>
            <p class="centre"><u>Schéma des connexions du Raspberry Pi 3</u></p>
            <div class="text-center">
            <img class="illustration" src="images/driver.png" height="500" width="500" >
            </div>
            <p class="centre"><u>Driver L298N</u></p>
           
            <br/>
            <div class="text-center">
            <img class="illustration" src="images/branchement.PNG" height="500" width="500" >
            </div>
            <p class="centre"><u>Branchement du driver au Raspberry Pi 3</u></p>
            <div class="text-center">
            <img class="illustration" src="images/branchement2.png" height="500" width="500" >
            </div>
            <p class="centre"><u>Branchement du driver au Raspberry Pi 3 et aux moteurs</u></p>
            <p>Manipulation effectuée sur un seul moteur. Nous avons pu cette année travailler sur deux moteurs.</p>
           
            <br/>
            <div class="text-center">
            <img class="illustration" src="images/codebash.png" height="500" width="250" >
            </div>
            <p class="centre"><u>Code Bash pour tester les moteurs</u></p>
            <p>Code python crée afin de faire tourner les moteurs en boucle à différentes vitesse grâce à la librairie RPi.GPIO. Nous devions le modifier et le reprendre avec notre <a href="poleinformatique.php"><b>pole informatique</b></a>.</p>
            
            <h2>Problèmes rencontrés l'an dernier </h2>
            <li> Chenille pas assez tendue </li>
            <li>frottements entre la caisse, les arbres moteurs ainsi que la chenille</li>
            <li>roues directrices trop fragiles</li>
            <li>Difficulté à installer la chenille sur son armature pour correctement les aligner avec les roues directrices</li>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 contenu">
            <h2>Orientation pour la reprise du projet cette année</h2>
            <li>Améliorer la trajectoire et le montage du robot</li>
            <li> Driver les moteurs à l'aide des signaux émis par les plantes </li>
            <li>réfléchir au placement des plantes sans altérer les composants du robot</li>
            <li>Traitement du signal synchrone pour piloter le robot à l'aide du boitier Vegetal Signals</li>
        </div>
    </div>
          <?php require_once "includes/footer.php"; ?>
      </div>

      <?php require_once "includes/scripts.php"; ?>
    </body>

  </html>


   
    