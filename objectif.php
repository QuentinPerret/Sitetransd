<!doctype html>
  <html>

  <?php
    $pageTitle = "Ajout d'un film";
    require_once "includes/head.php";
    ?>

    <body style="background-color: beige">
      <div class="container">
        <?php require_once "includes/header.php"; ?>

          <h2 class="text-center">Ajout d'un film</h2>
          <div class="well">
            <form class="form-horizontal" role="form" enctype="multipart/form-data" action="movie_add.php" method="post">
              <input type="hidden" name="id" value="<?= $movieId ?>">
              <div class="form-group">
                <label class="col-sm-4 control-label">Titre</label>
                <div class="col-sm-6">
                  <input type="text" name="title" value="<?= $movieTitle ?>" class="form-control" placeholder="Entrez le titre du film" required autofocus>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Description courte</label>
                <div class="col-sm-6">
                  <textarea name="shortDescription" class="form-control" placeholder="Entrez sa description courte" required>
                    <?= $movieShortDescription ?>
                  </textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Description longue</label>
                <div class="col-sm-6">
                  <textarea name="longDescription" class="form-control" rows="6" placeholder="Entrez sa description longue" required>
                    <?= $movieLongDescription ?>
                  </textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Réalisateur</label>
                <div class="col-sm-6">
                  <input type="text" name="director" value="<?= $movieDirector ?>" class="form-control" placeholder="Entrez son réalisateur" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Année de sortie</label>
                <div class="col-sm-4">
                  <input type="number" name="year" value="<?= $movieYear ?>" class="form-control" placeholder="Entrez son année de sortie" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Image</label>
                <div class="col-sm-4">
                  <input type="file" name="image" />
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-4 col-sm-offset-4">
                  <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-save"></span> Enregistrer</button>
                </div>
              </div>
            </form>
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
    